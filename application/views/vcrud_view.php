

<div class="table-responsive">
   <table class="table table-bordered table-hover table-striped ">
       <h2 class="text-center">Listado Rutas Escolares Colegio Cafam-Renetur</h2>
       
      <thead>
        <tr>
          
          <th>Ruta</th>
          <th>Nombre Monitora</th>
          <th>Colegio</th>
          <th width="80px">Acciones</th>
          <!--<th>Last Name</th>
          <th>Age</th>
          <th>Address</th>
          -->
        </tr>
      </thead>
      <tbody>
      <?php
  if ($data_get == NULL) {
  ?>
  <div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
  <?php
  } else {
  foreach ($data_get as $row) {
  ?>
        <tr>
            
            <td><?php echo $row->nombre_ruta; ?></td>
            <td><?php echo $row->nombre_administradora; ?></td>
            <td><?php echo $row->colegio; ?></td>

            <td>
             <a href="<?php echo site_url('ccrud_controller/edit/' . $row->id); ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="<?php echo site_url('ccrud_controller/delete_controller/' . $row->id); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
      <?php
      }
  }
      ?>
        </tr>
      </tbody>
   </table>
</div>
<p>
<a href="<?php echo site_url('ccrud_controller/add') ?>" style="width:200px" class="btn btn-primary center-block" >Agregar Ruta</a>
</p>
<p>
<a href="<?php echo site_url('ccrud_controller/new_student') ?>" style="width:200px" class="btn btn-primary center-block" >Agregar Estudiante</a>
</p>
<p>
    <a href="<?php echo site_url('ccrud_controller/salir') ?>" style="width: 200px" class="btn btn-danger center-block">Salir</a>
</p>
