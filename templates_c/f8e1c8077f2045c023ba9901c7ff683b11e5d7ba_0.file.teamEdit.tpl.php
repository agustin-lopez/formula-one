<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:33:57
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\teamEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63487635c38696_67408845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8e1c8077f2045c023ba9901c7ff683b11e5d7ba' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\teamEdit.tpl',
      1 => 1665693236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63487635c38696_67408845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (($_smarty_tpl->tpl_vars['teamData']->value)) {?>
    <div class="form-container">

        <form class="form-edit">

            <h2>TEAM EDIT: (<?php echo $_smarty_tpl->tpl_vars['teamData']->value->id;?>
) | <?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamName;?>
</h2>

            <p>Driver 1: <?php echo $_smarty_tpl->tpl_vars['driverNames']->value[0]->driverName;?>
</p>
            <p>Driver 2: <?php echo $_smarty_tpl->tpl_vars['driverNames']->value[1]->driverName;?>
</p>

            <div class="form-group">
                <label for="teamName">Name</label>
                <input type="text" name="teamName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamName;?>
">
            </div>

            <div class="form-group">
                <label for="teamNationality">Nationality</label>
                <input type="text" name="teamNationality" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamNationality;?>
">
            </div>

            <div class="form-group">
                <label for="totalVictories">Total victories</label>
                <input type="text" name="totalVictories" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['teamData']->value->totalVictories;?>
">
            </div>

            <div class="form-group">
                <label for="totalPodiums">Total podiums</label>
                <input type="text" name="totalPodiums" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['teamData']->value->totalPodiums;?>
">
            </div>

            <input type="submit" class="btn btn-danger" value="UPDATE">
            <a href="./teams" class="btn btn-danger">CANCEL</a>
        </form>
        
    </div>
<?php } else { ?>
    <h1>no bitches</h1>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
