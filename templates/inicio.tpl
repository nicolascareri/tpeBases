
<div class="container">
  <h1>Sugerencia de notebook</h1>
    {if !empty($notebooks.0.nombre)}
      <div class="row">
    		  <div class="col-md-offset-4 col-sm-offset-3 col-sm-6 col-md-4">
      			<a class=" partialContain contenedor-notebook" href="notebook" data-value="{$notebooks.0.id_notebook}" aria-label="mostar notebook"></br>
    					<img class="img-responsive" src="{$notebooks.0.imagenes.0.ruta}" alt="notebook">
      				<div class="caption">
      					<div class="row">
      					</div>
      			  </div>
            </a>
      		</div>
      </div>
    {/if}
</div>
