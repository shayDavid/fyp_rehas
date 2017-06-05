/**
 * Created by dmjema on 6/2/17.
 */

function ajaxLoad(filename, top) {
    top = typeof top !== 'undefined' ? top : 'top';
    $('.loading').show();
    $.ajax({
        type: "GET",
        url: filename,
        contentType: false,
        success: function (data) {
            $("#" + top).html(data);
            $('.loading').hide();
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}