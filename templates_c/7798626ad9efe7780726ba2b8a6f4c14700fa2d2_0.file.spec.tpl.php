<?php
/* Smarty version 4.2.1, created on 2022-11-03 01:01:07
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\spec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636304c37fc3e3_61881538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7798626ad9efe7780726ba2b8a6f4c14700fa2d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\spec.tpl',
      1 => 1667433665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_636304c37fc3e3_61881538 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php if ((isset($_SESSION['logged']))) {?> 
            <a class="btn btn-danger" href= "deleteSpecs/<?php echo $_smarty_tpl->tpl_vars['spec']->value->id_usuarios;?>
">Borrar</a>
            <a class="btn btn-info" href= "formeditSpec/<?php echo $_smarty_tpl->tpl_vars['spec']->value->id_usuarios;?>
">Editar</a> 
        <?php }?>    
    </ul>
<?php } else { ?>
    <?php if ((isset($_SESSION['logged']))) {?>
    <h3 class="text-danger">Este vehiculo no cuenta con Especificaciones</h3>    
    <h5>Agregue Especificaciones</h5>
    <div class="d-grid gap-3 col-3 mx-auto">
        <form action="addSpecs/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
            <label>Caballos de fuerza:<input class="form-control form-control-lg" type="text"  name="cv" required></input></label>
            <label>Precio:<input class="form-control form-control-lg" type="text" name="precio" required></input></label>
            <label>Fabricacion: <input type="text" class="form-control form-control-lg" name="fabricacion" required></input></label>
            <button type="submit" class="btn btn-success">Agregar Especificaciones</button>
        </form>
    </div>    
    <?php }
}?>

<a class="btn btn-dark" href="home">Volver al inicio</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
