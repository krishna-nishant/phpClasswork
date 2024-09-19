<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables and set to empty strings to avoid undefined index notices
    $name = $email = $phone = $dob = $message = "";

    // Validate and sanitize input data
    if (isset($_POST["name"])) {
        $name = htmlspecialchars(trim($_POST["name"]));
    }
    
    if (isset($_POST["email"])) {
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = "Invalid email format";
        }
    }
    
    if (isset($_POST["phone"])) {
        $phone = htmlspecialchars(trim($_POST["phone"]));
    }
    
    if (isset($_POST["dob"])) {
        $dob = htmlspecialchars(trim($_POST["dob"]));
    }
    
    if (isset($_POST["message"])) {
        $message = htmlspecialchars(trim($_POST["message"]));
    }

    // Output sanitized and validated data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone Number: " . $phone . "<br>";
    echo "Date of Birth: " . $dob . "<br>";
    echo "Message: " . nl2br($message) . "<br>";
} else {
    echo "No data submitted.";
}
?>