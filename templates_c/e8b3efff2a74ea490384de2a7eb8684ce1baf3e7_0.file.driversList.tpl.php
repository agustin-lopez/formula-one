<?php
/* Smarty version 4.2.1, created on 2022-10-14 00:45:14
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\driversList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634894fa22dab4_61435384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b3efff2a74ea490384de2a7eb8684ce1baf3e7' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\driversList.tpl',
      1 => 1665701112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634894fa22dab4_61435384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="list-container">

    <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
        <div>
            <a href="adddriver" class="btn btn-danger">Add new driver</a>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>

    <div class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allDrivers']->value, 'driver');
$_smarty_tpl->tpl_vars['driver']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['driver']->value) {
$_smarty_tpl->tpl_vars['driver']->do_else = false;
?>
            <div class="list-group-item list-group-item-action">
                <a href= "drivers/<?php echo $_smarty_tpl->tpl_vars['driver']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['driver']->value->id;?>
 | <?php echo $_smarty_tpl->tpl_vars['driver']->value->driverName;?>
 </a>

                <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                    <div>
                        <a href= "editdriver/<?php echo $_smarty_tpl->tpl_vars['driver']->value->id;?>
">EDIT</a> |
                        <a href= "deletedriver/<?php echo $_smarty_tpl->tpl_vars['driver']->value->id;?>
">DELETE</a>
                    </div>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
