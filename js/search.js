$(document).ready(function () {
    $("#search").keyup(function () {
            $.ajax({
                method: "POST",
                url: "vendor/livesearch.php",
                dataType:"html",
                data: {
                    name:$("#search").val()
                },

                success: function (data) {
                    if (data) {
                        $("#user").html(data);
                    }

                }
                // },error: function(jqXHR, textStatus, errorThrown) {
                //     alert("Error: " + textStatus + " - " + errorThrown);
                // }
            });
        }
    )

})