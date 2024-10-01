<?php
function division($n)
{
    try {
        if ($n <= 0) {
            throw new Exception("Enter the valid number <br>");
        }
        $div = 2 / $n;
        echo "<br> 🤣🥰😶‍🌫️😶‍🌫️😶‍🌫️", $div;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
division(2);
division(0);
division(4);