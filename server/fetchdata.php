<?php

function getTonaments($conn, $type)
{

    $sql = "SELECT * FROM `tonaments` WHERE `type` = '$type'";
    $qu = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($qu);
    if ($num <= 0) {
        echo  '<h1 class="notexist">No Tournaments Exist</h1>';
        return false;
    }

    while ($row = mysqli_fetch_assoc($qu)) {
        $isfull = $row['clicks'] >= 100;
        echo " <div class='box'>
    <div class='hearer-box'>
        <!-- game header of name or date  -->
        <div class='gameinfo'>
            <img src='images/app.png' alt='bgmi' width='40px' height='40px'>
            <div class='info'>
                <p>BGMI</p>
                <p>" . $row['datetime'] . "</p>
            </div>
        </div>
        <div class='share'>
            <a href='whatsapp://send?text=Join NTR eSports Tournaments https://ntr-esports.secureapk.in'>
                <i class='fa-solid fa-share-nodes'></i>
            </a>
        </div>
    </div>
    <div class='body'>
        <table>
            <tr>
                <td>Price Pool</td>
                <td>Version</td>
                <td>Map</td>
                <td>Type</td>
            </tr>
            <tr>
                <td>₹ " . $row['pricepoll'] . "</td>
                <td>" . $row['version'] . "</td>
                <td>" . $row['map'] . "</td>
                <td>" . $row['type'] . "</td>
            </tr>
        </table>
    </div>
    <div class='help'>
        <p class='rule showrules'>Rules</p>
        <p class='joinhelp showjoinhelp'>How To Register?</p>
    </div>

    <div class='join'>
    ";
?>
<?php

        if (isset($_SESSION['id' . $row['id']])) {
            echo "<p class='al'>You Are Alrady JOIN</p>";
        } else {
            echo !$isfull ? "<a href='payment/redirect.php?tonamentid=" . $row['id'] . "'>Join Now ₹ " . $row['pay'] . " RS</a>" : "<p>SLOT IS FULL</p>";
        }

        echo  "
    </div>
</div>";
    }
}
