$(function(){
    $('#elixo-message').hide();
    function mostrarMessagem(){
        $('#elixo-message').show('slow');
    }

    $('#more').click(mostrarMessagem());
});


