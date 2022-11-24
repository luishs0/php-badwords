<?php 
$word = $_GET["word"];
$text = $_GET["text"];
$length = strlen($text);
$new_text = str_replace($word, "***", $text); 
$new_length = strlen($new_text);
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
    
    <!-- <h2> Parola </h2>
    <p> <?php echo $word; ?> </p> -->

    <h3>Paragrafo</h3>
    <p> <?php echo $text; ?> </p>

    <p> Lunghezza: <?php echo $length; ?> </p>

    <h3>Paragrafo senza la parola</h3>
    <p>
        <?php echo $new_text; ?> 
    </p>
    <p>
        Lunghezza: <?php echo $new_length; ?>
    </p>

</body>
</html>