<?php
include 'koneksi.php';

// PROSES DATA SAAT FORM DISUBMIT
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // INSERT DATA KE DATABASE
    $sql = "INSERT INTO contact (fname, email, message)
              VALUES ('$fname', '$email', '$message')";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: contact.php?success=1");
        exit();
    } else {
        header("Location: contact.php?success=0");
    }
}

$koneksi->close();
