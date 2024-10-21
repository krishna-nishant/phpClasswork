<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RRL_system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $departure_station = $_POST['departure_station'];
    $destination_station = $_POST['destination_station'];
    $date_of_journey = $_POST['date_of_journey'];
    $class = $_POST['class'];
    $num_passengers = $_POST['num_passengers'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO customer (name, email, contact, departure_station, destination_station, date_of_journey, class, num_passengers, payment_method) 
            VALUES ('$name', '$email', '$contact', '$departure_station', '$destination_station', '$date_of_journey', '$class', '$num_passengers', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

