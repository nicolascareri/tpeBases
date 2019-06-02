<?php
/* Smarty version 3.1.30, created on 2018-04-25 00:55:26
  from "C:\xampp\htdocs\tpe\templates\Admin\especificacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfb5de9c0a80_76002029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7647e0826cc7484745939553cedc83a902d6d5e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\Admin\\especificacion.tpl',
      1 => 1524596499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5adfb5de9c0a80_76002029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['notebook']->value['nombre'];?>
</h1>
<div class="row">
  <div class="col-md-8 col-md-offset-2 col-xs-12">
    <div class="thumbnail">
    <?php if ((!empty($_smarty_tpl->tpl_vars['especificacion']->value))) {?>
      <ul class="list-group">
        <li class="list-group-item">TIPO PANTALLA: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['pantalla'];?>
</li>
        <li class="list-group-item">RESOLUCION PANTALLA: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['pantalla_dimension'];?>
</li>
        <li class="list-group-item">PESO (en gramos): <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['peso'];?>
</li>
        <li class="list-group-item">PROCESADOR: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['procesador'];?>
</li>
        <li class="list-group-item">MEMORIA RAM: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['ram'];?>
</li>
        <li class="list-group-item">MEMORIA INTERNA: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['memoria'];?>
</li>
        <li class="list-group-item">SISTEMA OPERATIVO: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['sistema_operativo'];?>
</li>
        <li class="list-group-item">CONECTIVIDAD: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['conectividad'];?>
</li>
        <li class="list-group-item">BATERIA (en mAh): <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['capacidad_bateria'];?>
</li>
        <li class="list-group-item">CAMARA: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['camara'];?>
</li>
        <li class="list-group-item">LECTOR DE HUELLA: <?php if ($_smarty_tpl->tpl_vars['especificacion']->value['lector_huella']) {?>SI<?php } else { ?>NO<?php }?></li>
        <li class="list-group-item">SUPERCARGA: <?php if ($_smarty_tpl->tpl_vars['especificacion']->value['supercarga']) {?>SI<?php } else { ?>NO<?php }?></li>
      </ul>
      <a href="borrarEspecificacion/<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
" type="button" class="btn btn-danger btn-sm">Borrar</a>
     <?php } else { ?>
        <p>ESPECIFICACIONES NO CARGADAS</p>
        <a href="crearEspecificacion/<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
" type="button" class="btn btn-primary btn-sm">Crear Especificaciones</a>
    <?php }?>
      <a href="adminNotebooks" type="button" class="btn btn-success btn-sm">Volver</a>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
