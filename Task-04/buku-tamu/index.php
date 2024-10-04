<?php
session_start(); // Memulai sesi

/*
    // Mengecek apakah user sudah login sebagai admin
    if (!isset($_SESSION['admin'])) {
        header("Location: login.php"); // Jika belum login, redirect ke halaman login
        exit();
    }
*/

require_once 'controllers/GuestController.php';

$guestController = new GuestController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $guestController->create($name, $comment);
    header("Location: index.php");
}

$guests = $guestController->readAll();

include 'views/guest_form.php';
include 'views/guest_list.php';
?>