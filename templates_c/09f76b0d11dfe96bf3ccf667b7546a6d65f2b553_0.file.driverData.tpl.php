<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:32:24
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\driverData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c94883472a0_08599390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f76b0d11dfe96bf3ccf667b7546a6d65f2b553' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\driverData.tpl',
      1 => 1665963143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c94883472a0_08599390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main-data-container container">

    <h1><span><?php echo $_smarty_tpl->tpl_vars['driverData']->value->driverName;?>
</span> information</h1>

    <div class="info-container">

        <div class="info">

            <p><strong>Driver ID: </strong> <?php echo $_smarty_tpl->tpl_vars['driverData']->value->id;?>
</p>
            <p><strong>Name: </strong> <?php echo $_smarty_tpl->tpl_vars['driverData']->value->driverName;?>
</p>
            <p><strong>Nationality: </strong> <?php echo $_smarty_tpl->tpl_vars['driverData']->value->nationality;?>
</p>
            <p><strong>Age:</strong> <?php echo $_smarty_tpl->tpl_vars['driverData']->value->age;?>
</p>
            <p><strong>Victories: </strong> <?php echo $_smarty_tpl->tpl_vars['driverData']->value->victories;?>
</p>
            <p><strong>Podiums: </strong> <?php echo $_smarty_tpl->tpl_vars['driverData']->value->podiums;?>
</p>
            <p><strong>Running for :</strong> <a href="teams/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value->teamName;?>
</a></p>

        </div>

        <?php if (($_smarty_tpl->tpl_vars['driverData']->value->image)) {?>
            <div class="image-container">
                <img src="<?php echo $_smarty_tpl->tpl_vars['driverData']->value->image;?>
" alt="DRIVER IMAGE" class="driver-image" draggable="false">
            </div>
        <?php } else { ?>
            <div class="image-container">
                <p>NO IMAGE</p>
            </div>
        <?php }?>        

    </div>

    <a href="drivers" class="btn btn-danger"><- back to drivers</a>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
