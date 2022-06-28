<?php 
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
            $nombreTex=$_POST['nombre'];
            $correoCliente=$_POST['correo'];
            $asunto=$_POST['asunto'];
            $mensajeTex=$_POST['mensaje'];
            
            $correoEmpresa="abraham@mobil.aullox.com";

            $header="From: ".$correoCliente."\r\n";
            $header.="Reply-to:".$correoCliente."\r\n";
            $header.="X-Mailer: PHP/".phpversion();

            $mail=mail($correoEmpresa, $asunto, $mensajeTex, $header);
        
            if($mail){
                echo '
                    <div class="div-mensaje-confirmacion" style="width: 100%; height: auto; display: flex; justify-content: center; align-items: center; border: solid 2px rgb(241, 109, 34); color: rgb(25, 135, 84); text-align: center; ">
                        <p class="p-confirmacion">Mensaje enviado correctamente</p>
                    </div>
                ';
            }else{
                echo '
                    <div class="div-mensaje-error" style="width: 100%; height: auto; display: flex; justify-content: center; align-items: center; border: solid 2px rgb(241, 109, 34); color: rgb(220, 53, 69); text-align: center;">
                        <p class="p-error">Hubo un problema al enviar el mensaje, revise los campos rellenados. Si sigue teniendo problemas comuniquese con la empresa</p>
                    </div>
                ';
            }
        }
    }
?>