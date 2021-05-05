$(function()
{
    $('#jqueryButton1').click(function()
    {
        $('#teste').hide();
    });


    $('#jqueryButton2').click(function()
    {
        $('#teste').css("color", "red");
    });


    $('#jqueryButton3').click(function()
    {
        $('#teste').show();
    });


    $('#buttonFadeOut').click(function()
    {
        $('#testeFadeOut').fadeOut('slow');
        $('#testeFadeOut').delay(2000);
        $('#testeFadeOut').fadeIn('slow');
    });


    $('#buttonSemFadeOut').click(function()
    {
        $('#testeFadeOut').hide();
    });


    $('#msg_gravada').click(function()
    {
        $('#surgimento').text(' Olá, eu nasci').css({border: '2px solid green', color: 'blue'});
    });


    $('#botao_class').click(function()
    {
        $("#span_class").addClass('green').css({color: 'white'});
    });


    $('l1').click(function()
    {
        $('i1').show();
        $('i2').hide();
        $('i3').hide();
    });
    $('l2').click(function()
    {
        $('i1').hide();
        $('i2').hide();
        $('i3').hide();
    });
    $('l3').click(function()
    {
        $('i1').hide();
        $('i2').hide();
        $('i3').show();
    });
});