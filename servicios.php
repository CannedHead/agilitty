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
    $mail->Username   = "contact@cannedhead.com"; // Your full Gmail address
    $mail->Password   = "CabezaDeLata1990"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "Mensaje de contacto";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("julian@cannedhead.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();        // Send!  
    $message = $result ? 'Ya recibimos tu información, en poco tiempo nos contactaremos contigo.' : 'Sending Failed! '+$mail->ErrorInfo;      
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
                            <a href="">Servicios</a>
                        </li>
                        <li>
                            <a href="home.php">Nosotros</a>
                        </li>
                    </ul>
                    <img class="img-responsive navbarbrand" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/logo.svg" alt="zynergy">
                </nav>
       
        <div id="fullpage">

            <div class="section bg-blue">
                <div class="row h-row">
                    <div class="col-xs-3 amenu">
                        <ul class="list-unstyled menu">
                            <li>
                                <a class="active bg-green" href="#firstPage">Aseo</a>
                            </li>
                            <li>
                                <a href="#secondPage">Seguridad</a>
                            </li>
                            <li>
                                <a href="#thirdPage">Mantenimiento y Reparacion</a>
                            </li>
                        </ul>                    
                    </div>
                    <div class="col-xs-12 aimg">
                            <img class="shadow-blue a1" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/a1.png" alt=""> 
                            <img class="shadow-blue a2 " src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/a2.png" alt=""> 
                            <img class="shadow-blue a3" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/a3.png" alt=""> 
                            <img class="shadow-blue a4 " src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/a4.png" alt=""> 
                    
                    </div>
                    <div class="col-xs-9 aline">
                        <img class="" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/aseoline.svg" alt=""> 
                    </div>
                    <div class="col-xs-3 a-text bg-green2">
                        <p><b>Aseo general:</b> <span class="atw"> Disponible todos los días de la semana.</span> </p> 
                        <hr>
                        <P><b>Aseo especial:</b> <span class="atw">Limpiar y aspirar internamente los cajeros (contamos con acompañamiento en seguridad profesional. Recomendable cada 3 meses.</span> <p>   
                    </div>
                </div>
            </div>


            <div class="section bg-blue">
               <div class="row se">
                    <div class="col-xs-3">
                        <ul class="list-unstyled menu">
                            <li>
                                <a class="" href="#firstPage">Aseo</a>
                            </li>
                            <li>
                                <a class="active bg-green" href="#secondPage">Seguridad</a>
                            </li>
                            <li>
                                <a href="#thirdPage">Mantenimiento y Reparacion</a>
                            </li>
                
                        </ul>                    
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-8 col-xs-offset-2 s-img">
                            <img class="shadow-blue s1" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/s1.jpg" alt=""> 
                        </div>
                    </div>
                    <div class="col-xs-12 sline no-padding">
                        <img class="" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/seline.svg" alt=""> 
                    </div>
                </div>
            </div>


            <div class="section bg-blue">
               <div class="row h-row">
                    <div class="col-xs-3">
                        <ul class="list-unstyled menu">
                            <li>
                                <a class="" href="#firstPage">Aseo</a>
                            </li>
                            <li>
                                <a  href="#secondPage">Seguridad</a>
                            </li>
                            <li>
                                <a class="active bg-green" href="#thirdPage">Mantenimiento y Reparacion</a>
                            </li>
                        </ul>                    
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-7">
                            <div class="col-xs-12 m1">
                                <img class="shadow-blue s1" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/s1.jpg" alt=""> 
                            </div>
                            <div class="col-xs-3 col-xs-offset-1">
                                <img class="" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/salto.svg" alt=""> 
                                <br>
                                <p>Resolvemos inconvenientes con prontitud</p>
                            </div>

                            <div class="col-xs-5">
                                <img class=" m2 s1" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/m3.svg" alt=""> 
                               
                            </div>
                        </div>
                        <div class="col-xs-5 ul ">
                            <div class="col-xs-7 bg-green2 ">
                                <h4> Personal multitécnico en </h2>
                            </div>
                            <div class="col-xs-7 bg-green2 mm">
                                <p> Soluciones mecánicas </p>
                            </div>
                            <div class="col-xs-7 bg-green2 mm">
                                <p> Soluciones eléctricas </p>
                            </div>
                            <div class="col-xs-7 bg-green2 mm">
                                <p> Restauración estética </p>
                            </div>

                            <img class="col-xs-7 no-padding shadow-blue mmm" src="https://s3-sa-east-1.amazonaws.com/cannedhead.zynergy/agility/m2.png" alt=""> 
                        </div>
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
                                  <br/>
                                  <input type="text" name="emailid" placeholder="Email" />
                                  <br/>
                                  <textarea rows="4" cols="20" name="comments" placeholder="Mensaje"></textarea>
                                  <br/>
                                  <input class="enviar" type="submit" name="submit" value="Enviar" />
                                  <p class="ans"><?php if(!empty($message)) echo $message; ?></p>
                                </fieldset>
                            </form>
                            
                        </div>
                        <div class="col-sm-4 dir">

                            <h5>Dirección: Cra 63 # 98b-25 </h4>
                            <h5>Teléfonos: 3099262-3118473458</h4>
                            <h5>info@ecopublicity.com.co</h4>
                            
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
                    anchors:['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage','sixPage'],
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

                    },

                     afterLoad: function(anchorLink, index){
                        var loadedSection = $(this);

    

                        //using anchorLink
                        if(anchorLink == 'firstPage'){
                            $("#barra").css("opacity", "0");
                            
                        }
                    }

                   
                    

                });
  

                
            });
            
        </script>
    </body>
</html>
