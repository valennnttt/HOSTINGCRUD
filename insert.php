<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['location'];
  $conn->query("INSERT INTO users (first_name, last_name, email, phone, location) VALUES ('$first','$last','$email','$phone','$location')");
  header("Location: index.php");
}
?>
<form method="POST">
  First: <input type="text" name="first"><br>
  Last: <input type="text" name="last"><br>
  Email: <input type="email" name="email"><br>
  Phone: <input type="text" name="phone"><br>
  Location: <input type="text" name="location"><br>
  <input type="submit" value="Save">
</form>
