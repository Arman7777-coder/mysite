$(document).ready(function () {
    $("#search").keyup(function () {
            $.ajax({
                method: "POST",
                url: "vendor/livesearch.php",
                cache: false,
                data: {
                    name:$("#search").val()
                },

                success: function (data) {

                    $("#user").html(data);

                }
            });
        }
    )

})