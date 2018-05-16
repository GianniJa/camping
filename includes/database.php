<?php

if(!function_exists('connect')) {
  function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ochtendgloren";

    return new mysqli($servername, $username, $password, $db);
  }
}
