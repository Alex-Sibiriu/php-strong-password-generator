<?php
session_start();

require_once __DIR__ . '/partials/function.php';

$symbols = (isset($_GET['is_symbols'])) ? ['!', '?', '&', '%', '$', '&lt;', '&gt;', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='] : [];
$lowercase_letters = (isset($_GET['is_letters'])) ? str_split('abcdefghijklmnopqrstuvwxyz') : [];
$uppercase_letters = (isset($_GET['is_letters'])) ? str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ') : [];
$numbers = (isset($_GET['is_numbers'])) ? str_split('0123456789') : [];

$all_characters = array_merge($symbols, $lowercase_letters, $uppercase_letters, $numbers) ;

$pass_length = isset($_GET['pass_length']) ? $_GET['pass_length'] : 0;

$max_length = 24;

$repeat = isset($_GET['repeat']) ? true : false;

if ($pass_length > $max_length) {
  $pass_length = $max_length;
}

if ($pass_length > count($all_characters) && !$repeat ) {
  $pass_length = count($all_characters);
}

if ($pass_length > 0) {
  $_SESSION['new_password'] = create_pass($all_characters, $pass_length, $repeat);
  header('Location: ./partials/success.php');
} 

?>

<?php require_once __DIR__ . '/partials/head.php'; ?>

<body class="bg-warning-subtle">
  
  <div class="container pt-5">
    <form action="index.php" method="GET">
   
      <label for="length">Inserisci la lunghezza desiderata</label>
      <input type="number" id="length" name="pass_length" placeholder="Lunghezza">
    
      <button type="submit" class="btn btn-outline-warning btn-light fw-bold">Invia</button>

      <div class="d-flex pt-3">

        <!-- CHECKS -->
        <div class="me-5">
          <h5>Caratteri utilizzati</h5>
          <div class="form-check">
            <input class="form-check-input" name="is_letters" type="checkbox" value="1" id="isLetters" checked>
            <label class="form-check-label" for="isLetters">
              Lettere
            </label>
          </div>
  
          <div class="form-check">
            <input class="form-check-input" name="is_numbers" type="checkbox" value="1" id="isNumbers" checked>
            <label class="form-check-label" for="isNumbers">
              Numeri
            </label>
          </div>
  
          <div class="form-check">
            <input class="form-check-input" name="is_symbols" type="checkbox" value="1" id="isSymbols" checked>
            <label class="form-check-label" for="isSymbols">
              Simboli
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" name="repeat" type="checkbox" value="true" id="repeat" >
            <label class="form-check-label" for="repeat">
              Consenti Ripetizioni
            </label>
          </div>
        </div>
        <!-- /CHECKS -->
  
      </div>

    </form>
  </div>
  

</body>
</html>