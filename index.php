<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $x = scandir__DIR__; //any directory
    foreach ($x as $key => $value) {
            if ('.' !== $value && '..' !== $value){
                   echo $value;
       } 
    }
    ?>
    
</body>
</html>