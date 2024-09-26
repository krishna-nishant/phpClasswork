<?php
$check = mail("ronitsharma3870@gmail.com", "bhai tu chutiya h", "muh me lele", "From:nishantkrishna2005@gmail.com");
if ($check) {
    echo "email sent";
} else {
    echo "email not sent";
}
?>