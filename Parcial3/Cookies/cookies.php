<?php
if(isset($_COOKIE['ultimavisita']))
{
    printf("Su ultima visita fue: %s",$_COOKIE['ultimavisita']);

    $fechahoy = date('Y/m/d H:i:s');
    setcookie("ultimavisita",$fechahoy,time() + (7 * 24 * 60 * 60));
}
else{
    printf("No se encontro cookie de ultima visita<br>");

    $fechahoy = date('Y/m/d H:i:s');
    $siguienteSemana = time() + (7 * 24 * 60 * 60);
    $fechaExpira = date('Y/m/d H:i:s',$siguienteSemana).'<br>';

    echo '<br>Fecha de creacion de cookie: <br>'. $fechahoy.'<br>';
    echo '<br>Fecha de Vencimiento de cookie: <br>'. $fechaExpira.'<br>';

    setcookie("ultimavisita",$fechahoy,time() + (7 * 24 * 60 * 60));
}
?>