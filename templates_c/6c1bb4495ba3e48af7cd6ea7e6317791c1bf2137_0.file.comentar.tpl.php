<?php
/* Smarty version 3.1.30, created on 2018-10-13 23:34:24
  from "C:\xampp\htdocs\tpeBootstrap3\templates\comentar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc264e0a3a2b1_11375290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c1bb4495ba3e48af7cd6ea7e6317791c1bf2137' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap3\\templates\\comentar.tpl',
      1 => 1539466412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc264e0a3a2b1_11375290 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="col-md-1 col-xs-2">
      <div class="thumbnail">
          <img class="img-responsive user-photo" src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen_perfil'];?>
">
      </div><!-- /thumbnail -->
    </div><!-- /col-sm-1 -->
    <div class="col-md-10 col-xs-10 col-sm-9">
      <div class="panel panel-default">
          <div class="panel-heading">
            <strong><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</strong>
          </div>
          <div class="panel-body">
            <form class="publicarComentario"  data-idusuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
>
                <div class="form-group">
                    <label for="review">Comentario</label>
                    <textarea class="form-control" id="review" name="review" placeholder="Escriba su review..." required rows="5" cols="50"></textarea>
                </div>
                <label>Puntaje</label>
                <br></br>
                <fieldset class="puntaje">
                    <input type="radio" id="star5" name="puntaje" value="5" required/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="puntaje" value="4" required/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="puntaje" value="3" required/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="puntaje" value="2" required/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="puntaje" value="1" required checked/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
                <br></br>
                <button type="submit" class="btn btn-default">Publicar</button>
            </form>
          </div>
      </div>
    </div>
</div>
<?php }
}
