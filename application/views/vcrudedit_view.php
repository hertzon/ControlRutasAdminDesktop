<?php 
    $this->load->helper('form');
    echo form_open('ccrud_controller/update', 'role="form"'); 
?>
    <h1 class="text-center">Editar Ruta <?php echo $fn;?></h1>
  <div class="form-group">
    <label for="fn">Ruta</label>
    <input type="text" class="form-control" id="fn" name="fn" value="<?php echo $fn ?>">
  </div>
  <div class="form-group ">
    <label for="fn">Monitora</label>
    <input type="text" class="form-control" id="ln" name="ln" value="<?php echo $ln ?>">
  </div>
  <div class="form-group">
    <label for="ag">Colegio</label>
    <input type="text" class="form-control" id="ag" name="ag" value="<?php echo $ag ?>">
  </div>
<!--  <div class="form-group">
    <label for="ad">Address</label>
    <input type="text" class="form-control" id="ad" name="ad" value="<?php echo $ad ?>">
  </div>-->
  <input type="hidden" name="id" value="<?php echo $id ?>" />
  <p>
    <input type="submit" style="width:200px" name="mit" class="btn btn-primary center-block" value="Actualizar">
  </p>
  <p>
    <button type="button" style="width:200px" onclick="location.href='<?php echo site_url('ccrud_controller') ?>'" class="btn btn-success center-block">Volver</button>
  </p>
  
  
</form>
<br>
<?php echo form_close(); ?>
<h1 class="text-center">Listado Estudiantes Ruta <?php echo $fn;?></h1>

<div class="table-responsive">
   <table class="table table-bordered table-hover table-striped">
      <caption></caption>
      <thead>
        <tr>
          <th width="80px">No.</th>
          <th>Nombre de Estudiante</th>
          <th>Codigo</th>
          <th>Curso</th>
          <th>Nombre Acudiente</th>
          <th>Telefono Acudiente</th>
          <!--<th width="80px">Action</th>-->
        </tr>
      </thead>
      <tbody>
      <?php
  if ($data_students == NULL) {
  ?>
  <div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
  <?php
  } else {
  foreach ($data_students as $row) {
  ?>
        <tr>
            <td><?php echo $row->numero; ?></td>
            <td><?php echo $row->nombreEstudiante; ?></td>
            <td><?php echo $row->codigo; ?></td>
            <td><?php echo $row->curso; ?></td>
            <td><?php echo $row->nombreAcudiente; ?></td>
            <td><?php echo $row->telefonoAcudiente; ?></td>
            <td>
           <a href="<?php echo site_url('ccrud_controller/edit_student/' . $row->id.'/'.$id); ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
           <a href="<?php echo site_url('ccrud_controller/delete_student/' . $row->id.'/'.$id); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </td>
      <?php
      }
  }
      ?>
        </tr>
      </tbody>
   </table>
</div>