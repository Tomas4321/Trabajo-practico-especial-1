<?php
/* Smarty version 4.2.1, created on 2022-11-03 00:41:56
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6363004474e8f7_83853912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7edfc33892e2d9a3788a80d93c84fa9228477467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\cars.tpl',
      1 => 1667432514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6363004474e8f7_83853912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="d-grid gap-8 col-3 mx-auto">

<h3 class="display-4">Filtrar vehiculos</h3>
<form action="filtro" method="POST">
<select name="opciones" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option>auto</option>
  <option>camioneta</option>
</select>
<button class="btn btn-light" type="submit">Filtrar</button>
</form>


<h3 class="display-6">Filtrar especificaciones por autos</h3>
<form action="listado" method="POST">
  <button class="btn btn-light" type="submit">Filtrar</button>
</form>


<div class=" border border-dark border border-4 rounded-2">
<?php if ((isset($_SESSION['logged']))) {?> 
      <form action="add" method="POST">
        <h3>Agregar Vehiculo</h3>
          <label>Vehiculo<input class="form-control form-control-lg" type="text"  name="vehiculos" required></input></label>
          <label>Forma de pago<input class="form-control form-control-lg" type="text" name="forma_de_pago" required></input></label>
          <label>Contacto<input class="form-control form-control-lg" type="text" name="contacto" placeholder="Contacto de preferencia" required></input></label>
        <select class="btn btn-dark" name="categoria">
          <option>auto</option>
          <option>camioneta</option>
        </select>
        <button type="submit" class="btn btn-primary">Cargar Vehiculo</button>
      </form>
    <?php }?>    
  </div>
</div>

<div class="d-grid gap-3 col-7 mx-auto border border-dark">
  <ul class= list-group>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?> 
        <h5 class=list-group-item> Vehiculo:<a href= "informacion/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value->vehiculos;?>
</a></h5> 
        <li class=list-group-item> Metodo de pago: <?php echo $_smarty_tpl->tpl_vars['car']->value->forma_de_pago;?>
</li> 
        <li class=list-group-item> Contacto: <?php echo $_smarty_tpl->tpl_vars['car']->value->contacto;?>
</li>                        
        <li class=list-group-item> categoria: <?php echo $_smarty_tpl->tpl_vars['car']->value->categoria;?>
</li>                        
      <?php if ((isset($_SESSION['logged']))) {?>       
          <a class="btn btn-danger" href= "delete/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
">Borrar</a>
          <a class="btn btn-info" href= "formedit/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
">Editar</a>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul> 
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
