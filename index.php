<?php 
$myMessege= 'My First PHP';

//Data types 
//String 
$myString= 'hellow , World!';
// integer 
$myInteger= 50;
//Float 
$myFloat=20.02;
//Boolean
$myBoolTrue=TRUE;
$myboolFalse = false;
//Null 
$myNull= NULL;
//Object
$myobject= new stdClass();
//Array 
$myArray =['First item ', 2, 'third item'];
$myOtherArray= array (
    $myString,
    $myInteger,
    $myobject,
    $myFloat,
    $myNull,
    $myboolFalse,
    $myBoolTrue,
);

//Strings 
$string1= 'hello , my name is ';
$string2='Michel jackson';
// Strings can be concatenated by ising "." ("+" is reserved for addition )
$concattedString= $string1.$string2;
// Difference between single and double quotes.
$mySingleQuoteHelloString = 'Hi there! My name is $string2';
// Double quotes are PARSED. PHP checks for variable names to echo out.
$myDoubleQuoteHelloString = "Howdy there! My name is $string2";
//This is more specific , and would be good if you have overlaping variable names.
$myDoubleQuoteHelloString2= " Howday there! My name is {$string2}"; 

?><!DOCTYPE html>
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