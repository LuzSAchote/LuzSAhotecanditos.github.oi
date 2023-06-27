<div class="row">
    <div class="col-md-8">
    <h1><b style="color:red">LISTADO DE NUESTROS CANDIDATOS</b></h1>
    </div>
    <div class="col-md-4"> <br>
        <a href="<?php echo site_url('Nuevos/candidatos'); ?>" class="btn btn-primary">
            <i class="glyphicon glyphicon-plus"></i>
            Agregar Candidato
       </a>
    </div>
</div>

<br>
<?php if ($nuevos): ?>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>DIGNIDAD</th>
                <th>TIPO</th>
                <th>CEDULA</th>
                <th>APELLIDOS</th>
                <th>NOMBRES</th>
                <th>MOVIMIENTO</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>PROPUESTAS</th>
                <th>COMPROMISO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nuevos->result() as $filaTemporal): ?>
                <tr>
                    <td><?php echo $filaTemporal->id_can;?></td>
                    <td><?php echo $filaTemporal->dignidad_can;?></td>
                    <td><?php echo $filaTemporal->tipo_can;?></td>
                    <td><?php echo $filaTemporal->cedula_can;?></td>
                    <td><?php echo $filaTemporal->apellidos_can;?></td>
                    <td><?php echo $filaTemporal->nombres_can;?></td>
                    <td><?php echo $filaTemporal->movimiento_can;?></td>
                    <td><?php echo $filaTemporal->latitud_can;?></td>
                    <td><?php echo $filaTemporal->longitud_can;?></td>
                    <td><?php echo $filaTemporal->propuestas_can;?></td>
                    <td><?php echo $filaTemporal->compromiso_can;?></td>
                    <!-- para poner un lapz dentro de un forech para poder editar -->
                    <td class="text-center">
                        <a href="#" title="Editar Candidato" style="color:black">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>

                        &nbsp;
                        <a href="<?php echo site_url(); ?>/nuevos/eliminar/<?php echo $filaTemporal->id_can;?>" title="Eliminar Candidato" onclick="return confirm('Esta seguro de eliminar al candidato');"
                        style="color:red">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <h1><b style="color:green">No hay candidatos</b></h1>
    <?php endif; ?>
<br>
<br>
