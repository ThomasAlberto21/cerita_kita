<?php
session_start();

if (isset($_SESSION['username'])) {
    header('location:update.php');
} else {
    if (!isset($_SESSION['username'])) {
        echo "<script>alert('Silahkan Login Terlebih Dahulu!');</script>";
        header('location:../../frontend/admin/Login.php');
    }
}
?>