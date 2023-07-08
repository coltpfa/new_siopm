<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>LOGIN SIOPM-OFF</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>

<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Work+Sans:300,400,700,900");
* {
  outline-width: 0;
  font-family: "Montserrat" !important;
}

body {
  margin: 0;
  padding: 0;
  background: none;
  border: none;
  overflow: hidden;
}



#container {
  height: 100vh;
  background-size: 100% !important;
  background-repeat: no-repeat;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  border: none;
}




#inviteContainer {
  display: flex;
  overflow: hidden;
  position: relative;
  border-radius: 5px;
}
#inviteContainer .acceptContainer {
  padding: 45px 30px;
  box-sizing: border-box;
  width: 400px;
  margin-left: -400px;
  overflow: hidden;
  height: 0;
  opacity: 0;
}
#inviteContainer .acceptContainer.loadIn {
  opacity: 1;
  margin-left: 0;
  transition: 0.5s ease;
}
#inviteContainer .acceptContainer:before {
  content: "";
  background-size: cover !important;
  box-shadow: inset 0 0 0 3000px rgba(40, 43, 48, 0.75);
  filter: blur(10px);
  position: absolute;
  width: 150%;
  height: 150%;
  top: -50px;
  left: -50px;
}

form {
  position: relative;
  text-align: center;
  height: 100%;
}
form h1 {
  margin: 0 0 15px 0;
  font-family: "Work Sans" !important;
  font-weight: 700;
  font-size: 20px;
  color: #fff;
  user-select: none;
  opacity: 0;
  left: -30px;
  position: relative;
  transition: 0.5s ease;
}
form h1.loadIn {
  left: 0;
  opacity: 1;
}

.formContainer {
  text-align: left;
}
.formContainer .formDiv {
  margin-bottom: 30px;
  left: -25px;
  opacity: 0;
  transition: 0.5s ease;
  position: relative;
}
.formContainer .formDiv.loadIn {
  opacity: 1;
  left: 0;
}
.formContainer .formDiv:last-child {
  padding-top: 10px;
  margin-bottom: 0;
}
.formContainer p {
  margin: 0;
  font-weight: 700;
  color: #aaa;
  font-size: 10px;
  user-select: none;
}
.formContainer input[type=password], .formContainer input[type=text] {
  background: transparent;
  border: none;
  box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.15);
  padding: 15px 0;
  box-sizing: border-box;
  color: #fff;
  width: 100%;
}
.formContainer input[type=password]:focus, .formContainer input[type=text]:focus {
  box-shadow: inset 0 -2px 0 #fff;
}

.logoContainer {
  padding: 45px 35px;
  box-sizing: border-box;
  position: relative;
  z-index: 2;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  transform: scale(0, 0);
}
.logoContainer img {
  width: 150px;
  margin-bottom: -5px;
  display: block;
  position: relative;
}
.logoContainer img:first-child {
  width: 150px;
}
.logoContainer .text {
  padding: 25px 0 10px 0;
  margin-top: -70px;
  opacity: 0;
}
.logoContainer .text.loadIn {
  margin-top: 0;
  opacity: 1;
  transition: 0.8s ease;
}
.logoContainer .logo {
  position: relative;
  top: -20px;
  opacity: 0;
}
.logoContainer .logo.loadIn {
  top: 0;
  opacity: 1;
  transition: 0.8s ease;
}
.logoContainer:before {
  content: "";
  background-size: cover !important;
  position: absolute;
  top: -50px;
  left: -50px;
  width: 150%;
  height: 150%;
  filter: blur(10px);
  box-shadow: inset 0 0 0 3000px rgba(255, 255, 255, 0.8);
}

.forgotPas {
  color: #aaa;
  opacity: 0.8;
  text-decoration: none;
  font-weight: 700;
  font-size: 10px;
  margin-top: 15px;
  display: block;
  transition: 0.2s ease;
}
.forgotPas:hover {
  opacity: 1;
  color: #fff;
}

.acceptBtn {
  width: 100%;
  box-sizing: border-box;
  background: #1e1e1f94;
  border: none;
  color: #fff;
  padding: 20px 0;
  border-radius: 3px;
  cursor: pointer;
  transition: 0.2s ease;
  user-select: none;
}
.acceptBtn:hover {
  background: #00000096;
}

.register {
  color: #aaa;
  font-size: 12px;
  padding-top: 15px;
  display: block;
}
.register a {
  color: #fff;
  text-decoration: none;
  margin-left: 5px;
  box-shadow: inset 0 -2px 0 transparent;
  padding-bottom: 5px;
  user-select: none;
}
.register a:hover {
  box-shadow: inset 0 -2px 0 #fff;
}
</style>
</head>
<body>
@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif
<!-- partial:index.partial.html -->
<!-- NORMALIZED CSS INSTALLED-->
<!-- View settings for more info.-->
<div id="container">
  <div id="inviteContainer">
    <div class="logoContainer"><img class="logo" src="https://raw.githubusercontent.com/coltpfa/COPOM/main/copom.png"/></div>
    <div class="acceptContainer">
      <form action="login2" method="post">
        @csrf
        <h1>SIOPM-OFFLINE</h1>
        <div class="formContainer">
          <div class="formDiv" style="transition-delay: 0.2s">
            <p>USUÁRIO - matrícula</p>
            <input type="text" name="matricula" required/>
          </div>
          <div class="formDiv" style="transition-delay: 0.4s">
            <p>SENHA</p>
            <input type="password" name="password" required/><a class="forgotPas" href="#">Esqueceu sua senha?</a>
          </div>
          <div class="formDiv" style="transition-delay: 0.6s">
            <button class="acceptBtn" type="submit">ENTRAR</button><span class="register">Vamos todos juntos.<a href="#">ningue, fica para trás.</a></span>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- partial -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js"></script>

  <script>
$(function() {
    var images = [
        'https://raw.githubusercontent.com/coltpfa/COPOM/main/LOGIN/bandeira-login.png',
        'https://raw.githubusercontent.com/coltpfa/COPOM/main/LOGIN/bandeira-login.png'
    ];

    $('#container').append('<style>#container, .acceptContainer:before, #logoContainer:before {background: url(' + images[Math.floor(Math.random() * images.length)] + ') center fixed }');

    setTimeout(function() {
        $('.logoContainer').transition({ scale: 1 }, 700, 'ease');
        setTimeout(function() {
            $('.logoContainer .logo').addClass('loadIn');
            setTimeout(function() {
                $('.logoContainer .text').addClass('loadIn');
                setTimeout(function() {
                    $('.acceptContainer').transition({ height: '431.5px' });
                    setTimeout(function() {
                        $('.acceptContainer').addClass('loadIn');
                        setTimeout(function() {
                            $('.formDiv, form h1').addClass('loadIn');
                        }, 500);
                    }, 500);
                }, 500);
            }, 500);
        }, 1000);
    }, 10);
});


  </script>

</body>
</html>
