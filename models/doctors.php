<?php


    class DoctorModel extends Model {
        public function Index() {
            // Sanitize the GET array
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            // Paginación con query parameters (similar a paginación con MVC en Express.js)
            // /doctors?page=1
            if (!isset($get['page'])) {
                $page = 0;
                $_GET['page'] = 0;
            } else {
                $page = $get['page'];
            }

            // Sacar número máximo de páginas posibles para luego limitar la paginación
            $this->query('SELECT COUNT(*) FROM medico');
            $elementos = $this->single()['COUNT(*)'];

            // dividir entre 3 (número de elementos por página) y redondear hacia arriba
            $paginas = ceil($elementos / 3);

            $this->query("SELECT id_usuario, dni, nombre, correo, telefono, especialidad, consulta 
                                FROM medico
                                LIMIT 3 OFFSET :off");
            $this->bind(':off', $page * 3);
            // Siempre habrá 3 elementos en cada página -> offset siempre es página * 3
            $medicos = $this->resultSet();

            $horario = ["09:00", "09:30", "10:00", "10:30", "11:00", "11:30", "12:00", "12:30",
                "13:00", "13:30", "14:00", "14:30", "15:00"];
            $horas_ocupadas = [];

            $this->query("SELECT DATE_FORMAT(fecha, '%H:%i') AS hora
                                    FROM cita WHERE DATE_FORMAT(fecha, '%Y-%m-%d') = :fecha
                                    AND id_medico = :id_medico");
            $this->bind(':fecha', $post['fecha'] );
            $this->bind(':id_medico', $get['id'] );
            $resultado = $this->resultSet();

            foreach ($resultado as $fila) {
                array_push($horas_ocupadas, $fila['hora']);
            }

            return [$medicos, $paginas];
            //  echo ($_GET['page'] == 0 ? "" : (ROOT_URL . 'doctors?page=' . ($_GET['page'] - 1)))
        }
    }
