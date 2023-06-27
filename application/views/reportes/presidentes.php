<div class="row">
  <div class="clo-md-12 text-center">
      <img src="<?php echo base_url(); ?>/assets/images/pres.jpg" width="400" height="200">
   </div>
  </div>
  <b><h1 class="text-center" style="color:#C71585;"><b><i><u>MAPA DE PRESIDENTES</u></i></b></h1></b>
  		<div class="row">
  			<div class="col-md-12">
  				<div id="mapaPresidente" style="height:500px; width:100%; border:2px solid black;"></div>

  			</div>

  		</div>
  		<script type="text/javascript">
  		function initMap(){
  			var centro= new google.maps.LatLng(-0.9184884247115855, -78.6315272173979);///google.maps.LatLng es un funcion de mapa.la variable centro es un variale en la que debemso llamr por otro
  			var mapaPresidente=new google.maps.Map(document.getElementById('mapaPresidente'),//nombre del id
  				{
  					center:centro,
  					zoom:6,
  					mapTypeId:google.maps.MapTypeId.HYBRID
  				}
  	  	);
  			<?php if($candidato1): ?>
  			<?php foreach ($candidato1 as $filaTemporal): ?>
  			var coordenadaTemporal=new google.maps.LatLng(<?php echo $filaTemporal->latitud_can; ?>, <?php echo $filaTemporal->longitud_can; ?>);
  				var marcador=new google.maps.Marker({
  						position:coordenadaTemporal,
  						title:"<?php echo $filaTemporal->dignidad_can; ?><?php echo $filaTemporal->nombres_can; ?><?php echo $filaTemporal->apellidos_can; ?>",
              icon:"<?php echo base_url(); ?>/assets/images/mar_rojo.png",
  						map:mapaPresidente
  				});
  				<?php endforeach; ?>
  				<?php endif; ?>
  		}//cierre de la funcion de int map

  		</script>
      <br>
      <br>
