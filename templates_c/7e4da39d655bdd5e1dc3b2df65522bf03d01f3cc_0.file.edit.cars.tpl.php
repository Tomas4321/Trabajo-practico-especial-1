<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:25:42
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\edit.cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dac36ea71f3_18581340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e4da39d655bdd5e1dc3b2df65522bf03d01f3cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\edit.cars.tpl',
      1 => 1666034740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dac36ea71f3_18581340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="d-grid gap-3 col-3 mx-auto">
  <form action="edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
      <label>Vehiculo:<input class="form-control form-control-lg" type="text" name="vehiculos" required></input></label>
      <label>Forma de pago:<input class="form-control form-control-lg" type="text" name="forma_de_pago" required></input></label>
      <label>Contacto: <input class="form-control form-control-lg" type="text" name="contacto" placeholder="Contacto de preferencia" required></input></label>
      <select class="btn btn-dark" name="categoria">
          <option>auto</option>
          <option>camioneta</option>
        </select>
    <button name="edit" type="submit">Cargar</button>
  </form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
