$("#switch").click(function () {
    $("body").toggleClass("dark");

    var ThePageIsDark = $("body").hasClass("dark");


    if (ThePageIsDark) {

        $("#switchon").show()
        $("#switchoff").hide()
    } else {

        $("#switchon").hide()
        $("#switchoff").show()
    }
});
