$(document).ready(function () {

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


    // on form submit
    $('#onsubmit').click(function (e) {
        e.preventDefault();

        let teamName = $('#name').val();
        let gameid = $('#gameid').val();

        let email = $('#email').val();
        let phone = $('#phone').val();
        let city = $('#city').val();
        let pincode = $('#zipcode').val();
        let state = $('#state').val();
        let upi = $('#upi').val();
        let id = $('#id').val();


        if (teamName != '' && gameid != '' && email != '' && phone != '' && city != '' && pincode != '' && state != null && upi != '' && id != '') {

            if (!validateEmail(email)) {
                swal("Oops", "Please Enter Valid Email ID !", "error")
                return false;
            }

            $('#onsubmit').prop('disabled', true);
            $('#onsubmit').addClass('rbtndis');
            $('#onsubmit').text('Loading..');
            $.ajax({
                type: "POST",
                url: "server/solosubmit.php",
                data: {
                    teamName, gameid, email, phone, city, pincode, state, upi, id
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