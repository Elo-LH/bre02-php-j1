<?php
$title = "This is the title of the article";
$content = "Ths is the content of the article";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Exercice 1 echo</title>
</head>

<body>
  <article>
    <h1>
      <?= $title ?>
    </h1>
    <p>
      <?= $content ?>
    </p>
  </article>
</body>

</html>