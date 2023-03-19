<form action="server/submit.php" method="post" id='form-data'>

    <div class="form-inputs">
        <?php
        include('form.php');
        setInput('Player Name', 'text', 'name');
        setInput('Game ID', 'text', 'gameid');
        setInput('Your Email ID', 'email', 'email');
        setInput('Phone Number', 'number', 'phone');
        setInput('Enter Your City', 'text', 'city');
        setInput('Enter Zip/Postal Code', 'number', 'zipcode');
        setOption('Select State', 'state');
        setInput('UPI ID', 'text', 'upi');
        ?>
        <input type="hidden" name="id" id="id" value="<?= $_GET['id']; ?>" />
    </div>
    <button class="rbtn" id="onsubmit">Register Tournament</button>
    <a href="../index.php" class="goback" id="backtohome">GO HOME</a>

</form>