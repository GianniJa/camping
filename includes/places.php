<?php

include "database.php";

function get_places() {
  $database = connect();
  $query = "SELECT * FROM places";
  $places = array();

  if ($result = $database->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $places[] = $row;
    }
    $result->free();
  }

  return $places;
}

function get_reservations_for_place($place) {
  $query = "SELECT start_date, end_date FROM reservations WHERE place_id=$place";

  
}
