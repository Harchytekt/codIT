$(document).ready(function() {
    $('.tab.course').attr('id', '');
    $('.tab.trophies').attr('id', '');
    $('.tab.account').attr('id', '');
    $('.tab').click(function() {
        if ($(this).attr('id') != "current") {
            var item = $(this).attr('class');
            if (item.indexOf("course") > 0) {
                window.location.href = "course.php";
            } else if (item.indexOf("trophies") > 0) {
                window.location.href = "trophies.php";
            } else if (item.indexOf("account") > 0) {
                window.location.href = "account.php";
            }
        }
    });
});
