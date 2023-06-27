<center><img src="<?php echo base_url(); ?>/assets/images/cne1.png" alt="" width="600" height="150"></center>
<center><h1><b style="color:red">NUESTROS NUEVOS CANDIDATOS</b></h1></center>
<form class=""
action="<?php echo site_url(); ?>/nuevos/guardar"
method="post">

    <div class="row">
      <div class="col-md-4 text-right">
          <label for="">DIGNIDAD:</label>
      </div>
      <div class="col-md-2">
        <select class"form-control" type="text" name="dignidad_can"  class="form-control input-sm " required><option value="">----DIGNIDAD--</option>
            <option value"PRESIDENTES">PRESIDENTES</option>
            <option value="ASAMBLEISTAS NACIONALES">ASAMBLEISTAS NACIONALES</option>
            <option value"ASAMBLEISTAS PROVINCIALES">ASAMBLEISTAS PROVINCIALES</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
          <label for="">TIPO:</label>
      </div>
      <div class="col-md-2">
        <select class"form-control" type="text" name="tipo_can"  class="form-control input-sm " required><option value="">----TIPO--</option>
            <option value"DERECHA">DERECHA</option>
            <option value="IZQUIERDA">IZQUIERDA</option>
        </select>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Cédula:</label>
          <br>
          <input type="number"
          placeholder="Ingrese la cédula"
          class="form-control"
          name="cedula_can" value="" id="cedula_can">
      </div>
      <div class="col-md-4">
          <label for="">Apellidos:</label>
          <br>
          <input type="text"
          placeholder="Ingrese los apellidos"
          class="form-control"
          name="apellidos_can" value="" id="apellidos_can">
      </div>
      <div class="col-md-4">
        <label for="">Nombres:</label>
        <br>
        <input type="text"
        placeholder="Ingrese los nombres"
        class="form-control"
        name="nombres_can" value="" id="nombres_can">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Movimiento:</label>
          <br>
          <input type="text"
          placeholder="Ingrese su partido de movimiento"
          class="form-control"
          name="movimiento_can" value="" id="movimiento_can">
      </div>
      <div class="col-md-4">
          <label for="">Latitud:</label>
          <br>
          <input type="float"
          placeholder="Ingrese su latitud"
          class="form-control" readonly
          name="latitud_can" value="" id="latitud_can">
      </div>
      <div class="col-md-4">
        <label for="">Longitud:</label>
        <br>
        <input type="float"
        placeholder="Ingrese su longitud"
        class="form-control" readonly
        name="longitud_can" value="" id="longitud_can">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
          <label for="">Propuestas:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la propuesta del candidato"
          class="form-control"
          name="propuestas_can" value="" id="propuestas_can">
      </div>
      <div class="col-md-6">
          <label for="">Compromiso:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el compromiso del candidato"
          class="form-control"
          name="compromiso_can" value="" id="compromiso_can">
      </div>
       <br>
       <br>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="container">
        <div id="mapaUbicacion" style="height:300px; width:100%; border:2px solid black;"></div>
      </div>
    </div>
    <script type="text/javascript">
      function initMap(){
        var centro=new google.maps.LatLng(-1.657587502551175, -78.66720448056122);

        var mapa1=new google.maps.Map(document.getElementById('mapaUbicacion'),
          {
            center:centro,
            zoom:6,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          }
        );
        var marcador=new google.maps.Marker({
          position:centro,
          map:mapa1,
          title:"Seleccione la ubicacion de candidato",
          icon:"<?php echo base_url('/assets/images/map.png'); ?>",
          draggable:true
        });
        google.maps.event.addListener(marcador,'dragend',function(){
          // alert("Termino el dragend");
          document.getElementById('latitud_can').value=this.getPosition().lat();
          document.getElementById('longitud_can').value=this.getPosition().lng();
        });
      }//CIERRE

    </script>
    <div class="row">
        <div class="col-md-12 text-center">
          <br>
          <br>
            <button type="submit" name="button" class="btn btn-primary">Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/nuevos/index" class="btn btn-danger">Cancelar
            </a>
        </div>
    </div>
</form>
<br>
<br>
