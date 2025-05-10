<?php

    class UserModel extends Model {
        public function register() {
            // Funcionalidad de formulario multi-página (primera página -> información personal, segunda página -> credenciales)
            // Default inicial a paso 1
            if (!isset($_SESSION['register_form_step'])) {
                $_SESSION['register_form_step'] = 1;
            }

            if (isset($_POST['submit2'])) {
                echo "forms finished mate";
                unset($_SESSION['register_form_step']);
            } else {
                if (isset($_POST['submit1'])) {
                    $_SESSION['register_form_step'] = 2;
                }
            }

//            // Sanitize POST
//            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//
//            if (isset($post['password'])) {
//                $password = md5($post['password']);
//            }
//
//            if (isset($post['submit'])) {
//                // Comprobar si todos los campos han sido rellenados
//                if ($post['name'] == '' || $post['dni'] == '' || $post['email'] == '' || $post['phone'] == '' || $post['date'] == '') {
//                    Messages::setMsg('Please fill in all fields.', 'error');
//                    return;
//                }
//
//
//
//
//
////                // Insert into MySQL
////                $this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
////                $this->bind(':name', $post['name']);
////                $this->bind(':email', $post['email']);
////                $this->bind(':password', $password);
////                $this->execute();
//                // Verify
//                if ($this->lastInsertId() !== null) {
//                    // Redirect
////                    header('Location: ' . ROOT_URL . 'users/login');
//                }
//            }
            return;
        }

        public function login() {
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
                        $_SESSION['is_logged_in'] = true;
                        header('Location: ' . ROOT_URL . 'admin');

                    } elseif ($row['tipo'] == 'paciente') {
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
                        header('Location: ' . ROOT_URL . 'appointments/patient-appointments');

                    } elseif ($row['tipo'] == 'medico') {
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
    }