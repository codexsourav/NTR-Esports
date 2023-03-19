<title>Redirecting..</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<h1 style="padding: 30px;">Do not Close Tab, Redirecting...</h1>
<?php
include('../db.php');
if (isset($_GET['tonamentid'])) {
    $id =   $_GET['tonamentid'];
    $getsql = "SELECT * FROM `tonaments`  WHERE id = '$id'";
    $gq = mysqli_query($conn, $getsql);
    $data = mysqli_fetch_assoc($gq);
    $clicks = $data['clicks'];
    if ($clicks >= '100') {
        header('Location: ../index.php');
    } else {
        $nclicks = $clicks + 1;
        $sql = "UPDATE `tonaments` SET `clicks`='$nclicks' WHERE id='$id'";
        $uq = mysqli_query($conn, $sql);
        if ($uq) {
            header('refresh:2; url=' . $data['paymentlink']);
        } else {
            header('Location: ../index.php');
        }
    }
} else {
    header('Location: ../index.php');
}

?>