<?php

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    //SE INCLUYEN LOS CONTROLADORES
    require_once 'app/controllers/teams.controller.php';
    require_once 'app/controllers/drivers.controller.php';
    require_once 'app/controllers/auth.controller.php';
    require_once 'app/helpers/auth.helper.php';
    require_once 'index.php';

    $action = 'home'; //ACCIÓN POR DEFECTO

    if (!empty($_GET['action'])) { //SI HAY UNA ACCIÓN, LA GUARDA EN LA VARIABLE $ACTION
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    $teamsController = new teamsController;
    $driversController = new driversController;
    $authController = new authController;
    $authHelper = new authHelper; //PARA VERIFICAR SI EL USUARIO ESTÁ LOGUEADO O NO
    $index = new index;


    switch ($params[0]) {

        case 'home':
           $index->showHome(); //FUNCIÓN EN EL INDEX.PHP
        break;

        case 'drivers':
            if (isset($params[1])) { //SI SE INGRESA UNA ID, PIDE ESE PILOTO
                $driverID = $params[1];
                $driversController->selectedDriver($driverID);
            }
            else { //SI NO SE INGRESA NADA, PIDE TODOS LOS PILOTOS
                $driversController->allDrivers();
            }
        break;

        case 'teams':
            if (isset($params[1])) { //SI SE INGRESA UNA ID, PIDE ESA ESCUDERÍA
                $teamID = $params[1];
                $teamsController->selectedTeam($teamID);
            }
            else { //SI NO SE INGRESA NADA, MUESTRA LA LISTA DE TODAS LAS ESCUDERÍAS
                $teamsController->allTeams();
            }
        break;

        case 'login':
            $authController->showFormLogin();
        break;

        case 'logout':
            $authController->logout();
        break;

        case 'validate':
            $authController->validateUser();
        break; 

        case 'editteam':
            $authHelper->checkLogin();
            $teamID = $params[1];
            $teamsController->editTeam($teamID);
        break;

        case 'updateteam':
            $authHelper->checkLogin();
            $teamsController->updateTeam();
        break;

        case 'editdriver':
            $authHelper->checkLogin();
            $driverID = $params[1];
            $driversController->editDriver($driverID);
        break;

        case 'updatedriver':
            $authHelper->checkLogin();
            $driversController->updateDriver();
        break;

        case 'deleteteam':
            $authHelper->checkLogin();
            $teamID = $params[1];
            $teamsController->deleteTeam($teamID);
        break;

        case 'deletedriver':
            $authHelper->checkLogin();            
            $driverID = $params[1];
            $driversController->deleteDriver($driverID);
        break;

        case 'addteam':
            $authHelper->checkLogin();
            $teamsController->addTeam();
        break;

        case 'adddriver':
            $authHelper->checkLogin();
            $driversController->addDriver();
        break;

        case 'addteamdatabase':
            $authHelper->checkLogin();
            $teamsController->addTeamToDB();
        break;

        case 'adddriverdatabase':
            $authHelper->checkLogin();
            $driversController->addDriverToDB();
        break;

        case 'notauthorized':
            $index->showHome("ERROR: Hey, you are not authorized do that! >:/");
        break;

        case 'notfound':
            $index->showHome("ERROR: Not found D:");
        break;

        default:
            $index->showHome("ERROR: Page not found x . x");
        break;
        
    }
