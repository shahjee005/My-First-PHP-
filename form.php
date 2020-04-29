<?php
//If a form has been submittd to thi spage , we can collect the submission
// information using one of the two SUPERGOALS:
// $_Get [array] (if the form was submitted with a GET methord ) 
//$ _POST [array] ( if the form was submitted with a POST methord)
if ( isset ($_POST) && !empty ($_POST))// Making sure SOMETHING was submitted.
 
{
    // Retrieving values from an array (use square brackets and either: the index
    // number or the key name [a string.]) // $_POST is an associative array (uses keys
    // instead of index numbers.) Key-value pair for associative.
    $submittedUsername=$_POST['username'];
    $submittedPassword=$_POST['password'];
}
 ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling </title>
    
</head>
<body>
<h1> PHP Form handeling </h1>
<?php include './includes/navigation.php';?>
<h2> Sign In Form </h2>
<form action= "./form.php" methord = "POST" > <?php // Forms can use GET or POST methords ?>
<label for = " useraname">
Username: 
<input type = "text" name = "username"id= "username">
<label for =" password">
Password:
<input type = "password" name = "password"id= "password">
</label> 
<input type="submit" value="Sign In">
</form>
<pre> <?php var_dump($_POST); ?>
</pre>
</body>
</html>