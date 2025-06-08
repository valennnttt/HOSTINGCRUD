<?php
include 'config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['location'];
  $conn->query("UPDATE users SET first_name='$first', last_name='$last', email='$email', phone='$phone', location='$location' WHERE id=$id");
  header("Location: index.php");
}
?>
<form method="POST">
  First: <input type="text" name="first" value="<?= $row['first_name'] ?>"><br>
  Last: <input type="text" name="last" value="<?= $row['last_name'] ?>"><br>
  Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br>
  Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>"><br>
  Location: <input type="text" name="location" value="<?= $row['location'] ?>"><br>
  <input type="submit" value="Update">
</form>
