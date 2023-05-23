<?php
session_start();

if (isset($_SESSION['username'])) {
    header('location:../../frontend/admin/index.php');
} else {
    if (!isset($_SESSION['username'])) {
        echo "<script>alert('Silahkan Login Terlebih Dahulu!');</script>";
        header('location:../../frontend/admin/login.php');
    }
}
?>