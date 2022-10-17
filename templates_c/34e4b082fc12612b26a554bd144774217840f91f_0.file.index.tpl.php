<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:56:31
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9a2faf09b6_17463674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34e4b082fc12612b26a554bd144774217840f91f' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\index.tpl',
      1 => 1665964588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c9a2faf09b6_17463674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container home">

    <div>
        <div class="home-container">
            <h1>Welcome to <strong>Formula One Info+</strong></h1>
            <p class="home-p">Here you will find some basic information about Formula One <a href="teams">teams</a> and <a href="drivers">drivers</a></p>

            <div class="img-container">
                <img src="./images/silhouette.png" alt="F1 CAR" draggable="false" class="team-image">
            </div>
        <div>

        <?php if (($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>

    </div> 

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
