<?php 

if(isset($_POST["btnprocesar"])){

    require_once 'Consecutivos.php';

    $consecutivos = new Consecutivos();

    $numero = $_POST["txtnumero"];

    $consecutivos->setNumero($numero);

    echo "<br>";
    echo $consecutivos->listarNumeros();

    echo "<br>";
    echo "La sumatoria es " . $consecutivos->sumaConsecutivos();
    

}else{

    echo "Opción incorrecta.";

}


?>