<?php 		
  include 'cabeza.php';
  include 'sesion.php';
  include 'conexion.php';
  include 'menu_superadmi.php';
  $mostrar=$conexion_bd->query("SELECT * FROM usuarios where documento_usuario='$usuario_conectado' ");
  while ($fila = $mostrar->fetch_assoc()) {
    ?>


    <div class="formulario_derecho">
      <!--formulario para actualizar datos personales  -->
      <form class="form-horizontal" action="" method="POST">
        <h2 class="text-center text-success">Cambiar Clave de ingreso</h2>
        <br>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  placeholder="Nombre completo" name="nombre" readonly value="<?php echo $fila['nombre']; ?>">

              <input type="hidden" class="form-control"  placeholder="Nombre completo" name="documento" readonly value="<?php echo $fila['documento_usuario']; ?>">

          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Contraseña</label>
          <div class="col-sm-9">
            <input type="password" class="form-control"  placeholder="Contraseña" name="contrasena" value="<?php echo $fila['contraseña']; ?>">
          </div>
        </div>
       
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <center>
              <input type="submit" class="btn btn-success " value="Actualizar" name="boton_cambiar">
              <input type="reset" class="btn btn-default " value="Cancelar" >
            </center>
          </div>
        </div>
      <?php }?>
    </form>
  </div>
</div>

    <div class="lado_izquierdo">
      
      <img src="img/security.gif" width="25%" style="margin-left: 5%;">

    </div>
<?php 
include 'pie.php';
?>


<?php 

if (isset($_REQUEST['boton_cambiar'])) {


#codigo para validar cambio de datos
include 'conexion.php';

$documento2 = $_POST['documento'];
$clave=$_POST['contrasena'];

$cambio = $conexion_bd->query("UPDATE usuarios SET 
contraseña='$clave'
  WHERE documento_usuario ='$documento2'");
if ($cambio) {
  echo '<script type="text/javascript">
  alert("Los datos se actualizaron");
  </script>';

} else {
  echo '<script type="text/javascript">
  alert("Se encontro un error al actualizar los datos");
  </script>';

}






}


 ?>