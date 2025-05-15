<?php

    class ContactForms extends Controller {
        protected function index() {
            $viewmodel = new ContactFormsModel();
            $this->returnView($viewmodel->index(), true);
        }

        protected function details() {
            $viewmodel = new ContactFormsModel();
            $this->returnView($viewmodel->details(), true);
        }

        protected function create() {
            $viewmodel = new ContactFormsModel();
            $this->returnView($viewmodel->create(), true);
        }

        protected function success() {
            $viewmodel = new ContactFormsModel();
            $this->returnView($viewmodel->success(), true);
        }

    }

