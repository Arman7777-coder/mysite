$("#btn").on("click",function () {
    var email = $("#email").val().trim();
    var name = $("#name").val().trim();
    var txtar = $("#txtar").val().trim();
    if (email === ""){
        $("#message").text("Լրացրեք էլ․հասցեի դաշտը");
        return false;
    }else if (name === ""){
            $("#message").text("Լրացրեք անվան դաշտը");
            return false;

    }else if (txtar.length < 5){
        $("#message").text("Նամակը պետք է պարունակի առնվազն 5 նշան");
        return false;

    }
    $("#message").text("");
    $('#btn'). prop('disabled', true);
    $.ajax({
        method: "POST",
        url: "vendor/send.php",
        cache: false,
        data: {email: email, name:name ,text:txtar},
        dataType: "html",
        success: function (data) {
            if(data === "gnac"){
                alert("Նամակը հաջողությամբ ուղարկվեց")
                location.reload();
                window.location.href = 'http://localhost/mysite.loc/profil.php';
            }else if (data === "emailerror"){
                alert("Գրեք իրական էլ․հասցե")
                location.reload();
                window.location.href = 'http://localhost/mysite.loc/mail.php';
            }
        }
    });

})