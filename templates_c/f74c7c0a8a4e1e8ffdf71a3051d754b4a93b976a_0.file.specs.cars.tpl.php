<?php
/* Smarty version 4.2.1, created on 2022-11-03 01:26:29
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\specs.cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63630ab5d4c042_21166522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f74c7c0a8a4e1e8ffdf71a3051d754b4a93b976a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\specs.cars.tpl',
      1 => 1667435186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63630ab5d4c042_21166522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h3 class="list-group-item list-group-item list-group-item-black">Especificaciones de los autos </h3>
<ul class="list-group border border-dark">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>    
        <h5 class="list-group-item list-group-item-primary"> Vehiculo: <?php echo $_smarty_tpl->tpl_vars['car']->value->vehiculos;?>
</h5> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specs']->value, 'spec');
$_smarty_tpl->tpl_vars['spec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['spec']->value) {
$_smarty_tpl->tpl_vars['spec']->do_else = false;
?>  
                <?php if ($_smarty_tpl->tpl_vars['car']->value->id == $_smarty_tpl->tpl_vars['spec']->value->id_usuarios) {?>       
                    <li class=list-group-item> Caballos de fuerza: <?php echo $_smarty_tpl->tpl_vars['spec']->value->cv;?>
 </li>
                    <li class=list-group-item> Precio : $ <?php echo $_smarty_tpl->tpl_vars['spec']->value->precio;?>
</li>
                    <li class=list-group-item> Fabricacion : <?php echo $_smarty_tpl->tpl_vars['spec']->value->fabricacion;?>
</li>
                <?php }?>          
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
</ul> 

<form action="home" method="POST">
<button class="btn btn-dark">Volver atras</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
