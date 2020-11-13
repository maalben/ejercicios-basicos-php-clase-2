<?php 

if(isset($_POST["btncalcular"])){

    $taller1 = $_POST["txttaller1"];
    $taller2 = $_POST["txttaller2"];
    $cuestionario1 = $_POST["txtcuestionario1"];
    $cuestionario2 = $_POST["txtcuestionario2"];
    $proyecto = $_POST["txtproyectofinal"];
    
    echo "Nota taller 1: " . $taller1;
    echo "<br>";
    echo "Nota taller 2: " . $taller2;
    echo "<br>";
    echo "Cuestionario 1: " . $cuestionario1;
    echo "<br>";
    echo "Cuestionario 2: " . $cuestionario2;
    echo "<br>";
    echo "Proyecto final: " . $proyecto;

    echo "<br><br>";

    $total = ($taller1 * 0.2) + ($taller2 * 0.15) + ($cuestionario1 * 0.22) + ($cuestionario2 * 0.1) + ($proyecto * 0.33);
    echo "La nota definitiva del estudiante es: " . $total;

    echo "<br>";

    if($total >= 3){
        echo "El curso se ha aprobado";
    }else{
        echo "Debes volver a ver el curso";
    }

}else{

    echo "Estas haciendo algo incorrecto. Dios te está viendo.";

}



?>