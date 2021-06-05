<!DOCTYPE html>
<html lang="es">

<?php 

$jadicode = 'contacto@jadicode.es';
  $nombreUsuario = $_POST['nombre'];
  $mensajeUsuario = $_POST['mensaje'];
  $correoUsuario = $_POST['email'];

  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );


  $from = $correoUsuario;
  $to = $jadicode;
  $subject = "Jadicode | Mensaje Web";
  $mensaje = "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' integrity='sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf' crossorigin='anonymous'>
      <title>Mensaje</title>
    
      <style>
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
    
        .container {
          max-width: 1000px;
          width: 90%;
          margin: 0 auto;
        }
        .bg-blue {
          background: #2c3e50;
          margin-top: 40px;
          padding: 20px 0;
        }
        .alert {
          font-size: 1em;
          position: relative;
          padding: 1em;
     
        }
        .alert-primary {
          color: #004085;
          background-color: #4f7fff;
          border-color: #fdfdfd;
          text-align: center;
        }
    
        .img-fluid {
          text-align: center;
          width: 200px;
          padding: 1em;
          padding-bottom: 2em;
        }
    
        .mensaje {
          width: 80%;
          font-size: 20px;
          margin: 0 auto 40px;
          color: #eee;
        }
    
        .texto {
          margin-top: 20px;
          font-size: 14px;
        }
    
        .footer {
          width: 100%;
          text-align: center;
          padding: 10px;
          font-size: 14px;
        }


        .info{
            font-size: 14px;
            text-align: center;
            color: #fdfdfd;
        }
        .blanco{
            color: #fdfdfd;
            font-weight: bold;
            text-underline: underline;
        }
      </style>
    </head>
    <body>
      <div class='container'>
        <div class='bg-blue'>    
        <center>
        <img class='img-fluid' src='https://i.ibb.co/Mn8YH1n/jadicodelogo.png' alt='Mensaje'>
        </center>
          <div class='alert alert-primary'>
            <p class='blanco'><strong>Mensaje de: </strong> $nombreUsuario<i class='fas fa-exclamation-circle'></i></p>
            </p>
          </div>
    
          <div class='mensaje'>
            <div class='texto'>$mensajeUsuario</div>
          </div>
    
          <div class='footer'>
          <span class='info'>Correo del usuario:</span>
           <span class='blanco'>$correoUsuario</span>
          </div>
        </div>
      </div>
    </body>
    </html>
  ";

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: <$correoUsuario>" . "\r\n";
  $headers .= "Cc: $to" . "\r\n";
  $sendMail = mail($to, $subject, $mensaje, $headers);
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="¿Buscas un Diseñador Web? Mi nombre en la red es JADICODE, me especializo en HTML, CSS y JAVASCRIPT. Mido la accesibilidad de tus páginas cuidadosamente. Soy desarrollador front-end. Uso diversos frameworks como: ParcelJS y ReactJS. Hago uso notable de Docker.">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--ICONO NAVEGADOR-->
    <link rel="icon" type="image/jpg" href="/img/logos/icon.png">
    <!--FUENTE GENERAL-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!--ARCHIVOS CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>JADICODE</title>
</head>

<body>

    <div class="lineargradient"></div>
    <header class="header-outer">
        <div class="header-inner responsive-wrapper">
            <div class="header-logo">
                <a href="https://www.jadicode.es/"><img src="/img/logos/jadicodelogo.png" width="180"></a>
            </div>
            <nav class="header-navigation">
                <a href="https://www.jadicode.es/"><i class="fas fa-home"></i> Home</a>
    
            </nav>
            <div class="responsivemenu">
                <a href="https://www.jadicode.es/"><i class="fas fa-home" id="iconohome"></i></a>
            </div>
        </div>
    </header>
    <main class="main" id="insercion">
        <div class="main-content responsive-wrapper">
            <article class="enviadocorrectamente">
                <div class="centrado">
                    <h2> Your message has been sent <i class="fas fa-check-double"></i></h2>
                    <br>
                    <p class="centrado">I have recieved your message. Thank you for visiting <strong id="jadi">JADICODE</strong>!</p>
                    <br>
                    <p class="centrado">Approximate answer time: 24/48h. <i class="fas fa-check-circle"></i></p>
                    <br>
                    <p class="info">Your message has been sent successfully, thank you for your interest!</p>
                    <br>
                </div>

                <div class="imageninicio">
                    <img src="/img/enviado.png" alt="Hombre programando">
                </div>
            </article>
        </div>
    </main>
    <footer>
        <div class="redessociales">
            <p class="centrado">
                <a href="https://twitter.com/jadicode"><i class="fab fa-twitter" id="idtwitter"></i></a>
                <a href="https://instagram.com/jadicode"><i class="fab fa-instagram" id="idinstagram"></i></a>
                <a href="https://github.com/jadicode"><i class="fab fa-github" id="idgithub"></i></a>
            </p>
            <br>
            <p class="title">© Copyright © 2020-2021 JADICODE. All rigths reserved.</p>
            <br>
            <img src="/img/logos/logo.png" alt="jadicodelogo" width="50">
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>