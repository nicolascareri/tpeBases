
{include file="../header.tpl"}
  <h1>{$encabezado}</h1>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
      <div class="thumbnail cuerpoNotebooks">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Caracteristicas</th>
                <th>Imagenes</th>
                <th>Precio</th>
                <th>Marca</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$notebooks item=notebook}
                <tr>
                  <td>{$notebook.nombre}</td>
                  <td>{$notebook.caracteristicas}</td>
                  <td>
                    {foreach $notebook.imagenes item=imagen}
                      <img src="{$imagen.ruta}" class="img-responsive" alt="{$notebook.nombre}">
                    {/foreach}
                    <a href="modificarImagenes/{$notebook.id_notebook}" aria-label="editar imagen" class="fa fa-pencil"></a>
                  </td>
                  <td>$ {$notebook.precio}</td>
                  <td>{$notebook.marca.nombre}</td>
                  <td><a href="modificarNotebook/{$notebook.id_notebook}" aria-label="editar notebook" class="fa fa-pencil"></a></td>
                  <td><a href="eliminarNotebook/{$notebook.id_notebook}" aria-label="elminar notebook" class="fa fa-trash-o"></a></td>
                  <td><a href="especificacion/{$notebook.id_notebook}" aria-label="especificacion notebook">Especificaciones</a></td>
                </tr>
              {/foreach}
            </tbody>
          </table>
        </div>
        <a href="crearNotebook" aria-label="crear notebook" type="button" class="btn btn-primary btn-sm">Crear nueva notebook</a>
        <a href="admin" aria-label="panel admin" type="button" class="btn btn-success btn-sm">Volver</a>
      </div>
    </div>
  </div>
{include file="../footer.tpl"}
