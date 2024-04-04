<?php
// Establish a database connection
$mysqli = new mysqli('localhost', 'kual2865_admin', 'Desember26.', 'kual2865_userdb');

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Number of items per page
$itemsPerPage = isset($_GET['itemsPerPage']) ? $_GET['itemsPerPage'] : 10;

// Query to count the total number of items
$countQuery = "SELECT COUNT(*) AS total FROM Temperature"; // Replace 'YourTableName' with your actual table name

$result = $mysqli->query($countQuery);

if ($result) {
    $row = $result->fetch_assoc();
    $totalItems = $row['total'];
    $totalPages = ceil($totalItems / $itemsPerPage);

    // Return the total number of pages as a JSON response
    echo json_encode($totalPages);

    $result->free_result();
} else {
    echo "Failed to fetch total items.";
}

$mysqli->close();
?>
