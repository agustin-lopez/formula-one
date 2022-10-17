<?php
/* Smarty version 4.2.1, created on 2022-10-14 02:08:23
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\addDriver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348a877f3aa95_32212283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ba338ea8439e6e0eb7c5d579189c00a6271b8e' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\addDriver.tpl',
      1 => 1665705731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348a877f3aa95_32212283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form-container">

    <form class="form-edit" action="adddriverdatabase" method="POST">

        <h2>ADD NEW DRIVER</h2>

        <div class="form-group">
            <label for="driverName">Name</label>
            <input type="text" name="driverName" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="team">Team</label>
            <select name="team">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTeams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
 | <?php echo $_smarty_tpl->tpl_vars['team']->value->teamName;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="victories">Victories</label>
            <input type="number" name="victories" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="podiums">Podiums</label>
            <input type="number" name="podiums" class="form-control" required>
        </div>        

        <input type="submit" class="btn btn-danger" value="ADD">
        <a href="./teams" class="btn btn-danger">CANCEL</a>
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
