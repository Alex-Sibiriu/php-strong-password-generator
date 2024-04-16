<?php

  $symbols = ['!', '?', '&', '%', '$', '&lt;', '&gt;', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='];
  $lowercase_letters = str_split('abcdefghijklmnopqrstuvwxyz');
  $uppercase_letters = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
  $numbers = str_split('0123456789');

  $all_characters = array_merge($symbols, $lowercase_letters, $uppercase_letters, $numbers) ;

  $pass_length = $_GET['pass_length'];

  function create_pass($all_characters, $pass_length) {
    $password = '';
    for ($i=0; $i < $pass_length; $i++) { 
      $position = rand(0, count($all_characters) - 1);
      $password .= $all_characters[$position];
      var_dump($password);
    }
    return $password;
  }

  if (isset($pass_length)) {
    create_pass($all_characters, $pass_length);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-warning-subtle">
  
  <div class="container pt-5">
    <form action="index.php" method="GET">
   
      <label for="length">Inserisci la lunghezza deisderata</label>
      <input type="number" id="length" name="pass_length" placeholder="Lunghezza">
      <p></p>
    
     <button type="submit" class="btn btn-outline-warning btn-light fw-bold">Invia</button>
    </form>

    <p><?php echo create_pass($all_characters, $pass_length); ?></p>
  </div>
  

</body>
</html>