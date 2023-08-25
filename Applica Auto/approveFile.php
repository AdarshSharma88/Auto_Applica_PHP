<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, PUT");

header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Assuming you have a database connection established

    // Update the file record in the database as approved
    $query = "UPDATE users SET approved = 1 WHERE id = $id";
    mysqli_query($con, $query);

    $response = array(
        "status" => "success",
        "message" => "File approved successfully"
    );
} else {
    $response = array(
        "status" => "error",
        "message" => "File ID not provided"
    );
}

echo json_encode($response);
?>