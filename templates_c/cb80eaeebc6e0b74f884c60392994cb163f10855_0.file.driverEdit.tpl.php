<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:55:11
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\driverEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63487b2fe8b9d0_91134957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb80eaeebc6e0b74f884c60392994cb163f10855' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\driverEdit.tpl',
      1 => 1665690780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63487b2fe8b9d0_91134957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="form-container">

    <form class="form-edit">

        <h2>DRIVER EDIT: (<?php echo $_smarty_tpl->tpl_vars['driverData']->value->id;?>
) | <?php echo $_smarty_tpl->tpl_vars['driverData']->value->driverName;?>
</h2>

        <div class="form-group">
            <label for="driverName">Name</label>
            <input type="text" name="driverName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->driverName;?>
">
        </div>

        <div class="form-group">
            <select name="actualTeam">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTeams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value->teamName;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->nationality;?>
">
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->age;?>
">
        </div>

        <div class="form-group">
            <label for="victories">Victories</label>
            <input type="text" name="victories" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->victories;?>
">
        </div>

        <div class="form-group">
            <label for="podiums">Podiums</label>
            <input type="text" name="podiums" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->podiums;?>
">
        </div>

        <input type="submit" class="btn btn-danger" value="UPDATE">
        <a href="./teams" class="btn btn-danger">CANCEL</a>
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
