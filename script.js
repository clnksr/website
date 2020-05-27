$(document).ready(function () {
    var hourOfDay = (new Date()).getHours();

    if (hourOfDay > 20 || hourOfDay < 07) {
        $("#switch").click();
    }
})


$("#switch").click(function () {
    $("body").toggleClass("dark");

    var ThePageIsDark = $("body").hasClass("dark");

    $("#switchon").toggle(ThePageIsDark);
    $("#switchoff").toggle(!ThePageIsDark);

    //
    //    if (ThePageIsDark) {
    //
    //        $("#switchon").show()
    //        $("#switchoff").hide()
    //    } else {
    //
    //        $("#switchon").hide()
    //        $("#switchoff").show()
    //    }
});
