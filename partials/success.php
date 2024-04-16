<?php

require_once __DIR__ . '/function.php';

session_start();
$password = $_SESSION['new_password'];

?>

<?php require_once __DIR__ . '/head.php'; ?>

<body class="bg-warning-subtle">
  
  <div class="container pt-5">
    <h3 class="fw-bold d-inline-block ">La password generata è:</h3>
    <span class="w-100 rounded-4 bg-info-subtle px-3 py-1 border-danger"><?php echo $password ?></span>
  </div>
  
</body>
</html>