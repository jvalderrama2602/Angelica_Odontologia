<!DOCTYPE html>
<html lang="es-ES">
<head>
    <title>Servicios Odontológicos</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika:300,400,600,700" />
    <link rel="stylesheet" type="text/css" href="_assets/_libs/font-awesome/css/font-awesome.css" /> 
    <!--<link rel="stylesheet" type="text/css" href="_assets/_libs/no-ui-slider/jquery.nouislider.css" /> -->
    <link rel="stylesheet" type="text/css" href="_assets/_libs/animate.css" /> 
    <link rel="stylesheet" type="text/css" href="_assets/_css/style.css" />  
    <style>
     header .titulo {
        color: #fff;
        text-decoration:none;
        font-size: 18px;
     }
     div p.justificar{
        text-align: justify;
     }
    </style>
</head>
<body>
<?php
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$titulo=$_POST["asunto"];
$mensaje=$_POST["mensaje"];
$para="josevalderrama2602@hotmail.com";
$asunto="Tienes una nueva consulta";
$asunto2="Tu consulta Odontológica ";
$mensaje="
	Nombre del remitente:".$nombre."
	Telefono:".$telefono."
	E-mail:".$email."
	Titulo del Mensaje: ".$titulo."
	Mensaje:".$mensaje."
	";
	mail($para,$asunto,utf8_decode($mensaje));


	$mensaje2="

	Gracias por contactarnos.

	Este es un mensaje para confirmar la validez de su correo.

	En breve nos pondremos en contacto con usted.

	Si es urgente también puede comunicarse a los siguientes teléfonos:
	
	0424 854 71 73


	0212 953 78 43


	0212 953 30 91


	0212 953 61 84


	Disponible de Lunes a Viernes 
	de 8:00am - 4:00pm

	Saludos,

	Angélica Carmona
	Odontólogo UCV
	
	";
	mail($email,$asunto,utf8_decode($mensaje2));
?> 
	 <header>
        <div class="center">
            <div class="logo">
            <!-- <img src="_assets/_img/logo.png" alt="Insurance Agency" /> -->
                <a class="titulo" href="index.html">Angélica Carmona</a><br>
                <p class="titulo">Odontólogo</p>         
            </div>
            <nav>
               <ul class="menu">
                    <li class="active"><a href="/index.html">Inicio</a></li>
                    <li><button class="menu-element" data-action="show-contact-popup">Contacto</button></li>
               </ul>         
               <div class="menu-responsive"><i class="fa fa-bars"></i></div>
            </nav>
            
            <div class="clear">
            </div>

        </div>

    </header>
      <section class="box-with-image-right section-top-space">
    
        <div class="center">

          
            <div class="content">

                <h2>Su mensaje se ha enviado correctamente</h2>
                
                <p>Por favor compruebe la recepción de un correo en su bandeja de correos. NO OLVIDE REVISAR SU BANDEJA DE CORREO NO DESEADO.</p>
               
                <br><br><br><br><br><br><br><br><br><br>
               
                <form method="get" action="/index.html" class="form">
                
                   
                    <button class="button button-navy-blue send-phone-call-quote">Volver a la página principal</button>
                
                </form>

            </div>
            
            <div class="image" style="background-image: url( '_assets/_img/Perfil.jpg' );">
            
                <div class="image-caption">
                
                    <p><strong>Angélica Carmona</strong></p>
                    <p>Odontólogo UCV</p>
                
                </div>
            
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>
    
    
 <section class="contact section-gray">
    
        <div class="center">
        
            <i class="fa fa-envelope-o background-icon"></i>
            <div class="contact-details">

                <div class="contact-detail-single">
                
                    <h3><i class="fa fa-map-marker"></i> Información</h3>
                    <p><strong>Servicios Odontológicos</strong><br /> Angélica Carmona</p>
                    <p class="without-margin-bottom">Av. Principal del Bosque <br /> Edf. Pichincha, Piso 4 <br> Chacaito, Distrito Capital</p>
                     
                </div>

                <div class="contact-detail-single">
                
                    <h3><i class="fa fa-envelope-o"></i> Detalles de Contacto</h3>
                    <p>E-mail: <br /><a href="#">citas@dentalangelica.com.ve</a></p>     
                    <p class="without-margin-bottom"><button class="button button-navy-blue" data-action="show-contact-popup">Contactenos! <i class="fa fa-paper-plane-o"></i></button></p>
                
                </div>
                
                <div class="contact-detail-single contact-detail-single-last">
                
                    <h2>0424 854 71 73</h2><br>
                    <h2>0212 953 78 43</h2><br>
                    <h2>0212 953 30 91</h2><br> 
                    <h2>0212 953 61 84</h2><br> 
                    <p class="without-margin-bottom">Disponible de Lunes a Viernes <br> de 8:00am - 4:00pm</p> 
                
                </div>
            
            </div>

        </div>
    
    </section>

    <footer>

        <div class="center">

            <div class="green-line">
            </div>
        
            <nav>
        
                <ul class="left">
    
                  <!--  <li>
                    
                        <h4>Insurances</h4>  
                        <ul class="sub">
                        
                            <li><a href="/life-insurance.html">Life insurance</a></li>
                            <li><a href="/car-insurance.html">Car insurance</a></li>
                            <li><a href="/house-insurance.html">House insurance</a></li>
                            <li><a href="/travel-insurance.html">Travel insurance</a></li>
                        
                        </ul>
                    
                    </li> -->
    
                  <!--  <li>
                    
                        <h4>Pages</h4>
                        <ul class="sub">
                        
                            <li><a href="/index.html">Home</a></li>
                            <li><a href="/agents.html">Agents</a></li>
                            <li><a href="/claims.html">Claims</a></li>
                            <li><button class="menu-element" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote</button></li>
                            <li><a href="/blog.html">Blog</a></li>
                            <li><button class="menu-element" data-action="show-contact-popup">Contact</button></li>
                        
                        </ul>
                    
                    </li> -->
                    
                    <li>
                    
                        <h4>Siguenos!</h4>
                        <ul class="sub">
                        
                            <li><a href="https://www.facebook.com/groups/762399547206544/">Facebook</a></li>
                          <!--  <li><a href="#">Google+</a></li> -->
                        
                        </ul>
                    
                    </li>
                    
                </ul>
            
            </nav>
            
            <ul class="right">
            
                <li>Copyright &copy; 2016 <span class="divider">&middot;</span> <a href="http://www.gendigital.com.ve/index.html">Diseñado por Generación Digital</a></li>
               <!-- <li><div class="fb-like" data-href="https://www.facebook.com/envato" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></li> -->
            
            </ul>

            <div class="clear">
            </div>
        
        </div>
    
    </footer>

    <!--
    facebook SDK
    -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script src="_assets/_libs/jquery.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="_assets/_libs/no-ui-slider/jquery.nouislider.all.min.js"></script>
    <script src="_assets/_libs/smoothscroll.js"></script>
    <script src="_assets/_libs/parallax.js"></script>
    <script src="_assets/_js/functions.js"></script>

</body>
</html>