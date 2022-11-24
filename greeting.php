<?php 
$word = $_GET["word"];
$text = $_GET["text"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2> Word </h2>
    <p> <?php echo $word; ?> </p>

    <h2>Text</h2>
    <p> <?php echo $text; ?> </p>

</body>
</html>