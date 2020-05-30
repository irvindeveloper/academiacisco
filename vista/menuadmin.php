<?php
require('controlador/validaracceso.php');
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Academia Cisco</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="controlador/ctrlroles.php?accion=list">Dar Acceso</a></li>
      <li><a href="controlador/ctrlinstructor.php?accion=list">Ingresar Instructor</a></li>
      <li><a href="controlador/ctrlestudiantes.php?accion=list">Ingresar Estudiantes</a></li>
      <li><a href="controlador/ctrlcertificado.php?accion=list">Ingresar Certificado</a></li>
      <li><a href="vista/reporteccnarourteryswitch.php">Reportes CCNA Rourter y Switch</a></li>
      <li><a href="vista/reporteccnasecurity.php">Reporte CCNA Security</a></li>
      <li><a href="controlador/salir.php">Cerrar Sesion</a></li>
    </ul>
  </div>
</nav>
