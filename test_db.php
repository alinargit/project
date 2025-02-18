<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect('localhost', 'root', '', 'shop_db');

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Database connected successfully!<br>";
}

// Test a simple query
$result = mysqli_query($conn, "SHOW TABLES;");
if (!$result) {
    die("❌ Query failed: " . mysqli_error($conn));
} else {
    echo "✅ Tables found in the database:<br>";
    while ($row = mysqli_fetch_array($result)) {
        echo " - " . $row[0] . "<br>";
    }
}

?>
