<?php
include 'config.php';
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=export.csv');
$output = fopen("php://output", "w");
fputcsv($output, ['ID', 'First', 'Last', 'Email', 'Phone', 'Location']);
$rows = $conn->query("SELECT * FROM users");
while ($row = $rows->fetch_assoc()) {
  fputcsv($output, $row);
}
fclose($output);
exit;
?>
