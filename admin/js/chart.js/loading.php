<?php

$query = "
    SELECT 
    SUM(CASE WHEN seater = available THEN 1 ELSE 0 END) AS free,
    SUM(CASE WHEN (available = 1 AND seater = 2) OR (available = 2 AND seater = 3) THEN 1 ELSE 0 END) AS seat1,
    SUM(CASE WHEN available = 2 AND seater = 3 THEN 1 ELSE 0 END) AS seat2,
    SUM(CASE WHEN available = 0 THEN 1 ELSE 0 END) AS full
FROM (
    SELECT seater, available FROM alinkar
    UNION ALL
    SELECT seater, available FROM mudra
) AS combined";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($free, $seat1, $seat2, $full);
    $stmt->fetch();
    $stmt->close();
} else {
    // Handle errors if query preparation fails
    die("Error in query preparation: " . $mysqli->error);
}



// $free = 50; $seat1= 100; $seat2= 50; $full = 100; // <--- fake data for beautiful

$seriesData = [(int)$free,(int)$seat1,(int)$seat2,(int)$full];

//--------------- for Semester graph----------------

$query = "
    SELECT
        SUM(CASE WHEN semester = 'Semester 1' THEN 1 ELSE 0 END) AS semester1,
        SUM(CASE WHEN semester = 'Semester 2' THEN 1 ELSE 0 END) AS semester2,
        SUM(CASE WHEN semester = 'Semester 3' THEN 1 ELSE 0 END) AS semester3,
        SUM(CASE WHEN semester = 'Semester 4' THEN 1 ELSE 0 END) AS semester4,
        SUM(CASE WHEN semester = 'Semester 5' THEN 1 ELSE 0 END) AS semester5,
        SUM(CASE WHEN semester = 'Semester 6' THEN 1 ELSE 0 END) AS semester6,
        SUM(CASE WHEN semester = 'Semester 7' THEN 1 ELSE 0 END) AS semester7,
        SUM(CASE WHEN semester = 'Semester 8' THEN 1 ELSE 0 END) AS semester8,
        SUM(CASE WHEN semester = 'Semester 9' THEN 1 ELSE 0 END) AS semester9,
        SUM(CASE WHEN semester = 'Semester 10' THEN 1 ELSE 0 END) AS semester10
    FROM roomregistration;
";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($semester1, $semester2, $semester3, $semester4, $semester5, $semester6, $semester7, $semester8, $semester9, $semester10);
    $stmt->fetch();
    $stmt->close();
} else {
    die("Error in query preparation: " . $mysqli->error);
}

$semesterData = [$semester1,$semester2,$semester3,$semester4,$semester5,$semester6,$semester7,$semester8,$semester9,$semester10];

// $semesterData = [20, 0, 23, 0, 23, 15, 18, 0, 10, 0]; // <-- fake value
?>

<script>
    var seriesData = <?php echo json_encode($seriesData); ?>;
    var semesterData = <?php echo json_encode($semesterData); ?>;
</script>

<!-- Load required scripts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../admin/js/chart.js/Chart.js"></script>
<script src="../admin/js/chart.js/graph.js"></script>
