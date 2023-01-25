<?php
    /*    
    header("content-Type: application/json");
    
    $data = json_decode(file_get_contents("php://input"));
    $_SESSION["NOMBRE"] = $data->nombre;
    $_SESSION["PASS"] = $data->pass;
    */
    //echo ($_POST['user']);
    require_once("../model/Usuario.php");
    //header("content-Type: application/json");
    
    session_start();
    $nombre = $_POST['user'];
    $contra = $_POST['pass'];
    //$_SESSION["NOMBRE"] = $nombre;
    //$_SESSION["PASS"] = $contra;

    $usuario = new usuarioModel();
    $usuario->setNombre($nombre);
    $arr = $usuario->buscarUsuario();
    //echo $arr[0][1];

    if( $arr[0][1] == null){
        echo "<SCRIPT>alert('"."El usurio: ".$_POST["user"]." no existe. verifique el ingreso"."');</SCRIPT>";
        echo "<SCRIPT>window.open('../index.php','_self');</SCRIPT>";
        return false;
    }else{
        $_SESSION["NOMBRE"] = $nombre;
        $_SESSION["PASS"] = $contra;    
    }

    if($_SESSION["NOMBRE"] == $arr[0][1] && $_SESSION["PASS"] ==  $arr[0][2] ){
        //echo "<SCRIPT>window.open('../../../base1/index.php','_self');</SCRIPT>";
        echo "<SCRIPT>window.open('../html/index.php','_self');</SCRIPT>";
        session_destroy();
        
    }elseif($_SESSION["NOMBRE"] ==  $arr[0][1] && $_SESSION["NOMBRE"] !=  $arr[0][2]){
        echo "<SCRIPT>alert('contraseña incorrecta');</SCRIPT>";
        echo "<SCRIPT>window.open('../index.php','_self');</SCRIPT>";
        session_destroy();
    }else{
        echo "<SCRIPT>alert('".$_POST["user"]." no existe"."');</SCRIPT>";
       // echo "<SCRIPT>alert('".$arr[0]."');</SCRIPT>";
        session_destroy();
    }



    ?>