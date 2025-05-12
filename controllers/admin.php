<?php

    class Admin extends Controller {
        protected function index() {
            $viewmodel = new AdminModel();
            $this->returnView($viewmodel->index(), true);
        }

        protected function registerDoctor() {
            $viewmodel = new AdminModel();
            $this->returnView($viewmodel->registerDoctor(), true);
        }

    }
