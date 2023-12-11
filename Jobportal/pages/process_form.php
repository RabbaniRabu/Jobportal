<?php
// Connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "rabbani";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    // SQL query to insert data into the table
    $sql = "INSERT INTO data1 (name, email, mobile) VALUES ('$name', '$email', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        // Insertion successful
        echo "Data inserted successfully";
    } else {
        // Error in insertion
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>