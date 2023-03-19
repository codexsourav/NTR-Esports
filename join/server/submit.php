<?php
session_start();
include('../../db.php');
include('../../smtp/send.php');
header('Content-type: application/json');

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

function reqPost($fldname, $conn)
{
    return mysqli_real_escape_string($conn, $_POST[$fldname]);
}

$teamname = reqPost('teamName', $conn);
$email = reqPost('email', $conn);
$phone = reqPost('phone', $conn);
$city = reqPost('city', $conn);
$player1 = reqPost('player1', $conn);
$player2 = reqPost('player2', $conn);
$player3 = reqPost('player3', $conn);
$player4 = reqPost('player4', $conn);
$pincode = reqPost('pincode', $conn);
$state = reqPost('state', $conn);
$upi = reqPost('upi', $conn);
$id = reqPost('id', $conn);

$todyadate = date("Y/m/d");
$teamid = generateRandomString(rand(10, 15));
if ($teamname && $email && $phone && $city && $player1 && $pincode && $state && $upi && $id) {

    // echo json_encode(['error' => 'Please Enter All Data !']);
    $sql = "INSERT INTO `teamdata`(`teamname`, `email`, `phone`, `city`, `captain`, `player2`, `player3`, `player4`, `pincode`, `state`, `submitdata`,`teamid`,`upi`,`turnamentid`) VALUES ('$teamname' , '$email' ,'$phone','$city','$player1','$player2','$player3','$player4','$pincode','$state','$todyadate','$teamid','$upi','$id')";
    $sqlemail = "SELECT email FROM teamdata WHERE email = '$email' AND  turnamentid = '$id'";

    try {
        $qemail =  mysqli_query($conn, $sqlemail);
        $emailnum = mysqli_num_rows($qemail);

        if ($emailnum != 0) {
            echo json_encode(['error' => 'Email ID Alrady Used!']);
            return false;
        }
        $query =  mysqli_query($conn, $sql);
        if ($query) {
            echo json_encode(['success' => "Your Team Is Registerd . Your Team ID : $teamid"]);
            $_SESSION["id$id"] = "id$id";

            $sqldata = "SELECT * FROM tonaments WHERE  id = '$id'";
            $qu = mysqli_query($conn, $sqldata);
            $mtdata = mysqli_fetch_assoc($qu);
            sendMail($teamname, $mtdata['datetime'], $email, $id);
        } else {
            echo json_encode(['error' => 'Internal Server Error! 1']);
        }
    } catch (\Throwable $th) {
        //throw $th;
        echo json_encode(['error' => 'Internal Server Error! 2' . $th]);
    }
} else {
    echo json_encode(['error' => 'Please Enter All Data !']);
}
