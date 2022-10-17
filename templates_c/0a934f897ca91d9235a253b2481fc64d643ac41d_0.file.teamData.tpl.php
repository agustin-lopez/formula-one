<?php
/* Smarty version 4.2.1, created on 2022-10-14 00:50:41
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\teamData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63489641f2fda2_81383331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a934f897ca91d9235a253b2481fc64d643ac41d' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\teamData.tpl',
      1 => 1665701430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63489641f2fda2_81383331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='table-container'>
    <table class='table'>
        <tr>
            <th>Team name</th>
            <th>Nationality</th>
            <th>Driver 1</th>
            <th>Driver 2</th>
            <th>Total victories</th>
            <th>Total podiums</th>
        </tr>

        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamName;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['teamData']->value->teamNationality;?>
</td>

                        <?php if ((isset($_smarty_tpl->tpl_vars['driverNames']->value[0]->driverName))) {?>
                <td><?php echo $_smarty_tpl->tpl_vars['driverNames']->value[0]->driverName;?>
</td>
            <?php } else { ?>
                <td>EMPTY SLOT</td>
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['driverNames']->value[1]->driverName))) {?> 
                <td><?php echo $_smarty_tpl->tpl_vars['driverNames']->value[1]->driverName;?>
</td>
            <?php } else { ?>
                <td>EMPTY SLOT</td>
            <?php }?>

            <td><?php echo $_smarty_tpl->tpl_vars['teamData']->value->totalVictories;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['teamData']->value->totalPodiums;?>
</td>
        </tr>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
