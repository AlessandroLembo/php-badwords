<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
$length_paragraph = strlen($paragraph);

$replaced_paragraph = str_replace($word, '***', $paragraph);
$length_replaced_paragraph = strlen($replaced_paragraph);

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
         <h2>Primo paragrafo:</h2>
         <p><? echo $paragraph ?></p>
         <h4>Parola da censurare: <? echo $word ?></h4>
         <h4>La lunghezza del primo paragrafo è di: <?echo $length_paragraph ?> caratteri</h4>
         
         <h2>Secondo paragrafo, con parola censurata:</h2>
         <p><? echo $replaced_paragraph ?></p>
         <h4>La lunghezza del paragrafo con la parola censurata è di: <? echo $length_replaced_paragraph?> caratteri</h4>
    
        </div>
    
    
</body>
</html>