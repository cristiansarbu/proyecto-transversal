<?php

    namespace controllers;

    use classes\Controller;
    use models\UserModel;

    class Users extends Controller {
        protected function register() {
            $viewmodel = new UserModel();
            $this->returnView($viewmodel->register(), true);
        }

        protected function login() {
            $viewmodel = new UserModel();
            $this->returnView($viewmodel->login(), true);
        }

        protected function logout() {
            unset($_SESSION['is_logged_in']);
            unset($_SESSION['USER_DATA']);
            session_destroy();
            // Redirect
            header('Location: ' . ROOT_URL);
        }
    }