<?php

$con = new mysqli('localhost', 'root', 'root', 'products', '3306');

if (!$con) {
    die(mysqli_error($con));
}
