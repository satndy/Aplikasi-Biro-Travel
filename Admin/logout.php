<?php
session_start();
session_destroy();
header("location:http://localhost:81/Travel%20Blitar/admin/index.php");
?>