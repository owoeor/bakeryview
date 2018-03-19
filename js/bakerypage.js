$(document).ready(function(){
  $('.content').hide();
  $('#content1').show();
  $('#toggle1').css("text-decoration","none");

  $('#toggle1').click(function(){
    $('#toggle1').css("text-decoration","none");
     $('#toggle2').css("text-decoration","underline");
      $('#toggle3').css("text-decoration","underline");
    $('.content').css("display","none");
    $('#content1').css("display","block");
    return false;
  });
  $('#toggle2').click(function(){
    $('#toggle2').css("text-decoration","none");
      $('#toggle1').css("text-decoration","underline");
       $('#toggle3').css("text-decoration","underline");
    $('.content').css("display","none");
    $('#content2').css("display","block");
    return false;
  });
  $('#toggle3').click(function(){
    $('#toggle3').css("text-decoration","none");
      $('#toggle1').css("text-decoration","underline");
        $('#toggle2').css("text-decoration","underline");
    $('.content').css("display","none");
    $('#content3').css("display","block");
    return false;
  });
});
