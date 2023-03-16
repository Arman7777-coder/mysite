$("#btn").on("click",function () {

   var email = $("#email").val().trim();
   var password = $("#password").val().trim();
   if(email === ""){
       $("#message").text("Լրացրեք էլ․հասցեի դաշտը");
       return false;
   }else if(password === ""){
       $("#message").text("Լրացրեք գաղտնաբառը");
       return false;
   }
    $("#message").text("");
   $("#btn").prop('disabled', true);

    $.ajax({
        method: "POST",
        url: "vendor/avtor.php",
        cache: false,
        data: {email: email, password: password},
        dataType: "html",
        success: function (data,e) {
            if (data === "sxal") {


                alert("Սխալ էլ․հասցե կամ գաղտնաբառ");


            }else {
                location.reload();
                window.location.href = 'http://localhost/mysite.loc/profil.php';
            }
        }
    });

});