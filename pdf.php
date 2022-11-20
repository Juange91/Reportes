
<?php

if (isset($_POST['edificio'])){$edificio= $_POST['edificio'];}
  if (isset($_POST['fecha'])){$fecha= $_POST['fecha'];}
  if (isset($_POST['direccion'])){$direccion= $_POST['direccion'];}
  if (isset($_POST['numero'])){$numero= $_POST['numero'];}          
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DanBombas</title>
   

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
</head>
<body>
  
<div class="containerb">
  <div >
    <h1 >DanBombas Instalaciones </h1>
    <h5 >NIT: 1022419268-8</h5>
    <h6 class="text-end text-primary">
      ¡Reparación e instalación de bombas en general! 
    </h6>
    
<hr>
    <br>
    
  </div>
  <table >
    <tr >
      <th class="text-center" colspan="5"> <h4> REPORTE DE MANTENIMIENTO Y REVISIÓN </h4></th>
  
    </tr>
  <tr>
    <td colspan="3"><strong>EDIFICIO  </strong>
      <?php  echo $mostrar = $_POST['edificio'] ?></td>

      <td colspan="4"><strong>FECHA </strong>
      <?php echo $mostrar = $_POST['fecha'] ?></td>
  </tr>
  <tr>
    <td colspan="3"><strong>DIRECCIÓN </strong>
    <?php echo $mostrar = $_POST['direccion'] ?></td>
    </td>
    <td><strong>N°:</strong>
    <?php echo $mostrar = $_POST['numero'] ?></td>
    </td>
  </tr><br>
  <tr>
    <td ></td>
    <td><strong>EQUIPO PRESIÓN- </strong></td>
    <td> <strong>EQUIPO EYECTOR- </strong></td>
    <td><strong>CONTRAINCENDIO</strong></td>
  </tr>
  <tr>
  <td><strong>MARCA:  </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar= $_POST['marca'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?>
</tr>
  <tr>
    <td><strong>MODELO  </strong></td>
    <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['modelo'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?>
  </tr>
  <tr> <td><strong>ESTADO TABLERO </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['tablero'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?>
  </tr>
  <tr> <td><strong>ESTADO MOTORES </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['e_motor'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?></tr>
  <tr> <td><strong>CANT. MOTORES  </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['c_motor'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?></tr>
  <tr> <td><strong>AMPERAJES  </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['amp'.$i];
  ?>
<td><?php echo $mostrar ?> AMP</td>
  <?php  
}
?></tr>
  <tr> <td><strong>HP MOTORES</strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['hp'.$i];
  ?>
<td><?php echo $mostrar?> HP</td>
  <?php  
}
?>
</tr>
<tr> <td><strong>TANQUE SUBTERRANEO </strong></td>
<?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['tanque'.$i];
  ?>
  <td><?php echo $mostrar ?></td>
  <?php  
}
?></tr>
  <tr> <td><strong>TANQUE BAJO/ALTO </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['tanque_b'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?></tr>
  <tr> <td><strong>PRESOSTATOS </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['pst'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?>
  </tr>
  <tr> <td><strong>VOLTAJE </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['voltaje'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?></tr>
  <tr><td><strong>FLOTADOR ELECTRICO  </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['f_electrico'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?></tr>
  <tr> <td><strong>LECT. MANOMETRO  </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['l_manometro'.$i];
  ?>
<td><?php echo $mostrar?></td>
  <?php  
}
?>
  <tr> <td> <strong>CANT TANQUES HIDRO  </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['c_tanque'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?></tr>

  <tr> <td> <strong>FLOTADOR MECANICO  </strong></td>
  <?php    
  for ($i=1; $i <=3 ; $i++) { 
    $mostrar = $_POST['f_mecanico'.$i];
  ?>
<td><?php echo $mostrar ?></td>
  <?php  
}
?></tr>
    <tr> <td><strong>CANTIDAD DE POZOS  </strong></td> 
    <td></td>
    <td><?php echo $pozo = $_POST['pozo'] ?></td>
    <td></td>
    
  </tr>
    
</table>
<br>
<div >
  <strong>OBSERVACIONES</strong><br><?php echo $mostrar = $_POST['observaciones'] ?><br><br>
  <strong>Firma del técnico:</strong> <?php echo $mostrar = $_POST['tecnico'] ?>
</div>

</div><br><br>
<footer>
  <hr>
<h6 class="text-center">Correo: instalacionesdanbombas@gmail.com <br> Contacto:3223138788 - 3204131947</h6>

</footer>
<script>js/bootstrap.min.js</script>
</body>
</html>
