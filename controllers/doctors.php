<?php


    class Doctors extends Controller {
        protected function index() {
            $viewmodel = new DoctorModel();
            $this->ReturnView($viewmodel->Index(), true);
        }
    }