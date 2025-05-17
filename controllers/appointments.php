<?php

    class Appointments extends Controller {
        protected function index() {
            $viewmodel = new AppointmentsModel();
            $this->ReturnView($viewmodel->Index(), true);
        }

        protected function patientAppointments() {
            $viewmodel = new AppointmentsModel();
            $this->ReturnView($viewmodel->patientAppointments(), true);
        }

        protected function editAppointment() {
            $viewmodel = new AppointmentsModel();
            $this->ReturnView($viewmodel->editAppointment(), true);
        }

        protected function createAppointment() {
            $viewmodel = new AppointmentsModel();
            $this->ReturnView($viewmodel->createAppointment(), true);
        }

        protected function requestAppointment() {
            $viewmodel = new AppointmentsModel();
            $this->ReturnView($viewmodel->requestAppointment(), true);
        }
    }