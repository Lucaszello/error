<?php

$folderName = "record";

if(isset($_POST["area-calc"])){
        $width = $_POST["width"];
    $bredth = $_POST["bredth"];
    $area = $width * $bredth;

}


$json = json_encode(["width" => $width,"bredth" => $bredth,"area" => $area]);
if(!is_dir($folderName))
    mkdir($folderName);

    $fileName = $folderName."/".uniqid().".json";
    $f = fopen($fileName,"w");
   fwrite($f,$json);
    fclose($f);


?>

