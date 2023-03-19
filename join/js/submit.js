
$(document).ready(function () {

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }



    // on form submit 
    $('#onsubmit').click(function (e) {
        e.preventDefault();

        // css Get All value 
        let teamName = $('#teamname').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let city = $('#city').val();
        let player1 = $('#player1').val();
        let player2 = $('#player2').val();
        let player3 = $('#player3').val();
        let player4 = $('#player4').val();
        let pincode = $('#zipcode').val();
        let state = $('#state').val();
        let upi = $('#upi').val();
        let id = $('#id').val();
        if (teamName != '' && email != '' && phone != '' && city != '' && player1 != '' && pincode != '' && state != null && upi != '' && id != '') {

            if (!validateEmail(email)) {
                swal("Oops", "Please Enter Valid Email ID !", "error")
                return false;
            }

            $('#onsubmit').prop('disabled', true);
            $('#onsubmit').addClass('rbtndis');
            $('#onsubmit').text('Loading..');
            $.ajax({
                type: "POST",
                url: "server/submit.php",
                data: {
                    teamName, email, phone, city, player1, player2, player3, player4, pincode, state, upi, id
                },
                success: function (data) {
                    console.log(data);


                    if (data.error) {
                        $('#onsubmit').prop('disabled', false);
                        $('#onsubmit').removeClass('rbtndis');
                        $('#onsubmit').text('Register Tournament');
                        swal("Oops", data.error, "error")
                    } else if (data.success) {
                        swal("Congratulation", data.success, "success");
                        $('#form-data').trigger("reset");
                        $('#onsubmit').prop('disabled', true);
                        $('#onsubmit').addClass('rbtndis');
                        $('#onsubmit').text('You Are Alrady Register');
                        $("#backtohome").css("display", 'block');

                    } else {
                        $('#onsubmit').prop('disabled', false);
                        $('#onsubmit').removeClass('rbtndis');
                        $('#onsubmit').text('Register Tournament');
                        swal("Oops", "Unknown Error!", "error")
                    }
                }
            });

        } else {
            swal("Oops", "Please Enter All Data !", "info");

        }



    });



});
