<?php
include('includes/config.php');



// if(!empty($_POST["roomid"])) 
// {
// $id=$_POST["roomid"];
//  $query ="SELECT * FROM rooms WHERE room_no = ?";
// $stmt = $mysqli->prepare($query);
// $stmt->bind_param('s',$id);
// $stmt->execute();
// $res=$stmt->get_result();
// while($row=$res->fetch_object())
// {  echo htmlentities($row->seater);
 
//  }
// }

// if(!empty($_POST["seater"]))
// {
//   $id=$_POST["seater"];
//   $query = "SELECT * FROM rooms WHERE seater=?";
//   $stmt = $mysqli->prepare($query);
//   $stmt->bind_param('s',$id);
//   $stmt->execute();
//   $res=$stmt->get_result();
//   $rooms = [];
//   while($row=$res->fetch_object())
//   {
//     $rooms[]=$row->room_no;
//   }
//   foreach($rooms as $room){
//     echo "<option value='{$room['id']}'>{$room['name']}</option>";
//   }
// }

if (!empty($_POST["seater"])) {
    $selectedSeater = $_POST["seater"];

    $query = "SELECT * FROM alinkar WHERE seater = ? AND available!=0";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $selectedSeater);
    $stmt->execute();
    $res = $stmt->get_result();
    $rooms = [];

    while ($row = $res->fetch_object()) {
        $alinkar[] = $row;
    }

    if (count($alinkar) > 0) {
        foreach ($alinkar as $room) {
            echo "<option value='{$room->room_no}'>{$room->room_no}</option>";
        }
    } else {
        echo "<option value=''>No rooms available for the selected seater</option>";
    }
}

if (!empty($_POST["room"])) {
    $selectedSeater = $_POST["room"];
        $query = "SELECT * FROM alinkar WHERE available != 0";
        $stmt2 = $mysqli->prepare($query);
    $stmt->bind_param('s', $selectedSeater);
    $stmt->execute();
    $res = $stmt->get_result();
    $alinkar = [];

    while ($row = $res->fetch_object()) {
        $alinkar[] = $row;
    }

    if (count($alinkar) > 0) {
        foreach ($alinkar as $room) {
            echo "<option value='{$room->seater}'>{$room->seater}</option>";
            if($room->seater == 3 ){
                echo "<option value='2'>2</option>";
            }else{
                echo "<option value='3'>3</option>";
            }
        }
    } else {
        echo "<option value=''>No rooms available for the selected seater</option>";
    }
}


?>