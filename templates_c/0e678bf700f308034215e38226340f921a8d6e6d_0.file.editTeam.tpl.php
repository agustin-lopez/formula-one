<?php
/* Smarty version 4.2.1, created on 2022-10-14 03:02:18
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\editTeam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348b51a1aa843_54330517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e678bf700f308034215e38226340f921a8d6e6d' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\editTeam.tpl',
      1 => 1665709169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348b51a1aa843_54330517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form-container">

    <form class="form-edit" action="updateteam" method="POST">

        <h2>TEAM EDIT: (<?php echo $_smarty_tpl->tpl_vars['teamData']->value->id;?>
) | <?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamName;?>
</h2>

        <p>Driver 1: <?php echo $_smarty_tpl->tpl_vars['driverNames']->value[0]->driverName;?>
</p>
        <p>Driver 2: <?php echo $_smarty_tpl->tpl_vars['driverNames']->value[1]->driverName;?>
</p>

        <div class="form-group hidden">
            <label for="id">ID</label>
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

        <input type="submit" class="btn btn-danger" value="UPDATE">
        <a href="./teams" class="btn btn-danger">CANCEL</a>
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
