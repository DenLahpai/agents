<?php
require_once "conn.php";
session_destroy();
header("location: index.php");
?>
