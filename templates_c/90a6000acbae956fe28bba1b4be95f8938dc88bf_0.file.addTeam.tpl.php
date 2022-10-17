<?php
/* Smarty version 4.2.1, created on 2022-10-15 20:31:32
  from 'F:\xampp\htdocs\FACULTAD\FORMULA_1_TPE\templates\addTeam.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634afc841b0579_33089150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90a6000acbae956fe28bba1b4be95f8938dc88bf' => 
    array (
      0 => 'F:\\xampp\\htdocs\\FACULTAD\\FORMULA_1_TPE\\templates\\addTeam.tpl',
      1 => 1665858686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634afc841b0579_33089150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <form class="form-edit" action="addteamdatabase" method="POST" enctype="multipart/form-data">

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
        
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>      

        <input type="submit" class="btn btn-danger" value="ADD">
        <a href="teams" class="btn btn-danger">CANCEL</a>
    </form>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
