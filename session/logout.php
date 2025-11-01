<?php
session_start();
session_destroy(); // সব সেশন ডিলিট
header("Location: login.php");
exit;
?>