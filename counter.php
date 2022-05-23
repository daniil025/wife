<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="number.css">
    <title>Document</title>
</head>
<body>
    
<?php 
$file = file("count.txt");
$count = implode("", $file);
$count++;
$myfile = fopen("count.txt","w");
fputs($myfile,$count);
fclose($myfile);
?>
<div style="border: 2px solid red;width: 110px;padding: 11px; background: aqua;">
<span>Просмотров: <?=$count ?></span>
</div>


</body>
</html>