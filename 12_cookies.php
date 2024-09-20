<?php
echo "<h2> COOKIE PHP </h2>";

// Set a cookie
setcookie("name", "Krishna", time() + 86400, ""); // 86400 = 1 day

// Get a cookie
if (isset($_COOKIE["name"])) {
    echo "Hello " . $_COOKIE["name"];
} else {
    echo "Cookie is not set";
}
