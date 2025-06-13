<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $massage = $_POST['message'];

  $addressee = "Benja30mccollum@gmail.com";
  $matter = "New message of the web pages";
  $contend = "Name: $name\nEmail: $email\nMessage:\n$message";

  mail($addressee, $matter, $contend);
  header("Location: thanks.html");
  exit();
}
?>