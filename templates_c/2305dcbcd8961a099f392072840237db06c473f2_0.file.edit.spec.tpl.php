<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:11:00
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\edit.spec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d8ca49c97a6_66391406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2305dcbcd8961a099f392072840237db06c473f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\edit.spec.tpl',
      1 => 1666026659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d8ca49c97a6_66391406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="d-grid gap-3 col-3 mx-auto">
<h5>Agregar Especificaciones </h5>    
    <form action="editSpec/<?php echo $_smarty_tpl->tpl_vars['id_usuarios']->value;?>
" method="POST">
            <label>Caballos de fuerza:<input class="form-control form-control-lg" type="text"  name="cv" required></input></label>
            <label>Precio:<input class="form-control form-control-lg" type="text" name="precio" required></input></label>
            <label>Fabricacion: <input class="form-control form-control-lg" type="text" name="fabricacion" required></input></label>
            <button type="submit" class="btn btn-success">Editar Especificaciones</button>
        </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
