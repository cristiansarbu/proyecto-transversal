<?php

    class ContactFormsModel extends Model {
        public function Index() {
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
            // Sanitize the GET array
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            print_r($get);

            $this->query("SELECT s.descripcion, s.fecha, p.nombre, p.dni, p.correo, p.telefono, p.fecha_nac
                                FROM solicitud s
                                JOIN paciente p ON s.id_paciente = p.id_usuario");

            return $this->resultSet();
        }

        public function create() {

        }

        public function success() {

        }
    }
