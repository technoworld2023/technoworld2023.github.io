<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phptb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // // Sanitize and get form data
    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    // // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // // $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    // // $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    // // $message = mysqli_real_escape_string($conn, $_POST['message']);

    // // Insert data into database
    // // $sql = "INSERT INTO contact_form (name, email, phone, subject, message)
    // //         VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    // $sql = "INSERT INTO contactdata (name) VALUES ('$name')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "Record saved successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();
}
?>