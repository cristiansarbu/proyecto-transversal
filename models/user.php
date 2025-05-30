<?php

    class UserModel extends Model {
        public function register() {
            // Autorización
            if (isset($_SESSION['is_logged_in'])) {
                header('Location: ' . ROOT_URL );
                exit();
            }

            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Funcionalidad de formulario multi-página (primera página -> información personal, segunda página -> credenciales)
            // Default inicial a paso 1
            if (!isset($_SESSION['register_form_step'])) {
                $_SESSION['register_form_step'] = 1;
            }

            if (isset($post['submit2'])) {
                // Si el formulario ha sido completado
                if ($post['username'] == '' || $post['password'] == '' || $post['politicapriv'] == '') {
                    $_SESSION['error_signup_2'] = True;
                } else {
                    // Ambos formularios completados con datos validados
                    $password = md5($post['password']);

                    // Comprobar que el usuario introducido es único en la base de datos
                    $this->query('SELECT usuario FROM administrador
                                        UNION
                                        SELECT usuario FROM medico
                                        UNION
                                        SELECT usuario FROM paciente;');
                    $results = $this->resultSet();

                    $existe = False;
                    foreach ($results as $row) {
                        if ($row['usuario'] == $post['username']) {
                            $existe = True;
                            break;
                        }
                    }

                    if ($existe) {
                        $_SESSION['error_signup_2_usuario'] = True;
                    } else {
                        // Insert into MySQL
                        $this->query('INSERT INTO paciente (dni, nombre, usuario, contrasena, correo, telefono, fecha_nac) VALUES (:dni, :name, :user, :password, :email, :phone, :dob)');
                        $this->bind(':dni', $_SESSION['dni']);
                        $this->bind(':name', $_SESSION['name']);
                        $this->bind(':user', $post['username']);
                        $this->bind(':password', $password);
                        $this->bind(':email', $_SESSION['email']);
                        $this->bind(':phone', $_SESSION['phone']);
                        $this->bind(':dob', $_SESSION['date']);

                        $this->execute();
                        // Verify
                        if ($this->lastInsertId() !== null) {
                            // Redirect
                            header('Location: ' . ROOT_URL . 'users/login');
                        }

                        unset($_SESSION['register_form_step']);
                    }

                }
            } else {
                // Si el formulario no ha sido completado
                if (isset($post['submit1'])) {
                    // Comprobar todos los campos en el server-side aparte de la comprobación required por html para el cliente

                    $this->query("SELECT correo FROM paciente");
                    $correos = $this->resultSet();
                    foreach ($correos as $fila) {
                        if ($fila['correo'] == $post['email']) {
                            $_SESSION['error_signup_1_email'] = True;
                            return '';
                        }
                    }

                    $this->query("SELECT dni from paciente");
                    $dnis = $this->resultSet();
                    foreach ($dnis as $fila) {
                        if ($fila['dni'] == $post['dni']) {
                            $_SESSION['error_signup_1_dni'] = True;
                            return '';
                        }
                    }

                    if ($post['name'] == '' || $post['dni'] == '' || $post['email'] == '' || $post['phone'] == '' || $post['date'] == '') {
                        $_SESSION['error_signup_1'] = True;
                    } else {
                        // Guardar datos del primer formulario en sesión para el segundo formulario
                        $_SESSION['name'] = $post['name'];
                        $_SESSION['dni'] = $post['dni'];
                        $_SESSION['email'] = $post['email'];
                        $_SESSION['phone'] = $post['phone'];
                        $_SESSION['date'] = $post['date'];

                        $_SESSION['register_form_step'] = 2;
                    }
                }
            }
            return;
        }

        public function login() {
            // Autorización
            if (isset($_SESSION['is_logged_in'])) {
                header('Location: ' . ROOT_URL );
                exit();
            }

            // Sanitize Post
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($post['password'])) {
                $password = md5($post['password']);
            }

            if (isset($post['submit'])) {
                // Compare Login
                $this->query("SELECT 'admin' AS tipo FROM administrador WHERE usuario = :username AND contrasena = :password 
                                UNION SELECT 'paciente' AS tipo FROM paciente WHERE usuario = :username AND contrasena = :password
                                UNION SELECT 'medico' AS tipo FROM medico WHERE usuario = :username AND contrasena = :password;");
                $this->bind(':username', $post['username']);
                $this->bind(':password', $password);
                $this->execute();

                $row = $this->single();

                if ($row) {
                    if ($row['tipo'] == 'admin') {
                        $_SESSION['user_type'] = 'admin';
                        $_SESSION['is_logged_in'] = true;
                        $this->query("SELECT * FROM administrador WHERE usuario = :username");
                        $this->bind(':username', $post['username']);
                        $this->execute();
                        $row = $this->single();

                        $_SESSION['USER_DATA'] = array(
                            "id" => $row['id_admin']
                        );
                        header('Location: ' . ROOT_URL . 'admin');

                    } elseif ($row['tipo'] == 'paciente') {
                        $_SESSION['user_type'] = 'paciente';
                        $this->query("SELECT * FROM paciente WHERE usuario = :username");
                        $this->bind(':username', $post['username']);
                        $this->execute();
                        $row = $this->single();

                        $_SESSION['is_logged_in'] = true;
                        $_SESSION['USER_DATA'] = array(
                            "id" => $row['id_usuario'],
                            "dni" => $row['dni'],
                            "name" => $row['nombre'],
                            "user" => $row['usuario'],
                            "password" => $row['contrasena'],
                            "email" => $row['correo'],
                            "phone" => $row['telefono'],
                            "dob" => $row['fecha_nac']
                        );
                        header('Location: ' . ROOT_URL . 'appointments/patientAppointments');

                    } elseif ($row['tipo'] == 'medico') {
                        $_SESSION['user_type'] = 'medico';
                        $this->query("SELECT * FROM medico WHERE usuario = :username");
                        $this->bind(':username', $post['username']);
                        $this->execute();
                        $row = $this->single();

                        $_SESSION['is_logged_in'] = true;
                        $_SESSION['USER_DATA'] = array(
                            "id" => $row['id_usuario'],
                            "dni" => $row['dni'],
                            "name" => $row['nombre'],
                            "user" => $row['usuario'],
                            "password" => $row['contrasena'],
                            "email" => $row['correo'],
                            "phone" => $row['telefono'],
                            "specialty" => $row['especialidad'],
                            "office" => $row['consulta']
                        );
                        header('Location: ' . ROOT_URL . 'appointments');

                    }
                } else {
                    $_SESSION['error_login'] = true;
                }
            }
            return;
        }

        public function logout() {
            // Autorización
            if (!isset($_SESSION['is_logged_in'])) {
                header('Location: ' . ROOT_URL );
                exit();
            }

            // Sanitize Post
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($post['logout'])) {
                unset($_SESSION['is_logged_in']);
                unset($_SESSION['USER_DATA']);
                session_destroy();
                // Redirect
                header('Location: ' . ROOT_URL);
            }
        }
    }