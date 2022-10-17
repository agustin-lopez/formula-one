<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:50:08
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d990e4fb11_06249645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b034bf9ca6cf578ec9a76c1c1ab535514842fb31' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\formLogin.tpl',
      1 => 1665784194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349d990e4fb11_06249645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="login-container">

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

        <div class="btn-container">
            <button type="submit" class="btn btn-primary mt-3">Login</button>
        </div>

    </form>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
