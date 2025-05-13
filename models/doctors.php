<?php


    class DoctorModel extends Model {
        public function Index() {
            // Sanitize the GET array
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            // Paginación con query parameters (similar a paginación con MVC en Express.js)
            // /doctors?page=1
            if (!isset($get['page'])) {
                $page = 1;
            } else {
                $page = $get['page'];
            }

            // Sacar número máximo de páginas posibles para luego limitar la paginación
            $this->query('SELECT COUNT(*) FROM medico');
            $elementos = $this->single();

            // dividir entre 3 (número de elementos por página) y redondear hacia arriba
            $paginas = ceil($elementos / 3);


            $this->query("SELECT dni, nombre, correo, telefono, especialidad, consulta 
                                FROM medico
                                LIMIT 3 OFFSET :off");
            $this->bind(':off', $page * 3);
            // Siempre habrá 3 elementos en cada página -> offset siempre es página * 3
            $medicos = $this->resultSet();

            return [$medicos, $paginas];
            //  echo ($_GET['page'] == 0 ? "" : (ROOT_URL . 'doctors?page=' . ($_GET['page'] - 1)))
        }
    }
