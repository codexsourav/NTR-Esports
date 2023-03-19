<?php
session_start();
include('../../db.php');
include('../../smtp/send.php');
header('Content-type: application/json');

function reqPost($fldname, $conn)
{
    return mysqli_real_escape_string($conn, $_POST[$fldname]);
}

if (!isset($_POST['id'])) {
    echo json_encode(['error' => 'Internal Server Error! ']);
}

$teamname = reqPost('teamName', $conn);
$gameid = reqPost('gameid', $conn);

$email = reqPost('email', $conn);
$phone = reqPost('phone', $conn);
$city = reqPost('city', $conn);
$pincode = reqPost('pincode', $conn);
$state = reqPost('state', $conn);
$upi = reqPost('upi', $conn);
$id = reqPost('id', $conn);

$sqlemail = "SELECT email FROM soloteam WHERE email = '$email' AND turnamentid = '$id'";
$qemail =  mysqli_query($conn, $sqlemail);
$emailnum = mysqli_num_rows($qemail);

if ($emailnum != 0) {
    echo json_encode(['error' => 'Email ID Alrady Used!']);
    return false;
}

$todyadate = date("Y/m/d");

if ($teamname && $gameid && $email && $phone && $city && $pincode && $state && $upi && $id) {
    $sql = "INSERT INTO `soloteam`( `player`,`gameid`, `email`, `phone`, `city`, `pincode`, `state`, `upi`,`joindate`,`turnamentid`) VALUES('$teamname','$gameid','$email','$phone','$city','$pincode','$state' ,'$upi','$todyadate','$id')";
    $query =  mysqli_query($conn, $sql);
    if ($query) {
        echo json_encode(['success' => "You Are Registerd"]);
        $_SESSION["id$id"] = "id$id";

        $sqldata = "SELECT * FROM tonaments WHERE  id = '$id'";
        $qu = mysqli_query($conn, $sqldata);
        $mtdata = mysqli_fetch_assoc($qu);
        sendMail($teamname, $mtdata['datetime'], $email, $id);
    } else {
        echo json_encode(['error' => 'Internal Server Error! ']);
    }
}
