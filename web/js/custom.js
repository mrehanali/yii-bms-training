$(document).ready(function () {
    $('#delete-book').click(function () {
        jConfirm('Do you really want to logout?', 'Logout', function (r) {
            if (r)
                console.log(r);
        });
    });

});