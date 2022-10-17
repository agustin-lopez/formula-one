<?php

    //SE INCLUYEN LOS MODELOS Y VISTAS
    require_once './app/models/drivers.model.php';
    require_once './app/models/teams.model.php';
    require_once './app/views/teams.view.php';
    require_once './app/helpers/auth.helper.php';
    require_once './app/helpers/empty.helper.php';

    //LOS IFS QUE COMPRUEBAN SI HAY UNA SESIÓN INICIADA NO ANDAN X.X


    class teamsController {

        private $driversModel;
        private $teamsModel;
        private $teamsView;
        private $authHelper;
        private $emptyHelper;

        public function __construct() {

            $this->driversModel = new driversModel;
            $this->teamsModel = new teamsModel;
            $this->teamsView = new teamsView;
            $this->authHelper = new authHelper();
            $this->emptyHelper = new emptyHelper();

        }

        function selectedTeam($teamID) {
            
            $teamData = $this->teamsModel->getSelectedTeam($teamID); //PIDE AL MODEL LOS DATOS DE LA ESCUDERÍA SELECCIONADA
            $this->emptyHelper->checkEmpty($teamData); //VERIFICA QUE LO QUE TRAJO DE LA DB NO ESTÉ VACÍO
            $team = $teamData->id;
            $driversData = $this->driversModel->getTeamDrivers($team); //PIDE AL MODEL LOS PILOTOS DE LA ESCUDERÍA SELECCIONADA
            $this->teamsView->showSelectedTeam($teamData, $driversData); //MANDA LOS DATOS AL VIEW

        }

        function allTeams($error = null) {
            
            $allTeams = $this->teamsModel->getAllTeams(); //PIDE TODAS LAS ESCUDERÍAS AL TEAMS MODEL
            $this->teamsView->showAllTeams($allTeams, $error); //MANDA LOS DATOS AL TEAMS VIEW

        }

        function editTeam($teamID) {

            $teamData = $this->teamsModel->getSelectedTeam($teamID); //PIDE AL MODEL LOS DATOS DE LA ESCUDERÍA SELECCIONADA
            $this->emptyHelper->checkEmpty($teamData); //VERIFICA QUE LO QUE TRAJO DE LA DB NO ESTÉ VACÍO
            $driversData = $this->driversModel->getTeamDrivers($teamID); //PIDE AL MODEL LOS DATOS DE LOS PILOTOS DE LA ESCUDERÍA SELECCIONADA
            $this->teamsView->showEditTeam($teamData, $driversData); //MANDA LOS DATOS AL VIEW
    
        }

        function deleteTeam($teamID) {

            $driversData = $this->driversModel->getTeamDrivers($teamID); //BUSCA SI LA ESCUDERÍA TIENE PILOTOS
            
            if ($driversData) { //SI TIENE, TE MUESTRA UN ERROR

                $this->allTeams("ERROR: You can't delete a team with drivers in it! ¬.¬");

            }
            else { //SI NO TIENE, LO BORRA DE UNA

                $this->teamsModel->deleteTeamByID($teamID);
                header('Location: ' . BASE_URL . 'teams');

            }

        }

        function updateTeam() {

            $id = $_POST['id']; //AGARRA LA ID PARA PODER ACTUALIZAR LOS DEMÁS DATOS A LA DB (NO SE CAMBIA)
            $name = $_POST['teamName'];
            $nationality = $_POST['teamNationality'];
            $totalVictories = $_POST['totalVictories'];
            $totalPodiums = $_POST['totalPodiums'];
            $image = $_FILES['image']['tmp_name'];

            //COMPRUEBA QUE LA IMAGEN TENGA LOS FORMATOS ADMITIDOS (JPG, JPEG, PNG)
            if($_FILES['image']['type'] != "image/jpg" && $_FILES['image']['type'] != "image/jpeg" && $_FILES['image']['type'] != "image/png"){

                //SI LA IMAGEN NO TIENE ESOS FORMATOS, SE VUELVE NULL
                $image = null;

            }

            $this->teamsModel->updateTeam($id, $name, $nationality, $totalVictories, $totalPodiums, $image);

            header('Location: ' . BASE_URL . 'teams/' . $id);

        }

        function addTeam() {

            $this->teamsView->showAddTeam(); //DIRECTO AL FORMULARIO

        }

        function addTeamToDB() {

            $name = $_POST['teamName'];
            $nationality = $_POST['nationality'];
            $totalVictories = $_POST['totalVictories'];
            $totalPodiums = $_POST['totalPodiums'];
            $image = $_FILES['image']['tmp_name'];

             //COMPRUEBA QUE LA IMAGEN TENGA LOS FORMATOS ADMITIDOS (JPG, JPEG, PNG)
            if($_FILES['image']['type'] != "image/jpg" && $_FILES['image']['type'] != "image/jpeg" && $_FILES['image']['type'] != "image/png"){

                //SI NO TIENE NINGUNO DE ESOS FORMATOS, $IMAGE SE MANDA NULL
                $image = null;

            }

            $this->teamsModel->addTeamToDB($name, $nationality, $totalVictories, $totalPodiums, $image);

            header('Location: ' . BASE_URL . 'teams');

        }

    }