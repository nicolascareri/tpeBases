<?php
/* Smarty version 3.1.30, created on 2018-04-24 11:16:21
  from "C:\xampp\htdocs\tpe\templates\celular.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adef5e5c29158_52166593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1918220c306986df2e2cb8ff1c3c1c2041581a80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\celular.tpl',
      1 => 1524561374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adef5e5c29158_52166593 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container tarjeta-celular">
  <div class="thumbnail">
    <div class="row">
      <div class="col-xs-12 col-md-5">
       <img class="img-responsive img-celular" src="<?php echo $_smarty_tpl->tpl_vars['celular']->value['imagenes'][0]['ruta'];?>
" />
       <div class="row">
        <?php $_smarty_tpl->_assignInScope('activo', "active");
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['celular']->value['imagenes'], 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
          <div class="col-md-4 col-xs-4">
              <a href="" class="thumbnail minicelular <?php echo $_smarty_tpl->tpl_vars['activo']->value;?>
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
        <h3><a class="partialContain" href="celulares" data-value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['marca']->value['nombre'], 'UTF-8');?>
</a> <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['celular']->value['nombre'], 'UTF-8');?>
</h3>
        <img src="<?php echo $_smarty_tpl->tpl_vars['marca']->value['url_img'];?>
" alt="">
        <h3>CARACTERISTICAS</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['celular']->value['caracteristicas'];?>
</p>
        <h4><span class="label label-default">PRECIO $<?php echo $_smarty_tpl->tpl_vars['celular']->value['precio'];?>
</span></h4>
      </div>
    </div>
  </div>
  <div>
    <!-- Nav tabs -->
    <div class="thumbnail">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#especificaciones" aria-controls="home" role="tab" data-toggle="tab">Especificaciones</a></li>
        <li role="presentation"><a href="#reviews" class="nro_celular" data-idcelular="<?php echo $_smarty_tpl->tpl_vars['celular']->value['id_celular'];?>
" aria-controls="profile" role="tab" data-toggle="tab" >Comentarios</a></li>
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
            DISCULPE, ESPECIFICACIONES NO CARGADAS
          <?php }?>
        </div>
        <div role="tabpanel" class="tab-pane" id="reviews">
          <div class="container">
            <div class="comentar">
              <a type="button" href="comentar" class="btn btn-info btn-review ">Reviews</a>
            </div>
            <div class="comentarios">
            <div>
          </div><!-- /container -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
