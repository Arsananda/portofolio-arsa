<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "arsanandaaa@gmail.com"; 
    $subject = "Pesan Baru dari Portofolio Mahasiswa";
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>