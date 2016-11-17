
$(document).ready(function () {
    var copiedColor;
    $(".sg-color").on("click", function () {
        var $spanLabel = $(this).find(".sg-animated");
        copiedColor = $spanLabel.text();
    });

    // A specific string
    var clipboard = new Clipboard('.sg-color', {
        text: function() {
            return copiedColor;
        }
    });
});