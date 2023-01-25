<?php


function dias($num){
if($num=="1"){
    echo "El día es Lunes";
}elseif($num=="2"){
    echo "El día es Martes";
}elseif($num=="3"){
    echo "El día es Miercoles";
}elseif($num=="4"){
    echo "El día es Jueves";
}elseif($num=="5"){
    echo "El día es Viernes";
}elseif($num=="6"){
    echo "El día es Sabado";
}elseif($num=="7"){
    echo "El día es Domingo";
}
}


$numero = rand(1,7);
echo " y el numero aleatorio es: ".$numero." ".dias($numero);
?>
