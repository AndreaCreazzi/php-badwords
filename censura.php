<?php
$text = $_GET["text"];
$badwords = $_GET["badwords"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <h1>Testo base</h1>
        <p><?= $text ?></p>
        <p>il testo contiente tot: <?= strlen($text) ?></p>
        <h1>Badwords</h1>
        <p><?= str_replace($badwords, "***", $text) ?></p>
        <p>il testo contiente tot: <?= strlen($text) ?></p>
    </div>
</body>

</html>