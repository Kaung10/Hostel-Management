<?php
header('Content-Type: application/json');

// Assuming you have a MySQLi connection $mysqli
// $query = "SELECT series_value FROM some_table"; // Modify according to your query
// $result = $mysqli->query($query);

$seriesData = [6, 55, 13, 33];
// while ($row = $result->fetch_assoc()) {
//     $seriesData[] = (int) $row['series_value']; // Adjust 'series_value' to your actual column name
// }

echo json_encode($seriesData);
?>
