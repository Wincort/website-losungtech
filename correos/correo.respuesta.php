<?php
$Email=isset($_REQUEST['correo'])?$_REQUEST['correo']:"correo@ejemplo.com";
$Nombre=isset($_REQUEST['nombre'])?$_REQUEST['nombre']:"---";
$Apellido=isset($_REQUEST['apellido'])?$_REQUEST['apellido']:"---";
$Telefono=isset($_REQUEST['telefono'])?$_REQUEST['telefono']:"---";
$Mensaje=isset($_REQUEST['mensaje'])?$_REQUEST['mensaje']:"---";

require "PHPMailer/PHPMailerAutoload.php";
    function smtpmailer($to, $from, $from_name, $subject, $body){
        $mail = new PHPMailer();
        //$mail->SMTPDebug = 2; 
        $mail->IsSMTP();
        $mail->SMTPAuth = false; 
        $mail->SMTPAutoTLS = false; 
        $mail->Host = 'localhost';
        $mail->Port = 25;  
        $mail->Username = '';
        $mail->Password = '';   
        $mail->CharSet = 'UTF-8';
        $mail->IsHTML(true);
        $mail->From="correo@ejemplo.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ='{"status":false,"titulo":"No se pudo enviar el correo de confirmación","mensaje":"Intente enviar su mensaje en otro momento"}';
            return $error; 
        }
        else 
        {
            $error = '{"status":true,"titulo":"Correo de confirmación enviado","mensaje":"Revise el correo de confirmación en su bandeja de entrado o en correo no deseado"}';  
            return $error;
        }
    }
    
    $to   = $Email;
    $from = 'correo@ejemplo.com';
    $name = 'Lösung Tech';
    $subj = 'Gracias por contactarnos';
    $msg = '
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Lösung Tech</title>
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
            <style>
                body,h1,h2,h3 {font-weight: 200;font-family: "Open Sans", sans-serif;color: #444242;font-weight: 400;}
                body{padding:5px; margin:5px; color:#444242;}
                a {text-decoration: none;color: #162e49;}
                hr {color: #303030;}
                p, .footer-table a {color: white;}
                .main-table{text-align:center; width:99%;border:0;background-color:#F4F5F5}
                .main-table td{text-align:center;}
                .linea1{color:black; font-size:25px;padding-top:3%;}
                .linea2{color:#5984bf;}
                .linea3{color:#303030; font-weight: bold;}
                .linkWeb{font-family: "Open Sans", sans-serif;color:#FFF; font-size:25px;letter-spacing:2px;font-weight: 700;}
                .footer-table{text-align:center; width:100%;border:0;}
                .footer-table td{height:40;background-color:#303030;text-align:center;}
                
            </style>
        </head>
        <body>
            <table class="main-table">
                <tr>
                    <td colspan="2" bgcolor="#162e49">
                        <a href="https://www.losungtech.com" target="_blank">
                            <img src="https://www.losungtech.com/images/LOGO.png" width="50%">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <h1 class="linea1">¡Hola <b style="color:#162e49;">'.$Nombre.' '.$Apellido.'</b>!</h1>
                        <h2 class="linea2"><b>Gracias por ponerte en contacto con nosotros.</b></h2>
                        <hr/>
                        <h3 class="linea3">En breve un asesor se pondrá en contacto contigo.</h3>
                        <hr/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <footer>
                            <table class="footer-table">
                                <tr>
                                    <td>
                                        <a class="linkWeb" href="https://www.losungtech.com" target="_blank">www.losungtech.com</a><br>
                                        <p>Boulevard Licenciado Gustavo Díaz Ordaz, Número 130, Interior 10 entre Privada Rincón de Santa María y Boulevard Circuito de la Unidad, Colonia Santa María | Monterrey, Nuevo León | C.P. 64650</p>
                                    </td>
                                </tr>
                            </table>
                        </footer>
                    </td>
                </tr>
            </table>
        </body>
    </html>';
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    echo $error;
?>