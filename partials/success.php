<?php

require_once __DIR__ . '/function.php';

session_start();
$password = $_SESSION['new_password'];

?>

<?php require_once __DIR__ . '/head.php'; ?>

<body class="bg-warning-subtle">
  
  <div class="container pt-5">
    <p>La password generata è: <?php echo $password ?></p>
  </div>
  
</body>
</html>