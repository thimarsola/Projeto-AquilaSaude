// var $j = jQuery.noConflict();

$(document).ready(function () {
    $('#form').submit(function () {
        $.ajax({
            url: 'https://localhost/aquilasaude.com.br/wp-content/themes/aquila/source/Support/Sender.php',
            type: 'POST',
            data: $('#form').serialize(),
            success: function (data) {
                $('.form__row__form__status').html(data);
            }
        });
        return false;
    });
});

$(function () {
    $("#button").click(function () {
        $(".form__row__form__status--loading").removeClass("d-none");
    });
});