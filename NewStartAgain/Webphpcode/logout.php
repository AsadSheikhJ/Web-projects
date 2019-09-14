<?php
session_start();
session_destroy();
if(isset($_SESSION['logout'])){
echo"<script>window.open('login.php','_self')</script>";

}


?>