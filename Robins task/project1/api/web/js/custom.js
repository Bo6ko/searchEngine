$( document ).ready(function() {
    console.log( "ready!" );
    $("body").on("dblclick", '.color', function (e) {
        e.preventDefault();
        var $input = $(this);
        var currentValueColor = $input.text();
        console.log(currentValueColor);
        $input.parent().css('background-color', currentValueColor);
    });
});