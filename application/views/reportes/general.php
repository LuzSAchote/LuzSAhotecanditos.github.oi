<div class="row">
  <div class="clo-md-12 text-center">
      <img src="https://especiales.elcomercio.com/2017/gifs-ec/GIF-ASAMBLEISTAS-2.gif" width="400" height="200">
   </div>
  </div>
  <center><h4><img src="<?php echo base_url(); ?>/assets/images/mar_rojo.png" alt="">PRESIDENTES</h4></center>
  <center><h4><img src="<?php echo base_url(); ?>/assets/images/mar_negro.png" alt="">ASAMBLEISTAS NACIONALES</h4></center>
  <center><h4><img src="<?php echo base_url(); ?>/assets/images/mar_azul.png" alt="">ASAMBLEISTAS PROVINCIALES</h4></center>
 <b><h1 class="text-center" style="color:#C71585;"><b><i><u>MAPA DE ASAMBLEISTAS GENERALES</u></i></b></h1></b>
		<div class="row">
			<div class="col-md-12">
				<div id="mapaGeneral" style="height:500px; width:100%; border:2px solid black;"></div>

			</div>

		</div>
		<script type="text/javascript">
		function initMap(){
			var centro= new google.maps.LatLng(-0.9184884247115855, -78.6315272173979);///google.maps.LatLng es un funcion de mapa.la variable centro es un variale en la que debemso llamr por otro
			var mapaAsambleistasGenerales=new google.maps.Map(document.getElementById('mapaGeneral'),//nombre del id
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
            map:mapaAsambleistasGenerales
          });
          <?php endforeach; ?>
        <?php endif; ?>
        //nacionales
        <?php if($candidato2): ?>
         <?php foreach ($candidato2 as $filaTemporal): ?>
          var coordenadaTemporal=new google.maps.LatLng(<?php echo $filaTemporal->latitud_can; ?>, <?php echo $filaTemporal->longitud_can; ?>);
          var marcador=new google.maps.Marker({
              position:coordenadaTemporal,
              title:"<?php echo $filaTemporal->dignidad_can; ?><?php echo $filaTemporal->nombres_can; ?><?php echo $filaTemporal->apellidos_can; ?>",
              icon:"<?php echo base_url(); ?>/assets/images/mar_negro.png",
              map:mapaAsambleistasGenerales
           });
           <?php endforeach; ?>
          <?php endif; ?>
          //provinciales
          <?php if($candidato3): ?>
           <?php foreach ($candidato3 as $filaTemporal): ?>
            var coordenadaTemporal=new google.maps.LatLng(<?php echo $filaTemporal->latitud_can; ?>, <?php echo $filaTemporal->longitud_can; ?>);
            var marcador=new google.maps.Marker({
                position:coordenadaTemporal,
                title:"<?php echo $filaTemporal->dignidad_can; ?><?php echo $filaTemporal->nombres_can; ?><?php echo $filaTemporal->apellidos_can; ?>",
                icon:"<?php echo base_url(); ?>/assets/images/mar_azul.png",
                map:mapaAsambleistasGenerales
             });
             <?php endforeach; ?>
            <?php endif; ?>
		}//cierre de la funcion de int map

		</script>
    <br>
    <br>
