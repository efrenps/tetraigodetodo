@section('content')
<div class="row">
	<div class="col-md-12">
		<ul id="banner">
			<li><img src="img/slide1.jpg" /></li>
			<li><img src="img/slide2.jpg" /></li>	  
			<li><img src="img/slide1.jpg" /></li>
		</ul>
	</div>
</div>
<div class="row" style="height:100%;">
	<div class="col-md-3">
		<label>Ofertas y promociones</label>
		<img title="Ofertas y Promociones" src='img/site/ofertas/oferta2.jpg' class="img-responsive" alt="Responsive image" />
		 <br>
	</div>
	<div class="col-md-3">
		<label>Te lo compramos?</label>
		<img title="Ordenar" src='img/site/shopping/shopping-cart.png' class="img-responsive" alt="Responsive image" />
		 <br>
	</div>
	<div class="col-md-3">
		<label>Queres saber cuanto te cuesta?</label>
		<a id="Acalculadora" href="" data-toggle="modal" data-target="#myModalCalculadora">
			<img title="Calculadora" src='img/site/calculator/calculator.png' class="img-responsive" alt="Responsive image" />
		</a>
		<br>
	</div>
	<div class="col-md-3">
		<label >Acceso usuarios registrados</label>
		<a title="Iniciar sesion" href="login" target="_blank">
			<img src="img/site/login/plataforma.jpg" class="img-responsive" alt="Responsive image" >
		</a>
		<br>
	</div>		
</div>

<!-- Starts modal calculadora -->
<div class="modal fade modal-lg" id="myModalCalculadora" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Calculadora</h4>
      </div>
      <div  class="modal-body row">
      	  	<div class="col-md-12">
      	  		<div id="ModalProductos" class="form-group">
                	<label for="Productos">Productos</label>
                	<select name="Productos" id="Productos" class="form-control" style="width:90%;">
                		 @for ($i = 0; $i < count($Products); $i++)
							 <?php $Product = $Products[$i]; ?>
							 <option id="{{{ $Product->id}}}" value="{{{ $Product->value}}}">{{{ $Product->name}}} - ({{{ $Product->value}}})</option>	
						@endfor
                	</select>
                </div> 
                <div class="form-group">
      	  				<label for="">Tipo de Servicio</label>
      	  				<select name="TipoServicio" id="TipoServicio" class="form-control" style="width:90%;">
      	  					<option id="CompraEntrega" value="CE">Compra y Entrega</option>
      	  					<option id="EnvioEntrega"  value="EE">Envio y Entrega</option>
      	  				</select>
      	  		</div>
      	  	</div>

      	  	<div class="row">
      	  		<div class="col-md-12">
      	  			<div class="form-group">
      	  				<div class="row">
	      	  				<div class="form-group" style="width:50%;display: inline;">
	      	  					<label for="" style="margin-right: 5px;">Peso Total</label>
	      	  					<input type="text" id="PesoLbs"class="form-control" style="width:23%;display: inline;margin-left: 5%;
">
	      	  					<strong>Lbs</strong>
	      	  				</div>
	      	  				<div class="form-group" style="width:50%;display: inline;margin-left: 7%;">
	      	  					<input type="text" id="PesoKgs"class="form-control" style="width:23%;display: inline;">
	      	  					<strong>Kgs</strong>
	      	  				</div>
      	  				</div>
      	  			</div>
      	  		</div>
      	  	</div>

      	  	<div class="row">
      	  		<div class="col-md-12">
      	  			<div class="form-group" style="display: inline;">
      	  				<label for="">Precio USD</label>
      	  				<input id="Precio" type="text" class="form-control" style="width:23%;display: inline;margin-left: 5%;">
      	  				<label class="Cotizacion" style="padding-left: 3%;">Valor CIF (Valor Aduanero):</label><label id="ValorCIF" style="padding-left:1%;" class="Cotizacion">$60.00</label>
      	  			</div>
      	  		</div>
      	  	</div>

			<div class="Cotizacion">				
				<div id="encabezado" class="row">
	      	  		<div class="col-md-6">
	      	  			<label>Cargos</label>
	      	  		</div>
	      	  		<div class="col-md-6 right">
	      	  			<label>Costos</label> 
	      	  		</div>
	      	  	</div>

	      	  	<div class="row cargos">
	      	  		<div class="col-md-6">
	  	  				<label >Costo 1</label>
	  	  				<label >Costo 1</label>
	  	  				<label >Costo 1</label>
	  	  				<label >Costo 1</label>
	  	  				<label >Costo 1</label>
	  	  				<label >Costo 1</label>      	  			
	      	  		</div>
	      	  		<div class="col-md-6 right">
	      	  			<label >$12.35</label>
	  	  				<label >$12.35</label>
	  	  				<label >$12.35</label>
	  	  				<label >$12.35</label>
	  	  				<label >$12.35</label>
	  	  				<label >$12.35</label> 
	      	  		</div>
	      	  	</div>

	      	  	<div class="row" id="SubTotal">
	      	  		<div class="col-md-6">
	      	  			Total de Cargos
	      	  		</div>
	      	  		<div class="col-md-6 right">
	      	  			$100.25
	      	  		</div>
	      	  	</div>

	      	  	<div class="row" id="Total">
	      	  		<div class="col-md-6">
	      	  			Total (Producto + Cargos)
	      	  		</div>
	      	  		<div class="col-md-6 right">
	      	  			$200.50
	      	  		</div>
	      	  	</div>
      	  	</div>
      	  	


      </div>
      <label id="myModal2Label"></label>       
      <div class="modal-footer">
      	<button type="button" id="saveModal1" class="btn btn-primary pull-left Cotizacion"><i class="fa fa-check-circle"></i> Deseo este producto</button>
        <button id="ButtonReset" class="btn btn-warning Cotizacion"  style="margin-left:5px;"><i class="fa fa-refresh"></i><span> Reiniciar valores</span></button>
        <button type="button" id="Calcular" class="btn btn-primary pull-right"><i class="fa fa-usd"></i> Cotizar este producto</button>                      
      </div>
    </div>
  </div>
</div>
</div>
<!-- End modal calculadora --> 
@stop
@section('scripts')
	{{ HTML::script('js/xml2jsobj.js'); }}
	{{ HTML::script('js/home.js'); }}
	{{ HTML::script('js/helper.js'); }}
@stop