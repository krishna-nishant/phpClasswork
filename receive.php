<?php
$name = $_FILES['myFile']['name'];
$tmp_name = $_FILES['myFile']['tmp_name'];
if (move_uploaded_file($tmp_name, $name)) {
    echo "file uploaded";
} else {
    echo "file not uploaded";
}