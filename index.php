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
 $text= "bruttissimi insulti, veramente tanti bruttisimi insulti";
?> 
  <h1>IL PARAGRAFO E' L'UNGO: <?php echo strlen($text); ?> caratteri</h1>
  <p><?php echo $text; ?></p>

<?php
$parolaccia = $_GET["parolaccia"];
$text= str_replace($parolaccia, "***", $text);
?>
  <h1>IL PARAGRAFO E' L'UNGO: <?php echo strlen($text); ?> caratteri</h1>
  <p><?php echo $text; ?></p>





  

  
   
     

</body>
</html>