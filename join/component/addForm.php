<form action="server/submit.php" method="post" id='form-data'>

    <div class="form-inputs">
        <?php
        include('form.php');
        setInput('Your Team Name', 'text', 'teamname');
        setInput('Captain Name', 'text', 'player1');
        setInput('Name Of Player 2', 'text', 'player2');
        setInput('Name Of Player 3', 'text', 'player3');
        setInput('Name Of Player 4', 'text', 'player4');

        setInput('Your Email ID', 'email', 'email');
        setInput('Phone Number', 'number', 'phone');
        setInput('Enter Your City', 'text', 'city');
        setInput('Enter Zip/Postal Code', 'number', 'zipcode');
        setOption('Select State', 'state');
        setInput('UPI ID', 'text', 'upi');

        ?>
        <input type="hidden" name="id" id="id" value="<?= $_GET['id']; ?>">
    </div>
    <button class="rbtn" id="onsubmit">Register Tournament</button>
    <a href="../index.php" class="goback" id="backtohome">GO HOME</a>

</form>