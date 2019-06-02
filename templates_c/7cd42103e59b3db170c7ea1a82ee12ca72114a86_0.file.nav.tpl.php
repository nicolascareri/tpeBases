<?php
/* Smarty version 3.1.30, created on 2018-08-31 19:31:08
  from "C:\xampp\htdocs\tpe\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b897b5ce3ddb0_86865109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd42103e59b3db170c7ea1a82ee12ca72114a86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\nav.tpl',
      1 => 1535736639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b897b5ce3ddb0_86865109 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">Notebooks</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home" class="partial">INICIO <span class="sr-only">()</span></a></li>
          <li><a href="notebooks"  class="partial fa fa-mobile fa-2x"></a></li>
          <li class="dropdown-marcas">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MARCAS <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
                <li><a class="notebooks partial"  title="desplegable" href="notebooks/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</a></li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://www.facebook.com/" class="fa fa-facebook hidden-xs" target="_blank" rel="noreferrer" ></a></li>
          <li><a href="https://www.instagram.com/?hl=es" class="fa fa-instagram hidden-xs" target="_blank" rel="noreferrer" ></a></li>
          <li><a href="https://www.youtube.com/" class="fa fa-youtube hidden-xs" target="_blank" rel="noreferrer" ></a></li>
            <?php if ($_smarty_tpl->tpl_vars['hayConexion']->value) {?>
              <li><a href="perfilUsuario" class="fa fa-user-circle-o partial"></a></li>
              <li><a href="logout" class="fa fa-sign-out"></a></li>
            <?php } else { ?>
          <li class="dropdown">
            <a href="#" class="fa fa-user-circle dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <div class="container-fluid">
                <form action="verificarUsuario" class="formlogin">
                  <div class="form-group">
                    <label for="usuario">Nombre de usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="root" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Contraseña</label>
                    <input type="password" class="form-control" id="pwd" name ="password" placeholder="******" required>
                  </div>
                  <button type="submit" class="btn btn-info">Ingresar</button>
                  <p>¿No eres usuario?</p>
                  <a href="crearUsuario" class="partial">Creá tu cuenta</a>
                </form>
                <div class="error-logueo"></div>
              </div>
            </ul>
          </li>
          <?php }?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
<?php }
}
