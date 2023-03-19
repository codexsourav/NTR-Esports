


$(document).ready(function () {

  $('.showjoinhelp').click(function (e) {
    e.preventDefault();
    $('#howtojoin').css('display', 'flex');
  });

  $('.showrules').click(function (e) {
    e.preventDefault();
    $('#rouleshelp').css('display', 'flex');
  });


  $('#closehelp').click(function (e) {
    e.preventDefault();
    $('#howtojoin').css('display', 'none');
  });
  $('#closehelproules').click(function (e) {
    e.preventDefault();

    $('#rouleshelp').css('display', 'none');
  });

  $('.burger, .overlay').click(function () {
    $('.burger').toggleClass('clicked');
    $('.overlay').toggleClass('show');
    $('nav').toggleClass('show');
    $('body').toggleClass('overflow');
  });



  //select the "xyz" button
  let clickButton = document.querySelector('#clickbutton');

  //select the "main menu" div
  let targetbutton = document.querySelector('#targetbutton');

  //add a click event listener to the "xyz" button
  clickButton.addEventListener('click', () => {
    //trigger a click event on the "main menu" div
    targetbutton.click();
  });


});