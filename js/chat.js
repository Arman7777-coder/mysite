$(document).ready(function () {
    function getChatMessages() {
        $.ajax({
            url: "vendor/chat.php",
            method: "GET",
            success: function(data) {
                $("#chat_messages").html(data);
            }
        });
    }
    setInterval(getChatMessages, 500);





    $("#chat-form").submit(function(e) {
        e.preventDefault();
        var message = $("#message").val();
        $.ajax({
            url: "vendor/new_message.php",
            method: "POST",
            data: { message: message},
            success: function() {
                $("#message").val("");
            }
        });
    });



})