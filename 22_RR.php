<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Reservation Form</title>
</head>
<body>
    <h2>Railway Reservation Form</h2>
    <form action="submit_reservation.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contact">Contact Number:</label><br>
        <input type="tel" id="contact" name="contact" required><br><br>

        <label for="departure_station">Departure Station:</label><br>
        <input type="text" id="departure_station" name="departure_station" required><br><br>

        <label for="destination_station">Destination Station:</label><br>
        <input type="text" id="destination_station" name="destination_station" required><br><br>

        <label for="date_of_journey">Date of Journey:</label><br>
        <input type="date" id="date_of_journey" name="date_of_journey" required><br><br>

        <label for="class">Class:</label><br>
        <select id="class" name="class" required>
            <option value="First Class">First Class</option>
            <option value="Second Class">Second Class</option>
            <option value="Sleeper Class">Sleeper Class</option>
            <option value="AC Class">AC Class</option>
        </select><br><br>

        <label for="num_passengers">Number of Passengers:</label><br>
        <input type="number" id="num_passengers" name="num_passengers" required><br><br>

        <label for="payment_method">Payment Method:</label><br>
        <select id="payment_method" name="payment_method" required>
            <option value="Credit Card">Credit Card</option>
            <option value="Debit Card">Debit Card</option>
            <option value="Net Banking">Net Banking</option>
            <option value="UPI">UPI</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
