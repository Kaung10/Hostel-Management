<?php
include('includes/config.php');


if (!empty($_POST["seater"]) && !empty($_POST["gender"])) {
    $selectedSeater = $_POST["seater"];
    $gender = $_POST["gender"];
    
    // Prepare the query based on gender
    if ($gender === 'male') {
        $query = "SELECT room_no FROM alinkar WHERE seater = ? AND available != 0";
    } else if ($gender === 'female') {
        $query = "SELECT room_no FROM mudra WHERE seater = ? AND available != 0";
    } else {
        echo "<option value=''>Invalid gender</option>";
        exit;
    }

    $stmt = $mysqli->prepare($query);
    if ($stmt) {
        $stmt->bind_param('i', $selectedSeater);
        $stmt->execute();
        $res = $stmt->get_result();
        $rooms = [];

        while ($row = $res->fetch_object()) {
            $rooms[] = $row;
        }

        if (count($rooms) > 0) {
            foreach ($rooms as $room) {
                echo "<option value='{$room->room_no}'>{$room->room_no}</option>"; 
            }
        } else {
            echo "<option value=''>No rooms available for the selected seater</option>";
        }

        $stmt->close();
    } else {
        echo "<option value=''>Failed to prepare statement</option>";
    }

}

if (!empty($_POST["room"]) && !empty($_POST["gender"])) {
    $selectedRoom = $_POST["room"];
    $gender = $_POST["gender"];

    if ($gender === 'male') {
        $query = "SELECT seater FROM alinkar WHERE room_no = ?";
    } elseif ($gender === 'female') {
        $query = "SELECT seater FROM mudra WHERE room_no = ?";
    }

    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('i', $selectedRoom);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_object()) {
            echo "<option value='{$row->seater}'>{$row->seater}</option>";
            if($row->seater === 3 )
                {
                    echo "<option value='2'>2</option>";
                }
                else
                {
                    echo "<option value='3'>3</option>";
                }
        }
    } else {
        echo "<option value=''>No seaters available for the selected room</option>";
    }

    $stmt->close();
}

if (!empty($_POST['gender'])) {
    $gender = $_POST['gender'];

    if ($gender === 'male') {
        $query = "SELECT * FROM fees WHERE hostelName = 'alinkar'";
    } elseif ($gender === 'female') {
        $query = "SELECT * FROM fees WHERE hostelName = 'mudra'";
    }

    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $res = $stmt->get_result();

    while ($row = $res->fetch_object()) {
        echo htmlentities($row->fees);
    }

    $stmt->close();
}

$mysqli->close();






?>