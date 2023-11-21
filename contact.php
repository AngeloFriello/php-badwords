<?php

$text = 'mirko e un sciocco';

$replace_word = $_POST['replace_word'];

$replace = '***';

$censure = str_replace($replace_word, $replace, $text);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina contatti</title>
</head>
<body>

  <p><?php echo $text?></p>

  <p>il testo e lungo <?php echo strlen($text) ?> caratteri</p>

  <p><?php echo $censure?></p>

  <p>il testo e lungo <?php echo strlen($censure) ?> caratteri</p>

</body>
</html>

