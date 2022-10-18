<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:20:59
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633df53b3f56f6_39012904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7acc518dee9b5f4c60e4a2e081803deb12d297d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\home.tpl',
      1 => 1665004840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_633df53b3f56f6_39012904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<ul class= list-group>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>  
        <li class=list-group-item> Vehiculo:<a href= "informacion/<?php echo $_smarty_tpl->tpl_vars['car']->value > 'id';?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value->vehiculos;?>
</a></li> 
        <li class=list-group-item> Metodo de pago: <?php echo $_smarty_tpl->tpl_vars['car']->value->forma_de_pago;?>
</li> 
        <li class=list-group-item> Contacto: <?php echo $_smarty_tpl->tpl_vars['car']->value->contacto;?>
 </li>            
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul> 

<?php }
}
