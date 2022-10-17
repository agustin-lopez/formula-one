<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:37:29
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\driverData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63487709ee3040_52581218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40e7a70d117edc696da3f014f457f33de8a0901' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\driverData.tpl',
      1 => 1665690775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63487709ee3040_52581218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='table-container'>
    <table class='table'>
        <tr>
            <th>Driver ID</th>
            <th>Name</th>
            <th>Nationality</th>
            <th>Age</th>
            <th>Victories</th>
            <th>Podiums</th>
        </tr>

        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['driverData']->value->id;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['driverData']->value->driverName;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['driverData']->value->nationality;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['driverData']->value->age;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['driverData']->value->victories;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['driverData']->value->podiums;?>
</td>
        </tr>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
