<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NTR ESPORTS : BGMI - Squad Tournaments </title>
    <?php
    include 'components/header.php';
    ?>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway|Spectral'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tournaments.css">
    <link rel="stylesheet" href="css/helpalert.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        .titles {
            text-decoration: none;
        }
    </style>

</head>

<!-- partial:index.partial.html -->
<div class="menu">

    <a href="index.php" class="titles">
        <h1 class="title">NTR ESPORTS</h1>
    </a>

    <?php
    include 'components/menu.php';
    ?>
</div>


<div class="contaner">
    <h1 class="pagetitle">BGMI Squad Tournaments</h1>
    <div class="boxes">


        <?php
        include 'db.php';
        include 'server/fetchdata.php';
        getTonaments($conn, 'squad');
        ?>
    </div>
</div>


<?php
include 'components/helpAlerts.php';
include 'components/fotter.php';
?>


</body>

</html>