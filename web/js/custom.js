$(document).ready(function () {
    $('#BookDeleted').hide();
    $('#BookNotDeleted').hide();

});
function deleteBook(book_id) {

    $.confirm({
        title: 'Confirm!',
        content: 'Are You sure you want to delete this book ?',
        confirmButton: 'Yes i agree',
        cancelButton: 'NO never !',
        confirm: function () {
            $.ajax({
                type: 'POST',
                url: "/book/delete?id=" + book_id,
                data: book_id,
                dataType: "json",
                success: function (data) { //only the data object passed to success handler with JSON dataType
                    console.log(data);
                    if (data.status == 'success') {
                        $('#BookDeleted').show();
                        $('#row_' + book_id).hide();
                    } else {
                        $('#BookNotDeleted').show();
                    }
                },
                error: function () {
                    alert('There has been an error, please consult the application developer.');
                }
            });
        },
        cancel: function () {
            event.preventDefault();
        }
    });

}