<?php include '19_connection.php';?>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
    </tr>
    <?php
    $query = "SELECT * FROM test";
    $data = mysqli_query($con, $query);
    $result=mysqli_num_rows($data);
    if($result>0){
        while($row=mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>". htmlspecialchars($row['ID']) . "</td>";
            echo "<td>". htmlspecialchars($row['fName']) . "</td>";
            echo "<td>". htmlspecialchars($row['lName']) . "</td>";
            echo "<td>". htmlspecialchars($row['Age']) . "</td>";
            echo "</tr>";
        }
    }else{
        echo "No record found";
    }
    ?>
</table>