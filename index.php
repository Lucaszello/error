<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    
   <form action="" method="post">
   <div class=" container py-4">
        <div class=" row align-items-end">
            <div class=" col">
                <label for="" class=" form-label">Width</label>
                <input type="number" name="width" class=" form-control">
            </div>
            <div class=" col">
                <label for="" class=" form-label">bredth</label>
                <input type="number" name="bredth" class=" form-control">
            </div>
            <div class=" col">
                <button name="area-calc" class=" btn btn-primary">Calculate</button>
            </div>
        </div>
    </div>
   </form>

   <?php require_once "./area.php"   ?>
    <?php 
    if(is_dir($folderName)){
        $record = array_filter(scandir($folderName),fn ($r) => $r != "." && $r != "..");      
    }
    ?>
   <table class=" table border">
    <thead>
        <tr>
            <th>
                width
            </th>
            <th>
                height
            </th>
            <th>
                area
            </th>
            <th>
                control
            </th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($record as $re) :
        $currentFile = $folderName."/".$re;
        $f = fopen($currentFile,"r");
        $j = fread($f,filesize($currentFile));
        $arr = json_decode($j,true);
        fclose($f)
        ?>
        <tr>
            <td><?= $arr["width"] ?> ft</td>
            <td><?= $arr["bredth"] ?> ft</td>
            <td><?= $arr["area"] ?> ft<sup>2</sup></td>
            <td><a href="./del.php?name=<?= $re ?>" class=" btn btn-danger btn-sm">Del</a></td>
        </tr>
        <?php endforeach  ?>
    </tbody>
   </table>

</body>

</html>