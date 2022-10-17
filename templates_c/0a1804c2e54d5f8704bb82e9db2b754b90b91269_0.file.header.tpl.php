<?php
/* Smarty version 4.2.1, created on 2022-10-14 02:55:13
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348b37117c4a5_37495322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1804c2e54d5f8704bb82e9db2b754b90b91269' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\header.tpl',
      1 => 1665708905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348b37117c4a5_37495322 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- URL BASE -->
        <base href='<?php echo BASE_URL;?>
'>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="icon" href="./images/icon.png">

        <title>Formula One Teams</title>
        
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="teams">F1 Teams</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="teams">Teams</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="drivers">Drivers</a>
                            </li>

                            <?php echo session_start();?>

                            <?php if (!(isset($_SESSION['USER_NAME']))) {?> 
                                <li class="nav-item">
                                    <a class="nav-link" href="login">Login</a>
                                </li>

                            <?php } else { ?> 
                                <li class="nav-item">
                                    <a class="nav-link" href="logout">Logout [<?php echo $_SESSION['USER_NAME'];?>
]</a>
                                </li>

                            <?php }?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main><?php }
}
