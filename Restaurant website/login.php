<?php

$connection = new mysqli('localhost', 'root', '', 'users');
if (isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query($connection, "insert into clients (name ,subjec,email,message)
                     value('$name','$phone','$email','$message')");
    echo "your message sent successefully";
}
