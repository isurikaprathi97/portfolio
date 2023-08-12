<?php
@include 'functions.php';

session_start();

// Save contact form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectDatabase();

    $name = $_POST['Name'];
    $email = $_POST['email'];
    $message = $_POST['Message'];

    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    
     if ($conn->query($sql) === TRUE) {
        // Successful submission
        echo '<script>alert("Message submitted successfully!"); window.location.href = "index.php";</script>';
        exit();
    } else {
        // Failed submission
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
