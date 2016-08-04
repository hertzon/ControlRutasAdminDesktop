<?php 
    $this->load->helper('form');
    //echo form_open('ccrud_controller/update', 'role="form"'); 
    echo form_open('ccrud_controller/agregaEstudiante', 'role="form"'); 
?>
    <h1 class="text-center">Agregar Estudiante</h1>
  <div class="form-group">
    <label for="fn">Nombre Estudiante</label>
    <input type="text" class="form-control" id="nombre_estudiante" name="nombre_estudiante" >
  </div>
  <div class="form-group ">
    <label for="fn">Ruta</label>
    <input type="text" class="form-control" id="ruta" name="ruta" >
  </div>
  <div class="form-group">
    <label for="ag">Nombre Acudiente</label>
    <input type="text" class="form-control" id="nombre_acudiente" name="nombre_acudiente" >
  </div>
    <div class="form-group">
    <label for="ag">Telefono Acudiente</label>
    <input type="text" class="form-control" id="telefono_acudiente" name="telefono_acudiente" >
  </div>
    <div class="form-group">
    <label for="ag">Correo Acudiente</label>
    <input type="text" class="form-control" id="correo_acudiente" name="correo_acudiente" >
  </div>
    <div class="form-group">
    <label for="ag">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" >
  </div>
    <div class="form-group">
    <label for="ag">Curso</label>
    <input type="text" class="form-control" id="curso" name="curso" >
  </div>
    <div class="form-group">
    <label for="ag">Colegio</label>
    <input type="text" class="form-control" id="colegio" name="colegio" >
  </div>
    <div class="form-group">
    <label for="ag">Paradero AM</label>
    <input type="text" class="form-control" id="paradero_am" name="paradero_am" >
  </div>
    <div class="form-group">
    <label for="ag">Paradero PM</label>
    <input type="text" class="form-control" id="paradero_pm" name="paradero_pm" >
  </div>
    <div class="form-group">
    <label for="ag">Nombre Monitora</label>
    <input type="text" class="form-control" id="nombre_monitora" name="nombre_monitora" >
  </div>
    <div class="form-group">
    <label for="ag">Numero</label>
    <input type="text" class="form-control" id="numero" name="numero" >
  </div>
<!--  <div class="form-group">
    <label for="ad">Address</label>
    <input type="text" class="form-control" id="ad" name="ad" value="<?php echo $ad ?>">
  </div>-->
  <!--<input type="hidden" name="id" value="<?php echo $id ?>" />-->
  <!--<input type="hidden" name="id_ruta" value="<?php echo $id_ruta ?>" />-->
  <p>
    <input type="submit" style="width:200px" name="mit" class="btn btn-primary center-block" value="Guardar">
  </p>
  <p>
    <button type="button" style="width:200px" onclick="location.href='<?php echo site_url('ccrud_controller') ?>'" class="btn btn-success center-block">Volver</button>
  </p>
  
  
</form>
<br>
<?php echo form_close(); ?>





