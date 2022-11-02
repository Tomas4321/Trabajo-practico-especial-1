<?php
/* Smarty version 4.2.1, created on 2022-11-03 00:40:03
  from 'C:\xampp\htdocs\Trabajo practico especial N1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362ffd3842381_31093842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef9cb1384cf1e40539654f0716ce11465447011f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo practico especial N1\\templates\\header.tpl',
      1 => 1667432400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6362ffd3842381_31093842 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Volkswagen Oficial</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        </head>
<body class="bg-dark p-3 text-black bg-opacity-25 fst-italic">
<header class="fw-bolder">

<nav class="navbar navbar-expand-lg bg-light rounded-4 border border-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="">Volkswagen Oficial</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav d-flex">
      <li class="nav-item">
      <?php if ((isset($_SESSION['logged']))) {?>
        <a class="nav-link" aria-current="page" href="home">Inicio</a>
      </li>
      <?php }?>
      <?php if (!(isset($_SESSION['logged']))) {?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login">Iniciar session</a>
        </li>
        <?php } else { ?>
        <li class="nav-item ml-auto">
          <a class="nav-link" aria-current="page" href="logout">Cerrar session</a>
        </li>
      <?php }?>
    </ul>
  </div>
</div>
</nav>


<h4>Oficinas centrales: Wolfsburgo, Alemania</h4>

<div class="d-grid gap-4 col-3 mx-auto">
  <h4 class="fs-6">Fundación: 28 de mayo de 1937, Berlín, Alemania</h4>
  <h5>Atención al cliente: +54 800-888-8338</h5>
</div>
</header>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
