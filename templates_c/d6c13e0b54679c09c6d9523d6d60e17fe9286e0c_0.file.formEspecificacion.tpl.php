<?php
/* Smarty version 3.1.30, created on 2018-04-25 01:42:39
  from "C:\xampp\htdocs\tpe\templates\Admin\formEspecificacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfc0efef8ea0_39950944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6c13e0b54679c09c6d9523d6d60e17fe9286e0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\Admin\\formEspecificacion.tpl',
      1 => 1524596550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5adfc0efef8ea0_39950944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</h1>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <div class="thumbnail">
      <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
        <div class="form-group">
          <label for="pantalla">Pantalla</label>
          <input type="text" class="form-control" id="pantalla" name="pantalla"  value="<?php echo $_smarty_tpl->tpl_vars['pantalla']->value;?>
">
        </div>
        <div class="form-group">
          <label for="pantalla_dimension">Dimension Pantalla</label>
          <input type="text" class="form-control" id="pantalla_dimension" name="pantalla_dimension"><?php echo $_smarty_tpl->tpl_vars['pantalla_dimension']->value;?>
</textarea>
        </div>
        <div class="form-group">
          <label for="peso">Peso (en gramos)</label>
          <input type="number" class="form-control" id="peso" name="peso"  value="<?php echo $_smarty_tpl->tpl_vars['peso']->value;?>
">
        </div>
        <div class="form-group">
          <label for="procesador">Procesador</label>
          <input type="text" class="form-control" id="procesador" name="procesador"  value="<?php echo $_smarty_tpl->tpl_vars['procesador']->value;?>
">
        </div>
        <div class="form-group">
          <label for="ram">Ram</label>
          <input type="text" class="form-control" id="ram" name="ram"  value="<?php echo $_smarty_tpl->tpl_vars['ram']->value;?>
">
        </div>
        <div class="form-group">
          <label for="memoria">Memoria</label>
          <input type="text" class="form-control" id="memoria" name="memoria"  value="<?php echo $_smarty_tpl->tpl_vars['memoria']->value;?>
">
        </div>
        <div class="form-group">
          <label for="sistema_operativo">Sistema Operativo</label>
          <input type="text" class="form-control" id="sistema_operativo" name="sistema_operativo"  value="<?php echo $_smarty_tpl->tpl_vars['sistema_operativo']->value;?>
">
        </div>
        <div class="form-group">
          <label for="conectividad">Conectividad</label>
          <input type="text" class="form-control" id="conectividad" name="conectividad"  value="<?php echo $_smarty_tpl->tpl_vars['conectividad']->value;?>
">
        </div>
        <div class="form-group">
          <label for="capacidad_bateria">Capacidad de la bateria (en mHa)</label>
          <input type="number" class="form-control" id="capacidad_bateria" name="capacidad_bateria"  value="<?php echo $_smarty_tpl->tpl_vars['capacidad_bateria']->value;?>
">
        </div>
        <div class="form-group">
          <label for="camara">Camara</label>
          <input type="text" class="form-control" id="camara" name="camara"  value="<?php echo $_smarty_tpl->tpl_vars['camara']->value;?>
">
        </div>
          <div class="checkbox">
            <label>
                <input type="checkbox" name="lector_huella" <?php if ($_smarty_tpl->tpl_vars['lector_huella']->value) {?>checked<?php }?>> Lector de Huella
            </label>
            <label>
                <input type="checkbox" name="supercarga" <?php if ($_smarty_tpl->tpl_vars['supercarga']->value) {?>checked<?php }?>> Supercarga
            </label>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
</button>
        <a href="adminNotebooks" type="button" class="btn btn-success btn-sm">Volver</a>
      </form>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
