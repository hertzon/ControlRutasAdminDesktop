<?php 
    $this->load->helper('form');

    echo form_open('ccrud_controller/save', 'role="form"'); 
?>
    <div class="form-group">
        <h2>Agregar Ruta</h2>
        <label for="fn">Nombre Ruta</label>
        <input type="text" class="form-control" id="fn" name="fn">
    </div>
    <div class="form-group">
        <label for="fn">Nombre Monitora</label>
        <input type="text" class="form-control" id="ln" name="ln">
    </div>
    <div class="form-group">
        <label for="ag">Colegio</label>
        <input type="text" class="form-control" id="ag" name="ag">
    </div>
<!--
    <div class="form-group">
        <label for="ad">Address</label>
        <input type="text" class="form-control" id="ad" name="ad">
    </div>
-->
<p>
    <input type="submit" name="mit" class="btn btn-primary  center-block" value="Enviar" style="width:200px">
</p>
<p>
    <button type="button" style="width:200px" onclick="location.href='<?php echo site_url('ccrud_controller') ?>'" class="btn btn-success  center-block">Volver</button>
</p>
    
    
    </form>
<?php echo form_close(); ?>
