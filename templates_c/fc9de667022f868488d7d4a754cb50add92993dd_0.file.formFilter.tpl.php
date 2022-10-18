<?php
/* Smarty version 4.2.1, created on 2022-10-06 16:37:04
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\formFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633ee810ab4139_40812875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc9de667022f868488d7d4a754cb50add92993dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\formFilter.tpl',
      1 => 1665067021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_633ee810ab4139_40812875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="filtro" method="POST">
<select name="opciones" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option>autos</option>
  <option>camionetas</option>
</select>
<button type="submit">Filtrar categoria</button>
</form>
<h5> <?php echo $_smarty_tpl->tpl_vars['opciones']->value;?>
 </h5>
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
        <h1>GGGG</h1>
        <li class=list-group-item> Caballos de fuerza: <?php echo $_smarty_tpl->tpl_vars['car']->value->vehiculos;?>
 </li>
        <li class=list-group-item> Precio : $ <?php echo $_smarty_tpl->tpl_vars['car']->value->categoria;?>
</li>
       
    <?php }?>
        
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
