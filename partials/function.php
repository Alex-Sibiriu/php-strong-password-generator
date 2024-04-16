<?php

  function create_pass($all_characters, $pass_length, $repeat) {
    $password = '';
    for ($i=0; $i < $pass_length; $i++) { 
      $position = rand(0, count($all_characters) - 1);
      if (!$repeat) {
        if (!str_contains($password, $all_characters[$position])) {
          $password .= $all_characters[$position];
        } else {
          $i--;
        }
      } else {
        $password .= $all_characters[$position];
      }
    }
    return $password;
  }
?>