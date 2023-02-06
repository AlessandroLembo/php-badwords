<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words results</title>

    <link rel="stylesheet" href="word.css">
</head>
<body>
    <div class="container">
         <p><? echo $paragraph ?></p>
         <h2><? echo $word ?></h2>
    </div>
    
    
</body>
</html>