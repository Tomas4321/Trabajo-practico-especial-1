<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:17:21
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\form.filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634daa41b60e27_81213104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '611b0b98703a4ae89a437afaae5286a39b3aa227' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\form.filter.tpl',
      1 => 1666034239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634daa41b60e27_81213104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="d-grid gap-3">
  <form action="filtro" method="POST">
    <select class="btn btn-dark" name="opciones" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
      <option>auto</option>
      <option>camioneta</option>
    </select>
    <button class="btn btn-light" type="submit">Filtrar categoria</button>
  </form>
</div>

<ul class="list-group border border-dark">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
      <?php ob_start();
echo $_smarty_tpl->tpl_vars['car']->value->categoria;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['opciones']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == $_prefixVariable2) {?>
        <h5 class="list-group-item list-group-item-primary"> Vehiculo : <?php echo $_smarty_tpl->tpl_vars['car']->value->vehiculos;?>
 </h5>
        <li class="list-group-item"> Forma de pago : <?php echo $_smarty_tpl->tpl_vars['car']->value->forma_de_pago;?>
</li>
        <li class="list-group-item"> Contacto: <?php echo $_smarty_tpl->tpl_vars['car']->value->contacto;?>
</li> 
      <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<a class="btn btn-dark" href="home">Volver al inicio</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
