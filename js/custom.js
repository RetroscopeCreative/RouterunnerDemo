/**
 * Created by csibi on 2015.11.16..
 */

$(document).ready(function() {
    $("form .submit").on("click", function() {
        $(this).closest("form").trigger("submit");
    });

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
});
