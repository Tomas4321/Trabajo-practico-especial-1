<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:03:34
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\spec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d8ae6d30153_07056763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7798626ad9efe7780726ba2b8a6f4c14700fa2d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\spec.tpl',
      1 => 1666026213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d8ae6d30153_07056763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><?php echo $_smarty_tpl->tpl_vars['especificaciones']->value;?>
</h3>

<?php if ($_smarty_tpl->tpl_vars['spec']->value) {?>
    <ul class= list-group>
        <li class=list-group-item> Caballos de fuerza: <?php echo $_smarty_tpl->tpl_vars['spec']->value->cv;?>
 </li>
        <li class=list-group-item> Precio : $ <?php echo $_smarty_tpl->tpl_vars['spec']->value->precio;?>
</li>
        <li class=list-group-item> Fabricacion : <?php echo $_smarty_tpl->tpl_vars['spec']->value->fabricacion;?>
</li>
        <a class="btn btn-danger" href= "deleteSpecs/<?php echo $_smarty_tpl->tpl_vars['spec']->value->id_usuarios;?>
">Borrar</a>
        <a class="btn btn-info" href= "formeditSpec/<?php echo $_smarty_tpl->tpl_vars['spec']->value->id_usuarios;?>
">Editar</a> 
    </ul>
<?php } else { ?>
    <h5>Agregar Especificaciones </h5>
    <form action="addSpecs/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
        <label>Caballos de fuerza:<input type="text"  name="cv" required></input></label>
        <label>Precio:<input type="text" name="precio" required></input></label>
        <label>Fabricacion: <input type="text" name="fabricacion" required></input></label>
        <button type="submit" class="btn btn-success">Cargar Especificaciones</button>
    </form>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
