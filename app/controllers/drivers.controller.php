<?php

    //SE INCLUYEN LOS MODELOS Y VISTAS
    require_once './app/models/drivers.model.php';
    require_once './app/models/teams.model.php';
    require_once './app/views/drivers.view.php';
    require_once './app/helpers/auth.helper.php';
    require_once './app/helpers/empty.helper.php';

    session_start();

    class driversController {

        private $driversModel;
        private $driversView;
        private $teamsModel;
        private $authHelper;
        private $emptyHelper;

        public function __construct() {

            $this->driversModel = new driversModel;
            $this->driversView = new driversView;
            $this->teamsModel = new teamsModel;
            $this->authHelper = new authHelper();
            $this->emptyHelper = new emptyHelper();

        }

        function selectedDriver($driverID) {

            $driverData = $this->driversModel->getSelectedDriver($driverID); //PIDE DATOS DEL PILOTO SELECCIONADO AL MODEL
            $this->emptyHelper->checkEmpty($driverData); //VERIFICA QUE LO QUE TRAJO DE LA DB NO ESTÉ VACÍO
            $teamID = $driverData->teamID;
            $team = $this->teamsModel->getSelectedTeam($teamID);
            $this->driversView->showSelectedDriver($driverData, $team); //MANDA ESOS DATOS AL VIEW

        }

        function allDrivers($error = null) {
            
            $allDrivers = $this->driversModel->getAllDrivers(); //PIDE TODOS LOS PILOTOS AL MODEL
            $this->driversView->showAllDrivers($allDrivers, $error); //MANDA LOS PILOTOS AL VIEW

        }

        function editDriver($driverID) {

            $driverData = $this->driversModel->getSelectedDriver($driverID); //PIDE DATOS DEL PILOTO SELECCIONADO AL MODEL
            $this->emptyHelper->checkEmpty($driverData); //VERIFICA QUE LO QUE TRAJO DE LA DB NO ESTÉ VACÍO
            $allTeams = $this->teamsModel->getAllTeams();
            $this->driversView->showEditDriver($driverData, $allTeams); //MANDA ESOS DATOS AL VIEW

        }

        function deleteDriver($driverID) {

            $this->driversModel->deleteDriverByID($driverID);
            header('Location: ' . BASE_URL . 'drivers');       

        }

        function updateDriver() {

            $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (LA ID NO SE CAMBIA)
            $name = $_POST['driverName'];
            $team = $_POST['team'];
            $nationality = $_POST['nationality'];
            $age = $_POST['age'];
            $victories = $_POST['victories'];
            $podiums = $_POST['podiums'];
            $image = $_FILES['image']['tmp_name'];

            //COMPRUEBA QUE LA IMAGEN TENGA LOS FORMATOS ADMITIDOS (JPG, JPEG, PNG)
            if($_FILES['image']['type'] != "image/jpg" && $_FILES['image']['type'] != "image/jpeg" && $_FILES['image']['type'] != "image/png"){

                //SI LA IMAGEN NO TIENE ESOS FORMATOS, SE VUELVE NULL
                $image = null;

            }

            $this->driversModel->updateDriver($id, $name, $team, $nationality, $age, $victories, $podiums, $image);

            header('Location: ' . BASE_URL . 'drivers/' . $id);

        }

        function addDriver() {

            $allTeams = $this->teamsModel->getAllTeams();
            $this->driversView->showAddDriver($allTeams);         

        }

        function addDriverToDB() {

            $name = $_POST['driverName'];
            $team = $_POST['team'];
            $nationality = $_POST['nationality'];
            $age = $_POST['age'];
            $victories = $_POST['victories'];
            $podiums = $_POST['podiums'];
            $image = $_FILES['image']['tmp_name'];

             //COMPRUEBA QUE LA IMAGEN TENGA LOS FORMATOS ADMITIDOS (JPG, JPEG, PNG)
            if($_FILES['image']['type'] != "image/jpg" && $_FILES['image']['type'] != "image/jpeg" && $_FILES['image']['type'] != "image/png"){

                //SI NO TIENE NINGUNO DE ESOS FORMATOS, $IMAGE SE MANDA NULL
                $image = null;

            }

            $this->driversModel->addDriverToDB($name, $team, $nationality, $age, $victories, $podiums, $image);

            header('Location: ' . BASE_URL . 'drivers');

        }

    }