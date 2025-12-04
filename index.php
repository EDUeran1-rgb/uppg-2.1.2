<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $lista =["ett","två","tre","fyra","fem","sex","sju","åtta","nio","tio"];
        for($i=0; $i<count($lista);$i++){
            echo "rad ".$lista[$i]."<br>";
        };
    ?>
</body>
</html>