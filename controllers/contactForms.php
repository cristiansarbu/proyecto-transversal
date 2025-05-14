<?php

    class ContactForms extends Controller {
        protected function index() {
            $viewmodel = new ContactFormsModel();
            $this->returnView($viewmodel->index(), true);
        }

    }

