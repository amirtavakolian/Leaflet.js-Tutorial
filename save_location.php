<?php
if (isset($_POST['lat']) && isset($_POST['lng'])) {
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $timestamp = date('Y-m-d H:i:s');

    $line = $_SERVER['REMOTE_ADDR'] . " => ". "$timestamp - Latitude: $lat, Longitude: $lng" . PHP_EOL;


    file_put_contents("locations.txt", $line, FILE_APPEND);

    echo "Saved!";
} else {
    echo "Missing data!";
}
?>