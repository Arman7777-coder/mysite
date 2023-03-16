$("#btn").on("click",function () {
  var email = $("#email").val().trim();
  var name = $("#name").val().trim();
  var password = $("#pass").val().trim();
  var password_con = $("#pass_con").val().trim();

  if (email === ""){
    $("#message").text("Լրացրեք էլ․հասցեի դաշտը");
    return false;
  }else if (name === ""){
    $("#message").text("Գրեք ձեր անունը");
    return false;
  }else if (password.length < 8){
    $("#message").text("Գաղտնաբառը պետք է պարունակի ամենաքիչը 8 նշան");
    return false;
  }else if (password !== password_con){
    $("#message").text("Գաղտնաբառերը չեն համապատասխանում");
    return false;
  }
  $("#message").text("");


  $.ajax({
    method: "POST",
    url: "vendor/register.php",
    cache:false,
    data: { email: email, name: name,password: password },
    dataType:"html",
    success:function (data) {
       if(data === false) {
         email = '';
         name = '';
         password = '';
         password_con='';
         alert(data);
         // window.location.href = 'http://localhost/mysite.loc/signin.php';


       }else{
         alert(data);
         window.location.href = 'http://localhost/mysite.loc/login.php';

       }

    }

  })

});