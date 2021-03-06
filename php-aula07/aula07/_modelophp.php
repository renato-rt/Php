<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n1= $_GET["a"];
        $n2= $_GET["b"];
        $r=$n1>$n2?$n1:$n2;
        Echo "A maior variável é: $r";
    ?>
</div>
</body>
</html>
 