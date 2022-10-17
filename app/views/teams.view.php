<?php

    require_once './libs/smarty/libs/Smarty.class.php';

    class teamsView {

        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty(); //INICIALIZO SMARTY
        }

        function showAllTeams($allTeams, $error = null) { //MOSTRAR TODAS LAS ESCUDERÍAS

            $this->smarty->assign('allTeams', $allTeams);
            $this->smarty->assign('error', $error);
            $this->smarty->display('teamsList.tpl');
            
        }

        function showSelectedTeam($teamData, $driversData) { //MOSTRAR LA ESCUDERÍA SOLICITADA

            $this->smarty->assign('teamData', $teamData);
            $this->smarty->assign('driversData', $driversData);
            $this->smarty->display('teamData.tpl');

        }

        function showEditTeam($teamData, $driversData) { //MOSTRAR FORMULARIO DE EDICIÓN DE ESCUDERÍA

            $this->smarty->assign('teamData', $teamData);
            $this->smarty->assign('driversData', $driversData);
            $this->smarty->display('editTeam.tpl');

        }

        function showAddTeam() { //MOSTRAR FORMULARIO PARA AGREGAR NUEVA ESCUDERÍA
            
            $this->smarty->display('addTeam.tpl');

        }

    }