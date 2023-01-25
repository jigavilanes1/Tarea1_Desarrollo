<?php

$contrase = $_GET["contrase"];
if($contrase == "1"){
    header("Location: newpage1.html");

}elseif($contrase == "2"){
    header("Location: newpage2.html");
} else {
    header("Location: sorry.html");
}
?>