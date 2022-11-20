<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DanBombas</title>
   
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
</head>
<body>
  
<div class="container">
  <form action="pdf.php" method="post">
  <table class="table">
    <tr>
      <th class="text-center" colspan="5">REPORTE DE MANTENIMIENTO Y REVISIÓN <br>FORMULARIO PARA RELLENAR</th>
  </tr>
  <tr>
    <td colspan="3"><strong>EDIFICIO:</strong>
      <input type="text" placeholder="Escriba aqui" id="exampleFormControlInput1" name="edificio"required>
      <td colspan="4"><strong>FECHA:</strong>
        <input type="date"  id="exampleFormControlInput1" value="" name="fecha" required>
      </td>
  </tr>
  <tr>
    <td colspan="3"><strong>DIRECCIÓN:</strong>
      <input type="text" placeholder="Escriba aqui" id="exampleFormControlInput1" name="direccion" required>
    </td>
    <td><strong>N°:</strong>
      <input type="number"placeholder="Escriba aqui"id="exampleFormControlInput1" name="numero" required>
    </td>
  </tr>
  <tr>
    <td ></td>
    <td><strong>EQUIPO PRESIÓN:</strong></td>
    <td> <strong>EQUIPO EYECTOR:</strong></td>
    <td><strong>CONTRAINCENDIO:</strong></td>
  </tr>
  <tr> <td><strong>MARCA:</strong></td><td>
    <select aria-label=".form-select-lg example" name="marca1">
      <option value="">Seleccione</option>
  <option value="IHM">IHM</option>
  <option value="BARNES">BARNES</option>
  <option value="BARMESA">BARMESA</option>
  <option value="PEDROLLO">PEDROLLO</option>
  <option value="NINGUNA">NINGUNA</option>
  
  </select></td>
  <td>
    <select aria-label=".form-select-lg example"name="marca2">
      <option value="">Seleccione</option>
  <option value="IHM">IHM</option>
  <option value="BARNES">BARNES</option>
  <option value="BARMESA">BARMESA</option>
  <option value="PEDROLLO">PEDROLLO</option>
  <option value="NINGUNA">NINGUNA</option>
  
  </select></td>
  <td>
    <select  aria-label=".form-select-lg example" name="marca3">
      <option value="">Seleccione</option>
  <option value="IHM">IHM</option>
  <option value="BARNES">BARNES</option>
  <option value="BARMESA">BARMESA</option>
  <option value="PEDROLLO">PEDROLLO</option>
  <option value="NINGUNA">NINGUNA</option>
 
  <br>
  </select></td></tr>
  <tr> <td><strong>MODELO:</strong></td>
  <td><input type="text"  placeholder="Escriba aqui" id="exampleFormControlInput1" name="modelo1" required></td>
  <td><input type="text" placeholder="Escriba aqui" id="exampleFormControlInput1" name="modelo2" required></td>
  <td><input type="text" placeholder="Escriba aqui" id="exampleFormControlInput1" name="modelo3" required></td>
</td></tr>
  <tr> <td><strong>ESTADO TABLERO:</strong></td>
    <td> <select  aria-label=".form-select-lg example" name="tablero1">
      <option value="">Seleccione</option>
      <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="REGULAR">REGULAR</option>
    <option value="MALO">MALO</option>
   
    </select></td>
  <td><select aria-label=".form-select-lg example" name="tablero2">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="REGULAR">REGULAR</option>
    <option value="MALO">MALO</option>
    
    </select></td>
  <td><select aria-label=".form-select-lg example" name="tablero3">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="REGULAR">REGULAR</option>
    <option value="MALO">MALO</option>
    
    </select></td></tr>
  <tr> <td><strong>ESTADO MOTORES:</strong></td>
  <td><select  aria-label=".form-select-lg example" name="e_motor1">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="REGULAR">REGULAR</option>
    <option value="MALO">MALO</option>
    </select></td>
  <td><select  aria-label=".form-select-lg example" name="e_motor2">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="REGULAR">REGULAR</option>
    <option value="MALO">MALO</option>
    </select></td>
  <td><select  aria-label=".form-select-lg example" name="e_motor3">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="REGULAR">REGULAR</option>
    <option value="MALO">MALO</option>
    </select></td></tr>
  <tr> <td><strong>CANT. MOTORES</strong></td>
  <td><input type="number" placeholder="Escriba aqui" id="exampleFormControlInput1" name="c_motor1" required></td>
  <td><input type="number" placeholder="Escriba aqui" id="exampleFormControlInput1" name="c_motor2" required></td>
  <td><input type="number" placeholder="Escriba aqui" id="exampleFormControlInput1" name="c_motor3" required></td></tr>
  <tr> <td><strong>AMPERAJES</strong></td>
  <td><input type="text" placeholder="Escriba aqui"id="exampleFormControlInput1" name="amp1" required></td>
  <td><input type="text" placeholder="Escriba aqui"id="exampleFormControlInput1"  name="amp2" required></td>
  <td><input type="text" placeholder="Escriba aqui" id="exampleFormControlInput1" name="amp3" required></td></tr>
  <tr> <td><strong>HP MOTORES</strong></td>
  <td><input type="number" placeholder="Escriba aqui"id="exampleFormControlInput1" name="hp1" required></td>
  <td><input type="number" placeholder="Escriba aqui"id="exampleFormControlInput1" name="hp2"  required></td>
  <td><input type="number" placeholder="Escriba aqui"id="exampleFormControlInput1" name="hp3" required></td>
</tr>
<tr> <td><strong>TANQUE SUBTERRANEO</strong></td><td>
  <select aria-label=".form-select-lg example" name="tanque1">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
  <option value="SI TIENE">SI TIENE</option>
  
  </select></td>
<td><input type="text" placeholder="Campo vacio" id="exampleFormControlInput1" value="" name="tanque2" readonly></td>
<td><select aria-label=".form-select-lg example" name="tanque3">
  <option value="">Seleccione</option>
  <option value="NO TIENE">NO TIENE</option>
  <option value="SI TIENE">SI TIENE</option>
  
  </select></td></tr>
  <tr> <td><strong>TANQUE BAJO/ALTO</strong></td><td>
    <select aria-label=".form-select-lg example" name="tanque_b1">
      <option value="">Seleccione</option>
      <option value="NO TIENE">NO TIENE</option>
      <option value="SI TIENE">SI TIENE</option>
      
    </select></td>
  <td><input type="text" placeholder="Campo vacio" id="exampleFormControlInput1" value=""  name="tanque_b2"readonly></td>
  <td><select aria-label=".form-select-lg example" name="tanque_b3">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="SI TIENE">SI TIENE</option>
  
    </select></td></tr>
  <tr> <td><strong>PRESOSTATOS</strong></td>
  <td><select aria-label=".form-select-lg example" name="pst1">
    <option value="">Seleccione</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
    <option value="NO TIENE">NO TIENE</option>
    </select></td>
    <td><input type="text" placeholder="Campo vacio" id="exampleFormControlInput1" value="" name="pst2" readonly></td>
  <td>
    <select  aria-label=".form-select-lg example" name="pst3">
      <option value="">Seleccione</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
    <option value="NO TIENE">NO TIENE</option>
    </select>
    </td>
  </tr>
  <tr> <td><strong>VOLTAJE</strong></td><td>
    <select aria-label=".form-select-lg example" name="voltaje1">
      <option value="">Seleccione</option>
    <option value="110V">110v</option>
    <option value="220V">220v</option>
    <option value="360V">360v</option>
    <option value="440V">440v</option>
    </select></td>
  <td><select aria-label=".form-select-lg example" name="voltaje2">
    <option value="">Seleccione</option>
    <option value="110V">110v</option>
    <option value="220V">220v</option>
    <option value="360V">360v</option>
    <option value="440V">440v</option>
    </select></td>
  <td><select aria-label=".form-select-lg example" name="voltaje3">
    <option value="">Seleccione</option>
    <option value="110V">110v</option>
    <option value="220V">220v</option>
    <option value="360V">360v</option>
    <option value="440V">440v</option>
    </select></td></tr>
  <tr><td><strong>FLOTADOR ELECTRICO:</strong></td>
  <td><select  aria-label=".form-select-lg example" name="f_electrico1">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
   
    </select></td>
  <td><select  aria-label=".form-select-lg example" name="f_electrico2">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
    
    </select></td>
  <td><select  aria-label=".form-select-lg example" name="f_electrico3">
    <option value="">Seleccione</option>
    <option value="NO TIENE">NO TIENE</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
    
    </select></td></tr>
  <tr> <td><strong>LECT. MANOMETRO:</strong></td>
    <td><input type="number" placeholder="Escriba aqui"id="exampleFormControlInput1" name="l_manometro1" required></td>
  <td><input type="number" placeholder="Campo vacio" id="exampleFormControlInput1" name="l_manometro2" value="" readonly></td>
  <td><input type="number" placeholder="Escriba aqui" id="exampleFormControlInput1" name="l_manometro3" required></td></tr>
  <tr> <td> <strong>CANT TANQUES HIDRO:</strong></td>
    <td><input type="number" placeholder="Escriba aqui"id="exampleFormControlInput1" name="c_tanque1" required></td>
  <td><input type="number"placeholder="Campo vacio" id="exampleFormControlInput1" name="c_tanque2" value=""readonly></td>
  <td><input type="number" placeholder="Escriba aqui" id="exampleFormControlInput1"name="c_tanque3" required></td></tr>
  <tr><td><strong>TANQUES HIDRO:</strong></td>
  <td><select  aria-label=".form-select-lg example" name="t_hidro1">
    <option value="">Seleccione</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
    <option value="NO TIENE">NO TIENE</option>
    </select></td>
  <td><input type="text" placeholder="Campo vacio"id="exampleFormControlInput1" name="t_hidro2" value="" readonly></td>
  <td><select  aria-label=".form-select-lg example" name="t_hidro3">
    <option value="">Seleccione</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
    <option value="NO TIENE">NO TIENE</option>
    </select></td></tr>

  <tr> <td> <strong>FLOTADOR MECANICO:</strong></td>
  <td><select  aria-label=".form-select-lg example" name="f_mecanico1">
    <option value="">Seleccione</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
    <option value="NO TIENE">NO TIENE</option>
    </select></td>
  <td><input type="text"placeholder="Campo vacio"id="exampleFormControlInput1" name="f_mecanico2" value="" readonly></td>
  <td><select  aria-label=".form-select-lg example" name="f_mecanico3">
    <option value="">Seleccione</option>
    <option value="BUENO">BUENO</option>
    <option value="MALO">MALO</option>
    <option value="NO TIENE">NO TIENE</option>
    </select></td></tr>
    <tr> <td><strong>CANTIDAD DE POZOS:</strong></td> 
    <td><input type="number"placeholder="Campo vacio"id="exampleFormControlInput1" readonly></td>
    <td><input type="number"placeholder="Escriba aqui"id="exampleFormControlInput1"  name="pozo"required></td>
    <td><input type="number" placeholder="Campo vacio"id="exampleFormControlInput1" readonly></td>
  </tr>
   
  </table>
<div class="container w-100">
  <label class="form-label" for="textAreaExample"><strong>OBSERVACIONES</strong></label>
  <textarea class="form-control" id="textarea"  rows="4" name="observaciones"></textarea>
  <label class="form-label" for="textAreaExample"><strong>Firma del técnico</strong></label>
  <input type="text" placeholder="Escriba aqui" id="exampleFormControlInput1" name="tecnico" required>
</div>
<button type="submit">IMPRIMIR</button>
</form>
</div>
<script>js/bootstrap.min.js</script>
</body>
</html>