<?php
  session_start(); // BEFORE ANY OUTPUT, YOU MUST DECLARE IF YOU'D LIKE TO USE SESSION.
  // Let's check if our SESSION entry exists...
  if ( !isset( $_SESSION['interests'] ) )
  { // If it DOESN'T exist, let's make a default value (this way we can array_push to it later!)
    $_SESSION['interests'] = array();
  }
  $message = 'Welcome to the website, please log in.';
  // If a form has been submitted to this page, we can collect the submission
  // information using one of two SUPERGLOBALS:
  // $_GET [array] (if the form was submitted with a GET method.)
  // $_POST [array] (if the form was submitted with a POST method.)
  if ( isset( $_POST ) && !empty( $_POST ) ) // Making sure SOMETHING was submitted.
  {
    // Retrieving values from an array (use square brackets and either: the index
    // number or the key name [a string.]) // $_POST is an associative array (uses keys
    // instead of index numbers.) Key-value pair for associative.
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];
    // Expected username and password (hardcoded.)
    $username = 'Syed';
    $password = 'mypass';
    // Successful login...
    if ( ( $username === $submittedUsername ) && ( $password === $submittedPassword ) )
    {
      $message = 'Hello, ' . $username . ', thank you for logging in!';
      // We are adding a new element to an array using the array_push function.
      // The first argument is the array, the second is the element/value we are adding.
      array_push( $_SESSION['interests'], $_POST['interest'] );
    }
    // Unsuccessful login...
    else
    {
      $message = 'Uh oh! Please try again, your username and/or password were incorrect!';
    }
  }
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Handling</title>
</head>
<body>
  <h1>PHP Form Handling</h1>
  <?php include './includes/navigation.php'; ?>
  <h2>Sign In Form</h2>
  <p>
    <?php echo $message; // Output our "sign-in" related message. ?>
  </p>
  <form action="./form.php" method="POST"><?php // Forms can use GET or POST method. ?>
    <label for="username">
      Username:
      <input type="text" name="username" id="username">
    </label>
    <label for="password">
      Password:
      <input type="password" name="password" id="password">
    </label>
    <label for="interest">
      Add an interest:
      <input type="text" name="interest" id="interest">
    </label>
    <input type="submit" value="Sign In">
  </form>
  <pre>
    <?php var_dump( $_POST ); ?>
  </pre>
  <pre>
    <?php var_dump( $_SESSION ); ?>
  </pre>
</body>
</html>