<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:53:52
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\specs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c7d702141b6_97700899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c64068d620a8eec1572baecdf2e95c22cef73dad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\specs.tpl',
      1 => 1665957163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c7d702141b6_97700899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><?php echo $_smarty_tpl->tpl_vars['especificaciones']->value;?>
</h3>

<?php if ($_smarty_tpl->tpl_vars['specs']->value) {?>

<ul class= list-group>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specs']->value, 'spec');
$_smarty_tpl->tpl_vars['spec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['spec']->value) {
$_smarty_tpl->tpl_vars['spec']->do_else = false;
?>
    <?php if (($_smarty_tpl->tpl_vars['spec']->value->id_usuarios == $_smarty_tpl->tpl_vars['id']->value)) {?>
        <li class=list-group-item> Caballos de fuerza: <?php echo $_smarty_tpl->tpl_vars['spec']->value->cv;?>
 </li>
        <li class=list-group-item> Precio : $ <?php echo $_smarty_tpl->tpl_vars['spec']->value->precio;?>
</li>
        <li class=list-group-item> Fabricacion : <?php echo $_smarty_tpl->tpl_vars['spec']->value->fabricacion;?>
</li>
        <a class="btn btn-danger" href= "deleteSpecs/<?php echo $_smarty_tpl->tpl_vars['spec']->value->id_usuarios;?>
">Borrar</a>
        <a class="btn btn-info" href= "formeditSpecs/<?php echo $_smarty_tpl->tpl_vars['spec']->value->id_usuarios;?>
">Editar</a> 
    <?php }?>
        
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php } else { ?>

    <form action="addSpecs" method="POST">
    <h5>Agregar Especificaciones </h5>
    <label>Caballos de fuerza:<input type="text"  name="cv" required></input></label>
    <label>Precio:<input type="text" name="precio" required></input></label>
    <label>Fabricacion: <input type="text" name="fabricacion" placeholder="Contacto de preferencia" required></input></label>
    <button type="submit" class="btn btn-primary">Cargar Especificaciones</button>
</form>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
