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
        <div class="orginal">
            <h2>Primo paragrafo:</h2>
            <p><?php echo $paragraph ?></p>
            <p>Parola da censurare: <strong><?php echo $word ?></strong></p>
            <p>La lunghezza del primo paragrafo è di: <strong><?php echo $length_paragraph ?></strong> caratteri</p>
        </div>
        <div class="paragraph-changed">
            <h2>Secondo paragrafo, con parola censurata:</h2>
            <p><?php echo $replaced_paragraph ?></p>
            <p>La lunghezza del paragrafo con la parola censurata è di: <strong><?php echo $length_replaced_paragraph ?></strong> caratteri</p>
        </div>

        <a href="index.html" class="link-home">Torna indietro</a>

    </div>


</body>

</html>