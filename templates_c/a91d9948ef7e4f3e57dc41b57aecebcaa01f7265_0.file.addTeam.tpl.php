<?php
/* Smarty version 4.2.1, created on 2022-10-14 02:13:54
  from 'F:\xampp\htdocs\FACULTAD\FORMULA 1 - TPE\templates\addTeam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348a9c2cb3ca0_35801541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91d9948ef7e4f3e57dc41b57aecebcaa01f7265' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA 1 - TPE\\templates\\addTeam.tpl',
      1 => 1665705626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348a9c2cb3ca0_35801541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form-container">

    <form class="form-edit" action="addteamdatabase" method="POST">

        <h2>ADD NEW TEAM</h2>

        <div class="form-group">
            <label for="teamName">Name</label>
            <input type="text" name="teamName" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="totalVictories">Total victories</label>
            <input type="number" name="totalVictories" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="totalPodiums">Total podiums</label>
            <input type="number" name="totalPodiums" class="form-control" required>
        </div>        

        <input type="submit" class="btn btn-danger" value="ADD">
        <a href="./teams" class="btn btn-danger">CANCEL</a>
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
