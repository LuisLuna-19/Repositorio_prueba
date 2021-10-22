 <?php 		
  include 'cabeza.php';
  include 'sesion.php';
  include 'conexion.php';
  include 'menu_superadmi.php';
  $mostrar=$conexion_bd->query("SELECT * FROM usuarios where documento_usuario='$documento' ");
  while ($fila = $mostrar->fetch_assoc()) {
    ?>
    <div class="formulario_derecho">
      <!--formulario para actualizar datos personales  -->
      <form class="form-horizontal" action="validar_cambio_datos_personales.php" method="POST">
        <h2 class="text-center text-success">Cambiar Datos Personales</h2>
        <br>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Documento</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  placeholder="Numero de documento"  name="documento" required="" value=" <?php echo $fila['documento_usuario']; ?>" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  placeholder="Nombre completo" name="nombre" required="" value="<?php echo $fila['nombre']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Contraseña</label>
          <div class="col-sm-9">
            <input type="password" class="form-control"  placeholder="Contraseña" name="contrasena" required="" value="<?php echo $fila['contraseña']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Correo</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  placeholder="Correo Electronico" name="correo" required="" value="<?php echo $fila['correo']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Telefono</label>
          <div class="col-sm-9">
            <input type="number" class="form-control"  placeholder="Telefono" name="telefono" required="" value="<?php echo $fila['telefono']; ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <center>
              <input type="submit" class="btn btn-success " value="Registrar" >
              <input type="reset" class="btn btn-default " value="Cancelar" >
            </center>
          </div>
        </div>
      <?php }?>
    </form>
  </div>
</div>
<?php 
include 'pie.php';
?>
</body>
</html>