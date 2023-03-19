<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WELCOME TO NTR ESPORTS</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway|Spectral'>
    <?php
    include 'components/header.php';
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NTR Esports</title>
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/style.css">


</head>

<body>

    <main>
        <!-- bg video   -->
        <header class="main-header">
            <video autoplay muted loop id="bgvideo">
                <source src="video/bg.webm" type="video/mp4">
            </video>
            <span class="overlay"></span>
            <!-- header Content  -->

            <div class="header-row">

                <div class="column1">
                    <h1>WELCOME TO <span> NTR ESPORTS</span></h1>
                    <p>NTR Esports is a professional esports organization.
                        The organization was founded in 2020 and has since then established itself as a strong contender
                        in the esports scene. NTR Esports has also expanded its reach to the mobile gaming scene with
                        popular games like Battlegrounds Mobile India (BGMI). Overall, NTR Esports is a well-respected
                        and accomplished esports organization with a commitment to excellence, community engagement, and
                        innovation in esports. Their involvement in a wide range of popular esports titles, including
                        BGMI, has cemented their status as a major player in the industry.
                    </p>
                    <button class="actionBtn" id="clickbutton">Let's Go</button>
                </div>
                <div class="column2">

                </div>

            </div>



        </header>
    </main>
    <?php
    include 'components/menu.php';
    ?>
    <div class="overlay"></div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="./js/script.js"></script>
</body>

</html>