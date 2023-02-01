<?php 

$filepath = "record/".$_GET["name"];
if(isset($filepath)){
    unlink($filepath);
    echo $filepath;

}
// header("Location:area-calc.php");

?>