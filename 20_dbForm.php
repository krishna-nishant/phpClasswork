<?php include '19_connection.php'; ?>
<html>

<body>
    <div>
        <form action="" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" placeholder="Enter your first name" required>

            <label for="lname">Last Name:</label>
            <input type="text" name="lname" placeholder="Enter your last name" required>

            <label for="age">Age:</label>
            <input type="number" name="age" placeholder="Enter your age" required>

            <input type="submit" name="save_btn" value="Save">
            <button> <a href="21_view.php">View</a></button>
        </form>
    </div>
    <?php
    if (isset($_POST['save_btn'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];

        $query = "INSERT INTO test (fname, lname, age) VALUES ('$fname', '$lname', '$age')";
        $data=mysqli_query($con, $query);
        if ($data) {
            echo "Data saved";
        }else{
            echo "no";
        }
    }
    ?>
</body>

</html>