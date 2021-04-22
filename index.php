<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php!!</title>
</head>
<body>
    <?php 
      $string = "devi andare a fnclo";
      $Badword = str_replace("fnclo", "******", $string);

      echo $string;
      echo " ";
      echo $Badword;

    ?>
</body>
</html>