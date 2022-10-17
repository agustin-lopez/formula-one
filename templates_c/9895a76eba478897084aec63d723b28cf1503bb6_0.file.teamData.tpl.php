<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:30:00
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\teamData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c93f82d9767_51031702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9895a76eba478897084aec63d723b28cf1503bb6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\teamData.tpl',
      1 => 1665962999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c93f82d9767_51031702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main-data-container container">

    <h1><span><?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamName;?>
</span> information</h1>

    <div class="info-container">

        <div class="info">

            <p><strong>Team ID: </strong> <?php echo $_smarty_tpl->tpl_vars['teamData']->value->id;?>
</p>
            <p><strong>Name: </strong> <?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamName;?>
</p>
            <p><strong>Nationality: </strong> <?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamNationality;?>
</p>
            <p><strong>Driver one: </strong> <a href="drivers/<?php echo $_smarty_tpl->tpl_vars['driversData']->value[0]->id;?>
"><?php echo $_smarty_tpl->tpl_vars['driversData']->value[0]->driverName;?>
</a></p>
            <p><strong>Driver two: </strong> <a href="drivers/<?php echo $_smarty_tpl->tpl_vars['driversData']->value[1]->id;?>
"><?php echo $_smarty_tpl->tpl_vars['driversData']->value[1]->driverName;?>
</a></p>
            <p><strong>Total victories: </strong> <?php echo $_smarty_tpl->tpl_vars['teamData']->value->totalVictories;?>
</p>
            <p><strong>Total podiums: </strong> <?php echo $_smarty_tpl->tpl_vars['teamData']->value->totalPodiums;?>
</p>

        </div>
        
        <?php if (($_smarty_tpl->tpl_vars['teamData']->value->image)) {?>
            <div class="image-container">
                <img src="<?php echo $_smarty_tpl->tpl_vars['teamData']->value->image;?>
" alt="TEAM IMAGE" class="team-image" draggable="false">
            </div>
        <?php } else { ?>
            <div class="image-container">
                <p>NO IMAGE</p>
            </div>
        <?php }?>

    </div>

    <a href="teams" class="btn btn-danger"><- back to teams</a>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
