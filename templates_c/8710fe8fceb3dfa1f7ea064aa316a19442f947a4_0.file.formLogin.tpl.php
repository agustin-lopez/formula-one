<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:55:10
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486d1e4d69a1_43361517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8710fe8fceb3dfa1f7ea064aa316a19442f947a4' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\formLogin.tpl',
      1 => 1665690795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63486d1e4d69a1_43361517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mt-5 w-25 mx-auto">

    <form method="POST" action="validate">

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" name="email" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" name="password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>

        <button type="submit" class="btn btn-primary mt-3">Login</button>

    </form>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
