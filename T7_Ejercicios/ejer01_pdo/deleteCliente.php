<?php
try {
  $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
  
  $dni = $_POST['dni'];

  $conexion->exec("DELETE FROM cliente 
                   WHERE dni='" . $dni . "'");
  echo "<script language='javascript'>
          alert('Cliente eliminado correctamente');
          window.location.href = 'http://localhost:8000/ejers.php?carp=ejer01_pdo&ejer=ejer01_pdo';
        </script>";
} catch (PDOException $e) {
  echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
  die ("Error: " . $e->getMessage());
}
