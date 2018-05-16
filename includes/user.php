<?php

include "database.php";

function login($email, $password) {
  $password = md5($password);
  $database = connect();
  $query = "SELECT * FROM users WHERE email='$email' and password='$password'";
  $database->query($query);

  if ($result = $database->query($query)) {
    if($row = $result->fetch_assoc()) {
      session_start();
      $_SESSION['user'] = $row;
      return true;
    }
  }

  return false;
}

function user_is_logged_in() {
  if (isset($_SESSION['user'])) {
    return true;
  }

  return false;
}

/**
 *  Registers a new user for the email address if it does
 *  not yet exist. Returns user_id on success and false on
 *  failure.
*/
function register($first_name, $last_name, $email, $password) {
  $database = connect();
  $query = "SELECT ID FROM users WHERE email='$email'";

  if ($result = $database->query($query)) {
    if($result->num_rows > 0) {
      return false;
    }
  }

  $hashed_password = md5($password);

  $stmt = $database->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_password);
  $stmt->execute();

  return login($email, $password);
}

function delete_user(){
  query = "DELETE FROM users WHERE ID = $id"
}
