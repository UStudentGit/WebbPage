$(document).ready(function() {

    $("#email").keyup(function() {
        // AJAX maybe

        // example when email is busy: 
        $(".emailBox label").text("Podany email jest zajety!");
        $(".emailBox label").css("color", "red");
    });

});