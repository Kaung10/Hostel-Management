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

// if(!empty($_POST["gender"]) && empty($_POST["seater"])){
//         echo "<option value=''>Please select seater</option>";
// }
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

// else {
//     echo "<option value=''>No seater or gender provided</option>";
// }

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
            if($room->seater == 3 )
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


// $seater = $_POST["seater"];
// $roomno = $_POST["room"];

// if($_POST["gender"] == 'male')
// {
//     // Male: Selected RoomNo but not Seater
//     if (empty($seater) && !empty($roomno))
//     {
//         $query = "SELECT seater FROM alinkar WHERE room_no = ? AND available != 0";
//         $stmt = $mysqli->prepare($query);
//         $stmt->bind_param('i', $roomno);
//         $stmt->execute();
//         $res = $stmt->get_result();
//         while ($row = $res->fetch_object()) 
//         {
//             $rooms[] = $row;
//         }
//         if (count($rooms) > 0) 
//         {
//             foreach ($rooms as $room) 
//             {
//                 echo "<option value='{$room->seater}'>{$room->seater}</option>";
//                 // if($room->seater == 3 )
//                 // {
//                 //     echo "<option value='2'>2</option>";
//                 // }
//                 // else
//                 // {
//                 //     echo "<option value='3'>3</option>";
//                 // }
//             }
//         } 
//         else 
//         {
//             echo "<option value=''>No rooms available for the selected seater</option>";
//         }
//     }
//     // Male: Other way round
//     else if (!empty($seater) && empty($roomno))
//     {
//         $query = "SELECT room_no FROM alinkar WHERE seater = ? AND available != 0";
//         $stmt = $mysqli->prepare($query);
//         $stmt->bind_param('i', $seater);
//         $stmt->execute();
//         $res = $stmt->get_result();
//         while ($row = $res->fetch_object()) 
//         {
//             $rooms[] = $row;
//         }

//         if (count($rooms) > 0) 
//         {
//             foreach ($rooms as $room) 
//             {
//                 echo "<option value='{$room->room_no}'>{$room->room_no}</option>";
//             }
//         } 
//         else 
//         {
//             echo "<option value=''>No rooms available for the selected seater</option>";
//         }
//     }
// }
// else if ($_POST["gender"] == 'female')
// {
//     // Female: Selected RoomNo but not Seater
//     if (empty($seater) && !empty($roomno))
//     {
//         $query = "SELECT seater FROM mudra WHERE room_no = ? AND available != 0";
//         $stmt = $mysqli->prepare($query);
//         $stmt->bind_param('i', $roomno);
//         $stmt->execute();
//         $res = $stmt->get_result();
//         while ($row = $res->fetch_object()) 
//         {
//             $rooms[] = $row;
//         }     
//     }
//     // Female: Other way round
//     else if (!empty($seater) && empty($roomno))
//     {
//         $query = "SELECT room_no FROM mudra WHERE seater = ? AND available != 0";
//         $stmt = $mysqli->prepare($query);
//         $stmt->bind_param('i', $seater);
//         $stmt->execute();
//         $res = $stmt->get_result();
//         while ($row = $res->fetch_object()) 
//         {
//             $rooms[] = $row;
//         }      
//     }
// }



 if (!empty($_POST['gender']) && empty($_POST["seater"]) && empty($_POST["room"])) {
    $gender = $_POST['gender'];

    if ($gender === 'male') {
        $query = "SELECT * FROM fees WHERE hostelName = 'alinkar'";
        $query2 = "SELECT room_no FROM alinkar WHERE available != 0";
    } else if ($gender === 'female') {
        $query = "SELECT * FROM fees WHERE hostelName = 'mudra'";
        $query2 = "SELECT room_no FROM mudra WHERE available != 0";
    }

//     $stmt = $mysqli->prepare($query2);
//     $stmt->execute();
//     $res = $stmt->get_result();

//     while ($row = $res->fetch_object()) {
//         echo htmlentities($row->fees);
//     }

//     $stmt->close();
// }

// $mysqli->close();

if ($stmt = $mysqli->prepare($query2)) {
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
            echo "<option value=''>No rooms available for the selected gender</option>";
        }

        $stmt->close();
    } else {
        echo "<option value=''>Failed to prepare statement</option>";
    }
} 

$mysqli->close();

?>