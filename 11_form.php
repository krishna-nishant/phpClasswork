<?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch the input data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $skills = $_POST["skills"]; // This will be an array of selected skills
    $phone = $_POST["phone"];

    // Validate the input data
    $errors = array();

    // Validate name
    if (empty($name)) {
      $errors[] = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $errors[] = "Invalid name format";
    }

    // Validate email
    if (empty($email)) {
      $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid email format";
    }

    // Validate skills
    if (empty($skills)) {
      $errors[] = "At least one skill is required";
    }

    // Validate phone number
    if (empty($phone)) {
      $errors[] = "Phone number is required";
    } elseif (!preg_match("/^[0-9]{10,12}$/", $phone)) {
      $errors[] = "Invalid phone number format";
    }

    // If there are no errors, print the input data
    if (empty($errors)) {
      echo "<h2>Input Data:</h2>";
      echo "<p>Name: $name</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Skills: " . implode(', ', $skills) . "</p>";
      echo "<p>Phone Number: $phone</p>";
    } else {
      // If there are errors, print them
      echo "<h2>Errors:</h2>";
      foreach ($errors as $error) {
        echo "<p>$error</p>";
      }
    }
  }
?>



<!-- <?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Fetch the input data
    $name = $_GET["name"];
    $email = $_GET["email"];
    $skills = $_GET["skills"]; // This will be an array of selected skills
    $phone = $_GET["phone"];

    // Validate the input data
    $errors = array();

    // Validate name
    if (empty($name)) {
      $errors[] = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $errors[] = "Invalid name format";
    }

    // Validate email
    if (empty($email)) {
      $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid email format";
    }

    // Validate skills
    if (empty($skills)) {
      $errors[] = "At least one skill is required";
    }

    // Validate phone number
    if (empty($phone)) {
      $errors[] = "Phone number is required";
    } elseif (!preg_match("/^[0-9]{10,12}$/", $phone)) {
      $errors[] = "Invalid phone number format";
    }

    // If there are no errors, print the input data
    if (empty($errors)) {
      echo "<h2>Input Data:</h2>";
      echo "<p>Name: $name</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Skills: " . implode(', ', $skills) . "</p>";
      echo "<p>Phone Number: $phone</p>";
    } else {
      // If there are errors, print them
      echo "<h2>Errors:</h2>";
      foreach ($errors as $error) {
        echo "<p>$error</p>";
      }
    }
  }
?> -->