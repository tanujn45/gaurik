<?php
$host = 'localhost';
$user = 'root';
$pass = 'Tanujn45@';
$db = 'gaurik';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    echo "Not Connected!";
}
