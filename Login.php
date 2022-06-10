<html>

<head>
    <link rel="stylesheet" href="Style-login.css">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<main>
    <div class="header">
        Inicio de Sesion
    </div>
    <div class="container-login">
        <form action="">
            <div>
                
            </div>
            <input class="input-usuario" type="text" placeholder="Usuario">
            <i class="far fa-envelope"></i>
            <input id="pswrd" class="input-contraseña" type="text" placeholder="Contraseña">
            <i class="fas fa-lock" onclick="show()"></i>
            <input class="input-entrar" type="submit" value="Entrar">
        </form>
    </div>
    <script>
         function show(){
          var pswrd = document.getElementById('pswrd');
          var icon = document.querySelector('.fas');
          if (pswrd.type === "password") {
           pswrd.type = "text";
           pswrd.style.marginTop = "20px";
           icon.style.color = "#7f2092";
          }else{
           pswrd.type = "password";
           icon.style.color = "grey";
          }
         }
      </script>
</main>

</html>