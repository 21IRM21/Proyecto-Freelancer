<!--https://www.youtube.com/watch?v=cka0J41iJY0-->
<?php

include("conection.php");

if ($conn){
    echo"Conexión establecida correctamente";
}

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['nombre']);
            $apellido = trim($_POST['lastname']);
	    $email = trim($_POST['email']);
	    $fechareg = date("Y-m-d"); // Formato adecuado para MySQL
	    $consulta = "INSERT INTO `datos de registro`(`Nombre`, `Apellido`, `email`, `Fecha_Registro`) VALUES ('$name','$apellido','$email','$fechareg')";
	    $resultado = mysqli_query($conn,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>



