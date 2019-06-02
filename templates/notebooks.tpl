
<div class="container">
	<div class="row">
  	<div class="col-sm-4 col-md-3">
  	</div>
	</div>
  <div class="row">
  	<div class="col-md-12">
      {foreach from=$notebooks item=notebook}
  		<div class="col-sm-6 col-md-4">
  			<a class="thumbnail partialContain contenedor-notebook" href="notebook" data-value="{$notebook.id_notebook}" aria-label="mostar notebook id">
  				    <h4 class="text-center"><span class="label label-info">{$notebook.marca.nombre}</span></h4>
  					<img class="img-responsive" src="{$notebook.imagenes.0.ruta}" alt="notebook">
  				<div class="caption">
  					<div class="row">
  						<div class="col-md-8 col-xs-6">
  							<h3>{$notebook.nombre|upper}</h3>
  						</div>
  						<div class="col-md-4 col-xs-6 price">
  							<h3><label>${$notebook.precio}</label></h3>
  						</div>
  					</div>
  			  </div>
        </a>
  		</div>
      {/foreach}
    </div>
  </div>
</div>
