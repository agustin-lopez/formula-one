<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:19:23
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\editDriver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c917b122f19_32739392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '799d565c59f2df12ddc02544c09e7dda5a13ee5a' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\editDriver.tpl',
      1 => 1665962325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c917b122f19_32739392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <form class="form-edit" action="updatedriver" method="POST" enctype="multipart/form-data">

        <h2>DRIVER EDIT: (<?php echo $_smarty_tpl->tpl_vars['driverData']->value->id;?>
) | <?php echo $_smarty_tpl->tpl_vars['driverData']->value->driverName;?>
</h2>

        <div class="form-group hidden">
            <input type="number" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->id;?>
">
        </div>

        <div class="form-group">
            <label for="driverName">Name</label>
            <input type="text" name="driverName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->driverName;?>
">
        </div>

        <div class="form-group">
            <label for="team">Team</label> <br>
            <select name="team">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTeams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['driverData']->value->teamID == $_smarty_tpl->tpl_vars['team']->value->id) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
" selected><?php echo $_smarty_tpl->tpl_vars['team']->value->teamName;?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value->teamName;?>
</option>
                    <?php }?>
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

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            <?php if (($_smarty_tpl->tpl_vars['driverData']->value->image)) {?>
                <div class="image-container">
                    <div>
                        <p>IMAGE URL: <?php echo $_smarty_tpl->tpl_vars['driverData']->value->image;?>
</p>
                    </div>
                    <br>
                    <div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->image;?>
" alt="DRIVER IMAGE" class="image-preview" draggable="false">
                    </div>
                </div>
            <?php } else { ?>
                <p>NO IMAGE</p>
            <?php }?>
        </div>

        <input type="submit" class="btn btn-danger" value="UPDATE">
        <a href="drivers" class="btn btn-danger">CANCEL</a>
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
