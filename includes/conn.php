<?php
$host = 'localhost';
$user = 'gaurikmi_root';
$pass = 'Tanujn45@';
$db = 'gaurikmi_gaurik';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    echo "Not Connected!";
}
