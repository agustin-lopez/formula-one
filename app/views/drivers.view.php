<?php

    require_once './libs/smarty/libs/Smarty.class.php';

    class driversView {

        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty(); //INICIALIZO SMARTY
        }

        function showSelectedDriver($driverData, $team) {

            $this->smarty->assign('driverData', $driverData);
            $this->smarty->assign('team', $team);
            $this->smarty->display('driverData.tpl');

        }

        function showAllDrivers($allDrivers, $error = null) {

            $this->smarty->assign('allDrivers', $allDrivers);
            $this->smarty->assign('error', $error);
            $this->smarty->display('driversList.tpl');

        }

        function showEditDriver($driverData, $allTeams) {

            $this->smarty->assign('driverData', $driverData);
            $this->smarty->assign('allTeams', $allTeams);
            $this->smarty->display('editDriver.tpl');

        }

        function showAddDriver($allTeams) {

            $this->smarty->assign('allTeams', $allTeams);
            $this->smarty->display('addDriver.tpl');

        }

    }