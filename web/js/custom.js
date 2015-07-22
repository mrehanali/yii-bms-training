$(document).ready(function () {
    $('#error').hide();
    $('#success').hide();

});
function deleteBook(id) {
    $.ajax({
        type: 'POST',
        url: "/book/delete?id=" + id,
        data: id,
        dataType: "json",
        success: function (data) { //only the data object passed to success handler with JSON dataType
            console.log(data);
            if (data.status == 'success') {
                $('#success').show();
                $('#book_' + id).hide();
            } else {
                $('#error').show();
            }
        },
        error: function () {
            alert('Error');
        }
    });
}