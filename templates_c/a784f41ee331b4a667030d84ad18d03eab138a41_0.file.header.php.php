<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:17:20
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\header.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63484820bdda16_37543528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a784f41ee331b4a667030d84ad18d03eab138a41' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\header.php',
      1 => 1665681355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63484820bdda16_37543528 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a class="navbar-brand" href="home">F1 Teams</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="teams">Teams</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="drivers">Drivers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main><?php }
}
