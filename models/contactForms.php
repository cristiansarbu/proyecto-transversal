<?php

    class ContactFormsModel extends Model {
        public function Index() {
            // Autorización
            if (!isset($_SESSION['is_logged_in']) || ($_SESSION['user_type'] != 'medico')) {
                header('Location: ' . ROOT_URL );
                exit();
            }

            // Sanitize the GET array
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            // Paginación con query parameters (similar a paginación con MVC en Express.js)
            // /contactForms?page=1
            if (!isset($get['page'])) {
                $page = 0;
                $_GET['page'] = 0;
            } else {
                $page = $get['page'];
            }

            // Sacar número máximo de páginas posibles para luego limitar la paginación
            $this->query('SELECT COUNT(*) FROM solicitud WHERE id_medico = :id');
            $this->bind(':id', $_SESSION['USER_DATA']['id']);
            $elementos = $this->single()['COUNT(*)'];

            // dividir entre 3 (número de elementos por página) y redondear hacia arriba
            $paginas = ceil($elementos / 3);

            $this->query("SELECT nombre, correo, telefono, id_solicitud, fecha 
                                FROM solicitud s
                                JOIN paciente p ON s.id_paciente = p.id_usuario
                                WHERE id_medico = :id
                                LIMIT 3 OFFSET :off");
            $this->bind(':off', $page  * 3);
            $this->bind(':id', $_SESSION['USER_DATA']['id']);
            // Siempre habrá 3 elementos en cada página -> offset siempre es página * 3
            $formularios = $this->resultSet();

            return [$formularios, $paginas];
        }

        public function details() {
            // Autorización
            if (!isset($_SESSION['is_logged_in']) || ($_SESSION['user_type'] != 'medico')) {
                header('Location: ' . ROOT_URL );
                exit();
            }

            // Sanitize the GET array
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            print_r($get);

            $this->query("SELECT s.descripcion, s.fecha, p.nombre, p.dni, p.correo, p.telefono, p.fecha_nac
                                FROM solicitud s
                                JOIN paciente p ON s.id_paciente = p.id_usuario");

            return $this->resultSet();
        }

        public function create() {
            // Autorización
            if (!isset($_SESSION['is_logged_in']) || ($_SESSION['user_type'] != 'paciente')) {
                header('Location: ' . ROOT_URL );
                exit();
            }

            // Sanitize the GET array
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            // Sanitize the POST array
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $this->query("SELECT nombre, consulta, correo, telefono
                                FROM medico
                                WHERE id_usuario = :id_medico");
            $this->bind(':id_medico', $get['id']);

            if (isset($post['submit'])) {
                if ($post['fecha'] == "" || $post['motivo-formulario'] == "") {
                    $_SESSION['error_contactForms_create'] = True;
                } else {
                    // Sanitize the POST array
                    $post2 = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                    try {
                        $this->query("INSERT INTO solicitud
                                        (id_paciente, id_medico, descripcion, fecha)
                                        VALUES (:id_paciente, :id_medico, :desc, :fecha)");
                        $this->bind(':id_paciente', $_SESSION['USER_DATA']['id']);
                        $this->bind(':id_medico', $get['id']);
                        $this->bind(':desc', $post2['motivo-formulario']);
                        $this->bind(':fecha', $post2['fecha']);
                        $this->execute();
                    } catch(Exception $exception) {
                        $_SESSION['error_contactForms_create2'] = True;
                        return '';
                    }

                    header('Location: ' . ROOT_URL . 'contactForms/success');
                    return '';
                }
            }

            return $this->resultSet();
        }

        public function success() {
            // Autorización
            if (!isset($_SESSION['is_logged_in']) || ($_SESSION['user_type'] != 'paciente')) {
                header('Location: ' . ROOT_URL );
                exit();
            }
        }
    }
