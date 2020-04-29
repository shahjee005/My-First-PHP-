
<?php include './includes/datatypes.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
</title>
</head>
<body>
 
<h1><?php
// echo is used to display strings  
 echo $myMessage; ?></h1> 
 <?php include './includes/navigation.php';  ?>
<pre>
    <h1><?php 
    // var_dump is great for seeing what's inside!
    var_dump ( $myOtherArray );?></h1>
    </pre> 
    <h2>Difference Between Single and Double Quoted Strings</h2>
  <h3>Single Quoted</h3>
  <p>
    <?php echo $mySingleQuoteHelloString; ?>
  </p>
  <h3>Double Quoted</h3>
  <p>
    <?php echo $myDoubleQuoteHelloString; ?>
</body>
</html>