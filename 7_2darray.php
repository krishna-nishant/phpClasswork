<?php
$result = array(
    array("A", 7.8, "pass"),
    array("B", 9.8, "pass"),
    array("C", 3.8, "fail")
);
echo $result[0][0] . " CGPA is " . $result[0][1] . " and his status is " . $result[0][2] . "<br>";
echo $result[1][0] . " CGPA is " . $result[1][1] . " and his status is " . $result[1][2] . "<br>";
echo $result[2][0] . " CGPA is " . $result[2][1] . " and his status is " . $result[2][2] . "<br>";
