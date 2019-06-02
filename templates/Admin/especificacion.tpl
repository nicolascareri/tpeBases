
{include file="../header.tpl"}
  <h1>{$encabezado} {$notebook['nombre']}</h1>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-xs-12">
          <div class="thumbnail">
            {if (!empty($especificacion))}
              <ul class="list-group">
                <li class="list-group-item">TIPO PANTALLA: {$especificacion.pantalla}</li>
                <li class="list-group-item">RESOLUCION PANTALLA: {$especificacion.pantalla_dimension}</li>
                <li class="list-group-item">PESO (en gramos): {$especificacion.peso}</li>
                <li class="list-group-item">PROCESADOR: {$especificacion.procesador}</li>
                <li class="list-group-item">MEMORIA RAM: {$especificacion.ram}</li>
                <li class="list-group-item">MEMORIA INTERNA: {$especificacion.memoria}</li>
                <li class="list-group-item">SISTEMA OPERATIVO: {$especificacion.sistema_operativo}</li>
                <li class="list-group-item">CONECTIVIDAD: {$especificacion.conectividad}</li>
                <li class="list-group-item">BATERIA (en mAh): {$especificacion.capacidad_bateria}</li>
                <li class="list-group-item">CAMARA: {$especificacion.camara}</li>
                <li class="list-group-item">LECTOR DE HUELLA: {if $especificacion.lector_huella}SI{else}NO{/if}</li>
                <li class="list-group-item">SUPERCARGA: {if $especificacion.supercarga}SI{else}NO{/if}</li>
              </ul>
              <a href="borrarEspecificacion/{$notebook.id_notebook}" aria-label="borrar especificacion"type="button" class="btn btn-danger btn-sm">Borrar</a>
           {else}
              <p>ESPECIFICACIONES NO CARGADAS</p>
              <a href="crearEspecificacion/{$notebook.id_notebook}" aria-label="cerar especificacion"type="button" class="btn btn-primary btn-sm">Crear Especificaciones</a>
            {/if}
              <a href="adminNotebooks" aria-label="panel admin" type="button" class="btn btn-success btn-sm">Volver</a>
          </div>
      </div>
    </div>
{include file="../footer.tpl"}
