<?php

    class AdminModel extends Model {
        public function index() {
            // Autorización
            if (!isset($_SESSION['is_logged_in']) || ($_SESSION['user_type'] != 'admin')) {
                header('Location: ' . ROOT_URL );
                exit();
            }

            $this->query("SELECT COUNT(*) AS num FROM medico");
            $numMedicos = $this->single()["num"];

            $this->query("SELECT COUNT(*) AS num FROM paciente");
            $numPacientes = $this->single()["num"];

            $this->query("SELECT COUNT(*) AS num FROM cita");
            $numCitas = $this->single()["num"];

            $this->query("SELECT COUNT(*) AS num FROM solicitud");
            $numFormularios = $this->single()["num"];

            return [
                "medicos" => $numMedicos,
                "pacientes" => $numPacientes,
                "citas" => $numCitas,
                "formularios" => $numFormularios
            ];
        }

        public function registerDoctor() {
            // Autorización
            if (!isset($_SESSION['is_logged_in']) || ($_SESSION['user_type'] != 'admin')) {
                header('Location: ' . ROOT_URL );
                exit();
            }

            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($post['submit'])) {
                if ($post['name'] == '' || $post['dni'] == '' || $post['email'] == '' || $post['phone'] == '' || $post['specialty'] == '' || $post['office'] == '' || $post['username'] == '' || $post['password'] == '') {
                    $_SESSION['error_register_doctor_missing'] = True;
                } else {
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
                        $_SESSION['error_register_doctor_username'] = True;
                    } else {
                        $password = md5($post['password']);

                        // Insert into MySQL
                        $this->query('INSERT INTO medico (dni, nombre, usuario, contrasena, correo, 
                      telefono, especialidad, consulta) VALUES (:dni, :name, :user, :password, :email, :phone, :specialty, :office)');
                        $this->bind(':dni', $post['dni']);
                        $this->bind(':name', $post['name']);
                        $this->bind(':user', $post['username']);
                        $this->bind(':password', $password);
                        $this->bind(':email', $post['email']);
                        $this->bind(':phone', $post['phone']);
                        $this->bind(':specialty', $post['specialty']);
                        $this->bind(':office', $post['office']);

                        $this->execute();
                        // Verify
                        if ($this->lastInsertId() !== null) {
                            // Redirect
                            header('Location: ' . ROOT_URL . 'admin/');
                        }
                    }
                }
            }

            return;
        }

    }
