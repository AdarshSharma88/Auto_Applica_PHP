<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, PUT");

header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

// Assuming you have a database connection established

// Fetch files data from the database
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);

$response = array();
while ($row = mysqli_fetch_assoc($result)) {
    $file = array(
        "id" => $row['id'],
        "name" => $row['name'],
        "username" => $row['username'],
        "photo" => $row['photo']
    );
    $response[] = $file;
}

echo json_encode($response);
?>