<?php
    require_once './app/views/auth.view.php';
    require_once './app/models/auth.model.php';

    class authController {

        private $view;
        private $model;
        
        public function __construct() {

            $this->model = new authModel();
            $this->view = new authView();

        }

        public function showFormLogin() {

            $this->view->showFormLogin();

        }

        public function validateUser() {
            
            //RECOGE LOS DATOS DE LA URL
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUserByEmail($email); //TRAE EL USUARIO DE LA BASE DE DATOS QUE TENGA ESE EMAIL

            if ($user && password_verify($password, $user->password)) { //VERIFICA QUE EXISTA Y QUE LOS DATOS SEAN CORRECTOS

                // INICIA SESIÓN
                session_start();
                $_SESSION['USER_NAME'] = $user->userName;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['IS_LOGGED'] = true;

                //MANDA PARA EL HOME
                header("Location: " . BASE_URL);
            }
            else {

                //SI LOS DATOS SON INCORRECTOS, MUESTRO EL ERROR EN LA PÁGINA DEL FORMULARIO
                $this->view->showFormLogin("ERROR: Wrong user or password");

            } 
        }

        public function logout() {

            session_start();
            session_destroy();
            header("Location: " . BASE_URL);
            
        }

    }
