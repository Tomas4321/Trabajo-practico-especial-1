<?php
/* Smarty version 4.2.1, created on 2022-10-06 15:51:08
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633edd4cb8c386_67996474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b64a6f324a76413ea15b94ad575c0f234c58f18a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\filter.tpl',
      1 => 1665063970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_633edd4cb8c386_67996474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
    <?php if ('opciones' == 'autos') {?>
        <li class=list-group-item> Contacto: <?php echo $_smarty_tpl->tpl_vars['car']->value->categoria;?>
 </li> 
    <?php }?>
    <?php if ('opciones' == 'camionetas') {?>
        <li class=list-group-item> Contacto: <?php echo $_smarty_tpl->tpl_vars['car']->value->categoria;?>
 </li>    
    <?php }?>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
