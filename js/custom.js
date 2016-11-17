
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

    clipboard.on('success', function(e) {

        var $clickedDiv = $(e.trigger);
        var $spanColor = $clickedDiv.find(".sg-animated");
        var originalColor = $spanColor.text();
        $spanColor.text("Copied!");
        setTimeout(function () { 
            $spanColor.text(originalColor);
         } , 2500);

        e.clearSelection();
    });

    clipboard.on('error', function(e) {
        console.error('Action:', e.action);
        console.error('Trigger:', e.trigger);
        console.error('programatic copying to your clipboard is not available :(');
    });
});