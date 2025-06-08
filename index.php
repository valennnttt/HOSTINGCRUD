<?php
include 'config.php';
$result = $conn->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD Database</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>CRUD Database</h2>
<a href="insert.php"><button>Add Item</button></a>
<a href="export.php"><button>Download CSV</button></a>
<table border="1">
  <tr>
    <th>ID</th><th>First</th><th>Last</th><th>Email</th><th>Phone</th><th>Location</th><th>Actions</th>
  </tr>
<?php while($row = $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['first_name'] ?></td>
    <td><?= $row['last_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td><?= $row['location'] ?></td>
    <td>
      <a href="update.php?id=<?= $row['id'] ?>"><button>Edit</button></a>
      <a href="delete.php?id=<?= $row['id'] ?>"><button>Del</button></a>
    </td>
  </tr>
<?php endwhile; ?>
</table>
</body>
</html>
