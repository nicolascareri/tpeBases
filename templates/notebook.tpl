
<div class="container tarjeta-notebook">

    <div class="thumbnail">
      <div class="row">
        <div class="col-xs-12 col-md-5">
         <img class="img-responsive img-notebook" src="{$notebook.imagenes.0.ruta}" />
         <div class="row">
          {assign var="activo" value="active"}
            {foreach $notebook.imagenes item=imagen}
              <div class="col-md-4 col-xs-4">
                  <a href="" aria-label="inicio" class="thumbnail mininotebook {$activo}"><img class="img-responsive" src="{$imagen.ruta}" /></a>
              </div>
              {assign var="activo" value=""}
            {/foreach}
         </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <h3><a class="partialContain" href="notebooks" data-value="{$marca.id_marca}" aria-label="mostar notebook marca">{$marca.nombre|upper}</a> {$notebook.nombre|upper}</h3>
          <img src="{$marca.url_img}" alt="">
          <h3>CARACTERISTICAS</h3>
          <p>{$notebook.caracteristicas}</p>
          <h4><span class="label label-default">PRECIO ${$notebook.precio}</span></h4>
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
          <a href="comentar#comentarios" aria-label="comentar y comentarios" class="btn-review btnComentarios" data-idnotebook="{$notebook.id_notebook}" aria-controls="profile" role="tab" data-toggle="tab" >Comentarios</a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="especificaciones">
          {if (!empty($especificacion))}
            <ul class="list-group">
              <li class="list-group-item">TIPO PANTALLA: {$especificacion.pantalla}</li>
              <li class="list-group-item">RESOLUCION PANTALLA: {$especificacion.pantalla_dimension}</li>
              <li class="list-group-item">PESO: {$especificacion.peso} gr.</li>
              <li class="list-group-item">PROCESADOR: {$especificacion.procesador}</li>
              <li class="list-group-item">MEMORIA RAM: {$especificacion.ram}</li>
              <li class="list-group-item">MEMORIA INTERNA: {$especificacion.memoria}</li>
              <li class="list-group-item">SISTEMA OPERATIVO: {$especificacion.sistema_operativo}</li>
              <li class="list-group-item">CONECTIVIDAD: {$especificacion.conectividad}</li>
              <li class="list-group-item">BATERIA: {$especificacion.capacidad_bateria} mAh</li>
              <li class="list-group-item">CAMARA: {$especificacion.camara}</li>
              <li class="list-group-item">LECTOR DE HUELLA: {if $especificacion.lector_huella}SI{else}NO{/if}</li>
              <li class="list-group-item">SUPERCARGA: {if $especificacion.supercarga}SI{else}NO{/if}</li>
            </ul>
          {else}
            NO ESPECIFICO NADA
          {/if}
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
