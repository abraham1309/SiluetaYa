<?php 
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje'])){
            $nombreTex=$_POST['nombre'];
            $correoCliente=$_POST['correo'];
            $mensajeTex=$_POST['mensaje'];
            $asunto="Prueba";

            $correoEmpresa="abraham@mobil.aullox.com";

            $header="From: ".$correoCliente."\r\n";
            $header.="Reply-to:".$correoCliente."\r\n";
            $header.="X-Mailer: PHP/".phpversion();

            $mail=mail($correoEmpresa, $asunto, $mensajeTex, $header);
        
            if($mail){
                echo "Mensaje enviado exitosamente";
            }else{
                echo"No se pudo enviar el correo";
            }
        }
    }
?>