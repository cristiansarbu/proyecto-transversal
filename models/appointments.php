<?php

    class AppointmentsModel extends Model {
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
            $this->query('SELECT COUNT(*) FROM cita WHERE id_medico = :id');
            $this->bind(':id', $_SESSION['USER_DATA']['id']);
            $elementos = $this->single()['COUNT(*)'];

            // dividir entre 3 (número de elementos por página) y redondear hacia arriba
            $paginas = ceil($elementos / 3);

            $this->query("SELECT c.id_paciente, c.id_medico, c.fecha, c.motivo, p.nombre, p.correo, p.telefono, m.consulta 
                                FROM cita c
                                JOIN paciente p ON c.id_paciente = p.id_usuario
                                JOIN medico m ON c.id_medico = m.id_usuario
                                WHERE c.id_medico = :id
                                LIMIT 3 OFFSET :off");
            $this->bind(':off', $page  * 3);
            $this->bind(':id', $_SESSION['USER_DATA']['id']);
            // Siempre habrá 3 elementos en cada página -> offset siempre es página * 3
            $citas = $this->resultSet();

            if (isset($_POST['submit'])) {
                $this->query("DELETE FROM cita
                                    WHERE id_medico = :id_medico AND id_paciente = :id_paciente
                                    AND fecha = :fecha");
                $this->bind(':id_medico', $_POST['id_medico']);
                $this->bind(':id_paciente', $_POST['id_paciente']);
                $this->bind(':fecha', $_POST['fecha']);
                $this->execute();
                header('Location: ' . ROOT_URL . 'appointments');
                return '';
            }

            return [$citas, $paginas];
        }

        public function patientAppointments() {
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
            $this->query('SELECT COUNT(*) FROM cita WHERE id_paciente = :id');
            $this->bind(':id', $_SESSION['USER_DATA']['id']);
            $elementos = $this->single()['COUNT(*)'];

            // dividir entre 3 (número de elementos por página) y redondear hacia arriba
            $paginas = ceil($elementos / 3);

            // Query para el paciente
            $this->query("SELECT nombre, dni, correo, telefono, fecha_nac
                                FROM paciente
                                WHERE id_usuario = :id");
            $this->bind(':id', $_SESSION['USER_DATA']['id']);
            $usuario = $this->single();

            $this->query("SELECT c.id_paciente, c.id_medico, c.fecha AS cita_fecha, c.motivo, m.nombre AS medico_nombre, m.correo AS medico_correo, m.especialidad, m.telefono AS medico_telefono, m.consulta AS medico_consulta 
                                FROM cita c
                                JOIN medico m ON c.id_medico = m.id_usuario
                                WHERE c.id_paciente = :id
                                LIMIT 3 OFFSET :off");
            $this->bind(':off', $page  * 3);
            $this->bind(':id', $_SESSION['USER_DATA']['id']);
            // Siempre habrá 3 elementos en cada página -> offset siempre es página * 3
            $citas = $this->resultSet();

            return [$citas, $paginas, $usuario];
        }

        public function editAppointment() {
            // Sanitize the GET array
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

            $this->query("SELECT p.nombre, motivo, c.fecha, estado
                                FROM cita c JOIN paciente p ON c.id_paciente = p.id_usuario
                                WHERE c.fecha = :fecha AND c.id_paciente = :id_pac AND c.id_medico = :id_med");
            $this->bind(':fecha', $get['fec']);
            $this->bind(':id_pac', $get['idpac']);
            $this->bind('id_med', $get['idmed']);
            $resultados = $this->resultSet();

            if (isset($_POST['submit'])) {
                // Sanitize the GET array
                $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $this->query("UPDATE cita
                                    SET motivo = :motivo, fecha = :fecha, estado = :estado
                                    WHERE fecha = :fecha_antigua AND id_medico = :id_med AND id_paciente = :id_pac");
                $this->bind(':motivo', $post['motivo']);
                $this->bind(':fecha', $post['fecha']);
                $this->bind(':estado', $post['estado']);
                $this->bind(':fecha_antigua', $resultados[0]['fecha']);
                $this->bind(':id_med', $get['idmed']);
                $this->bind(':id_pac', $get['idpac']);
                $this->execute();

                header('Location: ' . ROOT_URL . 'appointments');
                return '';
            }

            return [$resultados];
        }

        public function createAppointment() {
            // Sanitize the POST array
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($post['submit'])) {
                $this->query('SELECT id_usuario FROM paciente
                                    WHERE dni = :dni');
                $this->bind(':dni', $post['dni']);
                $id_paciente = $this->single()['id_usuario'];

                $this->query('INSERT INTO cita (fecha, motivo, estado, id_medico, id_paciente)
                                    VALUES (:fecha, :motivo, :estado, :id_medico, :id_paciente)');
                $this->bind(':fecha', $post['fechahora']);
                $this->bind(':motivo', $post['motivo']);
                $this->bind(':estado', $post['estado']);
                $this->bind(':id_medico', $_SESSION['USER_DATA']['id']);
                $this->bind(':id_paciente', $id_paciente);
                $this->execute();

                header('Location: ' . ROOT_URL . 'appointments');
                return '';
            }
            return '';
        }

        public function requestAppointment() {
            // Sanitize the GET array
            $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            // Sanitize the GET array
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $this->query("SELECT nombre, especialidad, consulta, correo, telefono
                                FROM medico WHERE id_usuario = :id_medico");
            $this->bind(':id_medico', $get['id']);
            $medico = $this->single();

            if (isset($post['fecha'])) {
                $horario = ["09:00", "09:30", "10:00", "10:30", "11:00", "11:30", "12:00", "12:30",
                            "13:00", "13:30", "14:00", "14:30", "15:00"];
                // Sacar fechas en formato de hh:mm como en SQLServer para comparar con las horas predeterminadas
                // https://www.dbload.com/articles/format-function-in-mssql-and-mysql.htm
                $this->query("SELECT DATE_FORMAT(fecha, '%H:%i') AS hora
                                    FROM cita WHERE DATE_FORMAT(fecha, '%Y-%m-%d') = :fecha
                                    AND id_medico = :id_medico");
                $this->bind(':fecha', $post['fecha'] );
                $this->bind(':id_medico', $get['id'] );
                $resultado = $this->resultSet();
                $horas_ocupadas = [];

                foreach ($resultado as $fila) {
                    array_push($horas_ocupadas, $fila['hora']);
                }
            }


            return [$medico, $horas_ocupadas, $horario];

        }
    }
