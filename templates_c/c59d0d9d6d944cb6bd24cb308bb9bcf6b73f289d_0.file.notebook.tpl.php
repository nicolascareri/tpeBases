<?php
/* Smarty version 3.1.30, created on 2019-06-02 20:11:49
  from "C:\xampp\htdocs\tpeBases\templates\notebook.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf41165996f10_27859094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c59d0d9d6d944cb6bd24cb308bb9bcf6b73f289d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBases\\templates\\notebook.tpl',
      1 => 1559498863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf41165996f10_27859094 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container tarjeta-notebook">

    <div class="thumbnail">
      <div class="row">
        <div class="col-xs-12 col-md-5">
         <img class="img-responsive img-notebook" src="<?php echo $_smarty_tpl->tpl_vars['notebook']->value['imagenes'][0]['ruta'];?>
" />
         <div class="row">
          <?php $_smarty_tpl->_assignInScope('activo', "active");
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notebook']->value['imagenes'], 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
              <div class="col-md-4 col-xs-4">
                  <a href="" aria-label="inicio" class="thumbnail mininotebook <?php echo $_smarty_tpl->tpl_vars['activo']->value;?>
"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" /></a>
              </div>
              <?php $_smarty_tpl->_assignInScope('activo', '');
?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <h3><a class="partialContain" href="notebooks" data-value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" aria-label="mostar notebook marca"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['marca']->value['nombre'], 'UTF-8');?>
</a> <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['notebook']->value['nombre'], 'UTF-8');?>
</h3>
          <img src="<?php echo $_smarty_tpl->tpl_vars['marca']->value['url_img'];?>
" alt="">
          <h3>CARACTERISTICAS</h3>
          <p><?php echo $_smarty_tpl->tpl_vars['notebook']->value['caracteristicas'];?>
</p>
          <h4><span class="label label-default">PRECIO $<?php echo $_smarty_tpl->tpl_vars['notebook']->value['precio'];?>
</span></h4>
        </div>
      </div>
    </div>

    <!-- Nav tabs -->
    <div class="thumbnail">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
          <a href="#especificaciones" aria-controls="home" role="tab" data-toggle="tab" aria-label="especificacion notebook">Especificaciones</a>
        </li>
        <li role="presentation">
          <a href="comentar#comentarios" aria-label="comentar y comentarios" class="btn-review btnComentarios" data-idnotebook="<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
" aria-controls="profile" role="tab" data-toggle="tab" >Comentarios</a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="especificaciones">
          <?php if ((!empty($_smarty_tpl->tpl_vars['especificacion']->value))) {?>
            <ul class="list-group">
              <li class="list-group-item">TIPO PANTALLA: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['pantalla'];?>
</li>
              <li class="list-group-item">RESOLUCION PANTALLA: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['pantalla_dimension'];?>
</li>
              <li class="list-group-item">PESO: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['peso'];?>
 gr.</li>
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
              <li class="list-group-item">BATERIA: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['capacidad_bateria'];?>
 mAh</li>
              <li class="list-group-item">CAMARA: <?php echo $_smarty_tpl->tpl_vars['especificacion']->value['camara'];?>
</li>
              <li class="list-group-item">LECTOR DE HUELLA: <?php if ($_smarty_tpl->tpl_vars['especificacion']->value['lector_huella']) {?>SI<?php } else { ?>NO<?php }?></li>
              <li class="list-group-item">SUPERCARGA: <?php if ($_smarty_tpl->tpl_vars['especificacion']->value['supercarga']) {?>SI<?php } else { ?>NO<?php }?></li>
            </ul>
          <?php } else { ?>
            NO ESPECIFICO NADA
          <?php }?>
        </div>

        <div role="tabpanel" class="tab-pane" id="comentarios">
          <div class="container">
            <div class="comentar" >
            </div>
            <div class="comentarios">
            </div>
          </div>
        </div>

      </div>
    </div>

</div>
<?php }
}
