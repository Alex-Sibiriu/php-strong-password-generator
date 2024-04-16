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
    }
    return $password;
  }

  if (isset($pass_length)) {
    create_pass($all_characters, $pass_length);
  }

?>