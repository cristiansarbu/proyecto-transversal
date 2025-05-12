<?php

    class AdminModel extends Model {
        public function index() {
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
            return;
        }

    }
