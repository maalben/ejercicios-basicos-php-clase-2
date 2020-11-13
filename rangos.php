<?php 

if(isset($_POST["btnevaluar"])){

    $edad = $_POST["txtedad"];

    if( ($edad >= 0) && ($edad <= 10) ){
        echo "Es un niño";
    }else if( ($edad >= 11) && ($edad <= 14) ){
        echo "Es un Pre adolescente";
    }else if( ($edad >= 15) && ($edad <= 18) ){
        echo "Adolescente";
    }else if( ($edad >= 19) && ($edad <= 25) ){
        echo "Joven";
    }else if( ($edad >= 26) && ($edad <= 65) ){
        echo "Adulto";
    }else if($edad > 65 ){
        echo "Es un anciano";
    }else {
        echo "Edad no permitida";
    }

}else{

    echo "Vamos a llamar a la policia por intento de hacking";

}






?>