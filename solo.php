<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> NTR ESPORTS : BGMI - Solo Tournaments </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'components/header.php';
    ?>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway|Spectral'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/helpalert.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tournaments.css">

    <style>
        .titles {
            text-decoration: none;
        }
    </style>

</head>

<!-- partial:index.partial.html -->
<div class="menu">
    <!-- <h1 class="title">NTR ESPORTS</h1> -->


    <a href="index.php" class="titles">
        <h1 class="title">NTR ESPORTS</h1>
    </a>

    <?php
    include 'components/menu.php';
    ?>

</div>


<div class="contaner">
    <h1 class="pagetitle">BGMI Solo Tournaments</h1>
    <div class="boxes">



        <?php
        include 'db.php';
        include 'server/fetchdata.php';
        getTonaments($conn, 'solo');
        ?>


    </div>
</div>


<?php
include 'components/helpAlerts.php';
include 'components/fotter.php';
?>


</body>

</html>