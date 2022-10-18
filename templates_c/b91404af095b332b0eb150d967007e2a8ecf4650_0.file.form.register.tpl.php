<?php
/* Smarty version 4.2.1, created on 2022-10-15 22:49:50
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\form.register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b1cee40fbb5_84620731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91404af095b332b0eb150d967007e2a8ecf4650' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\form.register.tpl',
      1 => 1665860608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b1cee40fbb5_84620731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="mt-5 w-25 mx-auto">
<form method="POST" action="validate">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" required class="form-control" id="password" name="contraseña">
    </div>

    <button type="submit" class="btn btn-success">Entrar</button>
    <a aria-current="page" href="home"><button type="button" class="btn btn-light">Invitado </button></a>      
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>

</form>    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>          



<?php }
}
