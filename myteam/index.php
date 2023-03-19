<?php
session_start();
include('../db.php');
$id = $_GET['id'];
$email = $_GET['email'];
if (!isset($id) && !isset($email)) {
    header('Location: ../index.php');
}

$sql = "SELECT * FROM tonaments WHERE id = '$id'";
$tdq = mysqli_query($conn, $sql);
$toonament = mysqli_fetch_assoc($tdq);


$tblname = '';

if ($toonament['type'] == 'solo') {
    $tblname = 'soloteam';
} else {
    $tblname = 'teamdata';
}

$sqlteam = "SELECT * FROM $tblname WHERE turnamentid = '$id' AND email = '$email'";

$teamQu = mysqli_query($conn, $sqlteam);
if (mysqli_num_rows($teamQu) == 0) {
    header('Location: ../index.php');
    return false;
}
$_SESSION["id$id"] = "id$id";

$data = mysqli_fetch_assoc($teamQu);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    include '../components/header.php';
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NTR ESPORTS : MY TEAM</title>
    <link rel="stylesheet" href="../join/css/style.css">
    <link rel="stylesheet" href="../join/css/form.css">
</head>

<body>

    <div class="form-toona">
        <div class="title">
            <h1>MY TEAM</h1>
        </div>
        <div class="final-form">

            <div class="showusers">
                <?php
                if ($toonament['type'] == 'solo') {
                ?>
                    <ul>
                        <li>MATCH DATE : <?= $toonament['datetime']; ?></li>
                        <li>Player Name : <?= $data['player']; ?></li>
                        <li>Email : <?= $data['email']; ?></li>
                        <li>Phone : <?= $data['phone']; ?></li>
                        <li>City : <?= $data['city']; ?></li>
                        <li>State : <?= $data['state']; ?></li>
                    </ul>

                <?php
                } else {
                ?>
                    <ul>
                        <li>MATCH DATE : <?= $toonament['datetime']; ?></li>
                        <li>Team Name : <?= $data['teamname']; ?></li>
                        <li>Captain Name : <?= $data['captain']; ?></li>

                        <?= $data['player2'] ?  "<li>Player 2 : " .  $data['player2'] . "  </li>" : '' ?>
                        <?= $data['player3'] ?  "<li>Player 3 : " .  $data['player3'] . "  </li>" : '' ?>
                        <?= $data['player4'] ?  "<li>Player 4 : " .  $data['player4'] . "  </li>" : '' ?>

                        <li>Email : <?= $data['email']; ?></li>
                        <li>Phone : <?= $data['phone']; ?></li>
                        <li>City : <?= $data['city']; ?></li>
                        <li>State : <?= $data['state']; ?></li>
                    </ul>
                <?php
                }
                ?>
            </div>

        </div>

    </div>

    <script src="js/solosubmit.js"></script>
</body>

</html>