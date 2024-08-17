<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Forms</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        aside {
            width: 200px;
            float: left;
            background-color: #f4f4f4;
            padding: 1em;
        }

        aside ul {
            list-style-type: none;
            padding: 0;
        }

        aside ul li {
            margin: 10px 0;
        }

        aside ul li a {
            text-decoration: none;
            color: #333;
        }

        main {
            margin-left: 220px;
            padding: 1em;
        }

        .form-list {
            margin: 0;
            padding: 0;
        }

        .form-bar {
            display: flex;
            justify-content: space-between;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 10px;
        }

        .name {
            font-weight: bold;
        }

        .info {
            font-style: italic;
        }

        .actions {
            display: flex;
        }

        .cancel-button, .confirm-button {
            margin-left: 10px;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .cancel-button {
            background-color: #e74c3c;
            color: #fff;
        }

        .confirm-button {
            background-color: #2ecc71;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Request Forms</h1>
        <?php //include('includes/header.php');?> 
    </header>

    <aside>
        <?php include('includes/sidebar.php');?>
    </aside>

    <main>
        <div class="form-list">
            <?php

            // Handle AJAX request
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id'] ?? 0);
    $status = intval($_POST['status'] ?? 0);
    $hostel = htmlspecialchars($_POST['hostel'] ?? '');
    $roomno = intval($_POST['roomNumber'] ?? 0);

    if ($id > 0 && ($status === 0 || $status === 1)) {
        $label = strtolower($hostel);
        if ($status===0){
        $query1 = "UPDATE $label SET available = available + 1 WHERE room_no = ?";
        $stmt1 = $mysqli->prepare($query1);
        $stmt1->bind_param("i", $roomno);
        $stmt1->execute();
        $stmt1->close();
    }

        $query = "UPDATE roomregistration SET request = ? WHERE id = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ii", $status, $id);

        echo $stmt->execute() ? "success" : "error: " . $stmt->error;
        $stmt->close();
    } else {
        echo "error: Invalid input";
    }

    $mysqli->close();
    exit;
}

            // Query to fetch data where request column is 2
$query = "SELECT * FROM roomregistration WHERE request = 2";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $hostel = strcasecmp($row['gender'], 'male') == 0 ? "Alinkar" : "Mudra";
        $roomNumber = htmlspecialchars($row['roomno']);
        $id = htmlspecialchars($row['id']);

        // show list using php function if you want to change UI, it is here
        echo '<div class="form-bar" id="item-' . $id . '">';
        echo '<span class="name">' . htmlspecialchars($row['name']) . '</span>';
        echo '<span class="info">' . $hostel . ' --> ' . $roomNumber . '</span>';
        echo '<span class="actions">';
        echo '<button class="cancel-button" onclick="updateRequest(' . $id . ', 0, \'' . $hostel . '\', ' . $roomNumber . ')">Cancel</button>';
        echo '<button class="confirm-button" onclick="updateRequest(' . $id . ', 1, \'' . $hostel . '\', ' . $roomNumber . ')">Confirm</button>';
        echo '</span>';
        echo '</div>';
    }
} else {
    echo 'No requests found.';
}
?>

</div>
</main>

<script>
function updateRequest(id, status, hostel, roomNumber) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (xhr.responseText.trim().endsWith("success")) {
                    document.getElementById('item-' + id).style.display = 'none';
                    alert("Request successfully updated!");
                } else {
                    alert('Error updating request: ' + xhr.responseText);
                }
            } else {
                alert('HTTP Error: ' + xhr.status);
            }
        }
    };

    xhr.onerror = function () {
        alert('Request failed');
    };

    xhr.send("id=" + encodeURIComponent(id) + "&status=" + encodeURIComponent(status) + "&hostel=" + encodeURIComponent(hostel) + "&roomNumber=" + encodeURIComponent(roomNumber));
}
</script>


</body>
</html>
