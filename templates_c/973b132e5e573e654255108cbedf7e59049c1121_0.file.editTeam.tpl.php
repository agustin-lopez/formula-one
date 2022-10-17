<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:19:37
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\editTeam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9189635575_18334756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '973b132e5e573e654255108cbedf7e59049c1121' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\editTeam.tpl',
      1 => 1665962336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c9189635575_18334756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <form class="form-edit" action="updateteam" method="POST" enctype="multipart/form-data">

        <h2>TEAM EDIT: (<?php echo $_smarty_tpl->tpl_vars['teamData']->value->id;?>
) | <?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamName;?>
</h2>

                <div class="form-group">
            <?php if ((isset($_smarty_tpl->tpl_vars['driversData']->value[0]))) {?>
                <p>Driver 1: <?php echo $_smarty_tpl->tpl_vars['driversData']->value[0]->driverName;?>
</p> <a href="editdriver/<?php echo $_smarty_tpl->tpl_vars['driversData']->value[0]->id;?>
">[edit]<a>
            <?php } else { ?>
                <p>Driver 1: EMPTY SLOT</p>
            <?php }?>
        </div>
        
        <div class="form-group">
            <?php if ((isset($_smarty_tpl->tpl_vars['driversData']->value[1]))) {?>
                <p>Driver 1: <?php echo $_smarty_tpl->tpl_vars['driversData']->value[1]->driverName;?>
</p> <a href="editdriver/<?php echo $_smarty_tpl->tpl_vars['driversData']->value[1]->id;?>
">[edit]<a>
            <?php } else { ?>
                <p>Driver 1: EMPTY SLOT</p>
            <?php }?>
        </div>

        <div class="form-group hidden">
            <input type="number" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['teamData']->value->id;?>
">
        </div>

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

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            <?php if (($_smarty_tpl->tpl_vars['teamData']->value->image)) {?>
                <div class="image-container">
                    <div>
                        <p>IMAGE URL: <?php echo $_smarty_tpl->tpl_vars['teamData']->value->image;?>
</p>
                    </div>
                    <br>
                    <div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['teamData']->value->image;?>
" alt="TEAM IMAGE" class="image-preview" draggable="false">
                    </div>
                </div>
            <?php } else { ?>
                <p>NO IMAGE</p>
            <?php }?>
        </div>

        <input type="submit" class="btn btn-danger" value="UPDATE">
        <a href="teams" class="btn btn-danger">CANCEL</a>

    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
