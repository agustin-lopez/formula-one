<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:43:37
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\teamsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d8093ab075_16433007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac03e1bc5f4bc49f4dad5ad7ae9b99e75cdefe50' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\teamsList.tpl',
      1 => 1665783795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349d8093ab075_16433007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
        <div class="add">
            <a href="addteam" class="btn btn-danger">Add new team</a>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?> 

    <div class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTeams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
            <div class="list-group-item list-group-item-action">
                <a href= "teams/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
 | <?php echo $_smarty_tpl->tpl_vars['team']->value->teamName;?>
 </a>

                <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                <div>
                    <a href= "editteam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
">EDIT</a> |
                    <a href= "deleteteam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
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
