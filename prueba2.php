<html>
<body>

<?php
$dia = date("N")-1;
$hora = date("H")-8;
$horario = array
  (
  array("Gestores Bases Datos","EIE ASI","Administracion Sistemas Operativos","Administracion Sistemas Operativos","Implantacion Aplicaciones Web","Implantacion Aplicaciones Web"),
  array("Implantacion Aplicaciones Web","Seguridad","Servicion red e internet","Servicion red e internet","Gestores Bases Datos","Gestores Bases Datos"),
  array("Seguridad","Seguridad","Administracion Sistemas Operativos","Administracion Sistemas Operativos","EIE ASI","EIE ASI"),
  array("Servicios red e internet","Servicios red e internet","Administracion Sistemas Operativos","Administracion Sistemas Operativos","Implantacion Aplicaciones Web","Implantacion Aplicaciones Web"),
  array("Seguridad","Seguridad","Servicios red e internet","servicios red e internet","Ingles","Ingles"),
  );
  echo "<table border = 1>";
  
  for($arraydia = 0 ; $arraydia <= 4 ; $arraydia++)
  {
    echo "<tr>";
    for($arrayhora = 0 ; $arrayhora <= 5 ; $arrayhora++) {
        if ($arraydia==$dia && $arrayhora==$hora)
            echo "<td style=background-color:green>".$horario[$arraydia][$arrayhora]."</td>";
        else
            echo "<td>".$horario[$arraydia][$arrayhora]."</td>";
         }
    echo "</tr>";
  }
  
  echo "</table>";
  
?>

</body>
</html>