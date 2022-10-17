<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:11:59
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\addDriver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c81af67cec2_27429975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54fe047bd22c57e21acf88372301851685d23e3' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\addDriver.tpl',
      1 => 1665958309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c81af67cec2_27429975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <form class="form-edit" action="adddriverdatabase" method="POST" enctype="multipart/form-data">

        <h2>ADD NEW DRIVER</h2>

        <div class="form-group">
            <label for="driverName">Name</label>
            <input type="text" name="driverName" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="team">Team</label> <br>
            <select name="team" required>
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
            <a href="addteam">[add new team]</a>
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
        
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>  

        <input type="submit" class="btn btn-danger" value="ADD">
        <a href="drivers" class="btn btn-danger">CANCEL</a>
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
