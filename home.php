<?php
if(isset($_POST['submit'])) 
{

$message=
'Nombre Completo: '.$_POST['fullname'].'<br />
Email:  '.$_POST['emailid'].'<br />
Mensaje:   '.$_POST['comments'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "tls";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 587;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "email@gmail.com"; // Your full Gmail address
    $mail->Password   = "password"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "Mensaje de contacto";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("julian@cannedhead.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();        // Send!  
    $message = $result ? 'Successfully Sent!' : 'Sending Failed! '+$mail->ErrorInfo;      
    unset($mail);

}
?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        
    </head>
    <body>
         <nav class="col-xs-12 no-padding nav" id="navbar myMenu " >
                    <img id="barra" class="img-responsive " src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/menu.svg" alt=""> 
                    <ul class="list-inline">
                        <li>
                            <a href="servicios.html">Servicios</a>
                        </li>
                        <li>
                            <a href="home.html">Nosotros</a>
                        </li>
                    </ul>
                    <img class="img-responsive navbarbrand" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/logo.svg" alt="zynergy">
                </nav>
       
        <div id="fullpage">
            <div class="section first">
                <div class="intro"></div>
                <div class="col-xs-4 col-xs-offset-4">
                    <img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/logo.svg" alt="zynergy">
                </div>
                <div class="col-xs-12 texto">
                    <h1 class="text-right">Soluciones integrales para cajeros automaticos</h1>
                </div>
                <div class="col-xs-2 col-xs-offset-5">
                    <div class="col-xs-10 col-xs-offset-1">
                        <a href="#secondPage">
                            <img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/arrow.svg" alt="zynergy">
                        </a>
                    </div>
                </div>
                
            </div>  
                

            <div class="section bg-blue">
                  

  
                
                <div class="row h-row">
                    <div class="col-xs-3">
                        <ul class="list-unstyled menu">
                            <li>
                                <a class="active bg-green" href="#secondPage">Presentacion personal</a>
                            </li>
                            <li>
                                <a href="#thirdPage">Centro de control</a>
                            </li>
                            <li>
                                <a href="#fourthPage">Impacto social</a>
                            </li>
                            <li>
                                <a href="#fifthPage">Impacto Ambiental</a>
                            </li>
                        </ul>                    
                    </div>
                    <div class="col-xs-3 col-xs-offset-2">
                        <img class="img-responsive shadow-blue aloneman" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/p1.jpg" alt="">             
                    </div>
                    <div class="col-xs-3 col-xs-offset-1">
                        <img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/llave.svg" alt="">             
                    </div>
                </div>
                <div class="row mans">
                    <div class="manone">
                        <img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/p2.png" alt=""> 
                    </div>
                    <div class="white-box left">
                        <div class="thumbnail shadow-blue">
                            <p>Todos los técnicos están dotados con uniformes y carnés, permitiendo la fácil identificación por parte de los usuarios de los cajeros generando confiabilidad.</p>
                        </div>
                    </div>
                    <div class="mantwo">
                        <img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/p3.png" alt=""> 
                    </div>
                    <div class="white-box right">
                        <div class="thumbnail shadow-blue">
                            <p>En busca de proteger la integridad de los tecnicos, los uniformes están debidamente señalizados con reflectores que permiten su sana movilidad en las motos.</p>
                        </div>
                    </div>
                    <div class="manthree">
                        <img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/p4.png" alt=""> 
                    </div>
                </div>
            </div>
            <div class="section bg-blue">
                <div class="row h-row">
                    <div class="col-xs-6">
                        <div class="col-xs-6">
                            <ul class="list-unstyled menu">
                                <li>
                                    <a href="#secondPage">Presentacion personal</a>
                                </li>
                                <li>
                                    <a class="active bg-green" href="#thirdPage">Centro de control</a>
                                </li>
                                <li>
                                    <a href="#fourthPage">Impacto social</a>
                                </li>
                                <li>
                                    <a href="#fifthPage">Impacto Ambiental</a>
                                </li>
                            </ul>                                             
                        </div>
                        <div class="col-xs-8 col-xs-offset-4">
                            <div class="thumbnail shadow-blue c-one">
                                <p>Operamos bajo seguimiento GPS, cda uno de nuestros especialistas lleva consigo un SmartPhone esto nos permite gestionar rutas más eficientes, la comunicación constante es importante para reaccionar de forma exprés ante las variables de la ciudad</p>
                            </div>                     
                        </div> 
                        <div class="col-xs-8 c-two">
                            <img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/c1.png" alt="">   
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-12 no-padding">
                            <img class="img-responsive shadow-blue c-three" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/c2.png" alt="">
                        </div>
                        <div class="col-xs-12 no-padding c-four">
                            <div class="thumbnail shadow-blue">
                                <p>A través de seguimiento satélital podemos garantizar que el técnico asistió a todos los cajeros establecidos en su ruta, podemos garantizar tecnológicamente que se están cumpliendo con las visitas técnicas pactadas con el cliente.</p>
                            </div>                     
                        </div>
                    </div>
                    <div class="col-xs-3 no-padding-left c-five">
                        <img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/c3.png" alt="">   
                    </div>                                       
                </div>
            </div>
            <div class="section bg-blue">
                <div class="row h-row">
                    <div class="col-xs-3">
                        <ul class="list-unstyled menu">
                            <li>
                                <a href="#secondPage">Presentacion personal</a>
                            </li>
                            <li>
                                <a href="#thirdPage">Centro de control</a>
                            </li>
                            <li>
                                <a class="active bg-green" href="#fourthPage">Impacto social</a>
                            </li>
                            <li>
                                <a href="#fifthPage">Impacto Ambiental</a>
                            </li>
                        </ul>  
                        <div class="col-xs-12">
                           <img class="img-responsive shadow-blue i-one" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/i1.png">
                        </div> 
                        <div class="col-xs-12">
                            <div class="thumbnail shadow-blue i-two">
                                <p>Circunstancias como: basuras abandonadas en espacio público, accidentes vehiculares, eventos de donación de sangre, culturales, de vacunación, adopción de mascotas,  obras en construcción, calles averiadas, alcantarillas sin tapa, aceras deterioradas, entre otras, son reportadas por nuestros técnicos.</p>
                            </div> 
                        </div>                  
                    </div>
                    <div class="col-xs-3 ">
                        <div class="thumbnail shadow-blue i-three">
                            <p>Vía  Twitter  (@AzeaSustentable), generamos contenido redes sociales, con información relevantes para la movilidad ciudadana</p>
                        </div> 
                    </div>
                    <div class="col-xs-6">
                        <img class="img-responsive shadow-blue i-four" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/i2.jpg">
                    </div> 
                </div>
            </div>
            <div class="section bg-blue">
                <div class="row h-row">
                    <div class="col-xs-3">
                        <ul class="list-unstyled menu">
                            <li>
                                <a href="#secondPage">Presentacion personal</a>
                            </li>
                            <li>
                                <a href="#thirdPage">Centro de control</a>
                            </li>
                            <li>
                                <a href="#fourthPage">Impacto social</a>
                            </li>
                            <li>
                                <a class="active bg-green" href="#fifhtPage">Impacto Ambiental</a>
                            </li>
                        </ul>  
                        <div class="thumbnail shadow-blue ia-one">
                            <p>Optimizamos las rutas de cada técnicp, logrando que se reduzca el consumo de gasolina y la emisión de CO2 a a atmósfera.</p>
                        </div>                   
                    </div>
                    <div class="col-xs-4 ia-block-one">
                        <img class="img-responsive shadow-blue" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/im1.png" alt=""> 
                        <img class="img-responsive moto" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/moto.svg" alt=""> 
                        <img class="img-responsive shadow-blue ia-img4" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/im2.png" alt=""> 
                    </div>
                    <div class="col-xs-4 col-xs-offset-1">
                        <div class="thumbnail shadow-blue col-xs-7 ia-two">
                            <p>Reciclamos el papel que se recoge en los cajeros, de esta forma compensamos parte del impacto ambiental producto en nuestra actividad.</p>
                        </div> 
                        <img class="img-responsive shadow-blue ia-img2" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/im3.png" alt="">  
                    </div>
                </div>
            </div>


            <div class="section contact">
                <div class="container">
                    <div class="col-sm-12 con">
                        <div class="col-sm-8">
                            <form class="col-sm-8" name="form1" id="form1" action="" method="post">
                                <fieldset>
                                  <input type="text" name="fullname" placeholder="Nombre Completo" />
                                  <br />
                                  <input type="text" name="emailid" placeholder="Email" />
                                  <br />
                                  <textarea rows="4" cols="20" name="comments" placeholder="Mensaje"></textarea>
                                  <br />
                                  <input class="enviar" type="submit" name="submit" value="Enviar" />
                                </fieldset>
                            </form>
                            <p><?php if(!empty($message)) echo $message; ?></p
                        </div>
                        <div class="col-sm-4 dir">

                            <h5>Dirección: Cra 63 # 98b-25 </h4>
                            <h5>Teléfonos: 3099262-3118473458</h4>
                            <h5>info@ecopublicity.com.co</h4>
                            
                        </div>
                    </div>
                    
                </div>
              
            </div>

           
        </div>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
        <script src="js/jquery.easings.min.js"></script>
        <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.fullPage.js"></script>

        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    anchors:['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage' , 'sixPage'],
                    menu: '#myMenu',

                    onLeave: function(index, nextIndex, direction){
                        var leavingSection = $(this);

                        //after leaving section 2
                        if(index == 1 && direction =='down'){
                            $("#barra").css("opacity", "1");
                            
                        }

                        else if(index == 2 && direction == 'up'){
                            $("#barra").css("opacity", "0");
                        }
                    }


                    
                    

                });
  

                
            });
            
        </script>
    </body>
</html>
