<?php
/* Smarty version 3.1.30, created on 2018-07-20 05:47:35
  from "C:\xampp\htdocs\tpe\templates\Login\formCrearCuenta.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b515b575fef64_56295015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '275086ba790250d00f176a3dbef9bb94c69151fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\Login\\formCrearCuenta.tpl',
      1 => 1524621582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b515b575fef64_56295015 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>DATOS DE REGISTRO</h1>
   <div class="container tarjeta-notebook">
     <div class="row">
       <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
       <?php }?>
      <div class="col-md-6 col-md-offset-3">
        <form class="form-registro" action="registrarUsuario">
          <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="email" class="form-control" id="email" name="usuario" placeholder="root" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name ="password" placeholder="******" required>
          </div>
          <button type="submit" class="btn btn-info">Registrar</button>
        </form>
      </div>
     </div>
   </div>
<?php }
}
