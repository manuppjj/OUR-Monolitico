<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
    <link href="css/carrousel.css" rel="stylesheet" type="text/css" />
    <link href="css/contactenos.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
<div class="container">
      <header class="superior">
        <div class="logo">
          <img src="img/logo1.png" alt="" />
        </div>
        <nav class="menu">
          <button onclick="location.href='index.
          '">Inicio</button>
          <button onclick="location.href=''"></button>
          <button onclick="location.href=''">¿Quienes somos?</button>
          <button onclick="location.href='contactenos.html'">
            Contactenos
          </button>
        </nav>
      </header>
      <br><br>


<!-- BASE DE DATOS-->

<?php
$dat1=$_POST['Nombre'];
$dat2=$_POST['Gmail'];
$dat3=$_POST['Celular'];
$dat4=$_POST['Asunto'];
$dat5=$_POST['Mensaje'];



$servername = "localhost";
$dbname = "datos";
$username = "root";
$password = "";
// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
$sql = "INSERT INTO registro (Nombre, Gmail, Celular, Asunto, Mensaje) VALUES ('$dat1', '$dat2', '$dat3', '$dat4', '$dat5')";
 // use exec() because no results are returned
 $conn->exec($sql);
 echo "New record created successfully";
 }
catch(PDOException $e)
 {
 echo $sql . "<br>" . $e->getMessage();
 }

$conn = null;
?> 



<!-- TABLA QUE MUESTRA EL DISEÑO -->


<table class="table2"  align="center"  bgcolor="#85C1E9"  >
  <tr>
    <td> TU REGISTRO  <br><br><br>

    Nombre:</font> 
     <?php echo "$dat1"; ?> <br><br><br>

     Gmail: </font> 

     <?php echo "$dat2"; ?><br><br><br>


    
     Celular:</font> 
     <?php echo "$dat3"; ?><br><br><br>


    
     Asunto :</font> 
     <?php echo "$dat4"; ?><br><br><br>



     Mensaje:</font> 
      <?php echo "$dat5"; ?><br>
</td>
    

</tr>
</table>

<br><br><br>

<footer class="pie">
        <div class="niña">
          <img src="img/pieniña.png" alt="" />
        </div>
        <p class="abajo">Mylittleworld@gmail.com</p>
        <div class="niño">
          <img src="img/pieniño.png" alt="" />
        </div>
      </footer>
    </div>
    
</body>
</html>