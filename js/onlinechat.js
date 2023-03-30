$("#btn").on('click',function () {
    if($("#message").val() < 1){
        $("#error_mess").text("Հաղորդագռթյունը պետք է պարունակի առնվազն 1 նիշ");
        return false;
    }
    $("#error_mess").text("");


    $.ajax({
        method: "POST",
        url: "vendor/onlinechat.php",
        cache: false,
        data: {
            message:$("#message").val()
        },

        success: function (data) {

           alert("lava")

        }
    });
})