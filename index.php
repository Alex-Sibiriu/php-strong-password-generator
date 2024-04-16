<?php

require_once __DIR__ . '/partials/function.php';

require_once __DIR__ . '/partials/head.php';

?>

<body class="bg-warning-subtle">
  
  <div class="container pt-5">
    <form action="index.php" method="GET">
   
      <label for="length">Inserisci la lunghezza desiderata</label>
      <input type="number" id="length" name="pass_length" placeholder="Lunghezza">
      <p></p>
    
     <button type="submit" class="btn btn-outline-warning btn-light fw-bold">Invia</button>
    </form>

    <p><?php echo create_pass($all_characters, $pass_length); ?></p>
  </div>
  

</body>
</html>