<?php
$error;
if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if($usuario == "root" && $password == "12345"){
        $error = "OK";
        #echo "Acceso Correcto";    
    }else{
        $error = "incorrecto";
        #alert("Por favor ingrese bien usuario y contraseña");
        header("Location: index.html?error=$error");
        #echo "Usuario o Contraseña Incorrecta";    
    }
}else {
    $error = "vacio";
    header("Location: index.html?error=$error");
    #echo "No ha ingresado datos, estan vacíos";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="style.css">
     
    
</head>
<body >
      
   
  <header>
    
    <div class="menu">
           
        
      <nav>
 
          <ul>
            <li><a href="carrucel.html">Carrousel</a></li>
            <li><a href="curriculo.html">Curriculo</a></li>
            <li><a href="leer.php">Tabla XML</a></li>
            <li><a href="un.html">Horario JSON</a></li>
            <li><a href="calculadora.html">Calculadora</a></li>
            <li><a href="index.html">Salir</a></li>
          </ul>
      </nav>
    </div>
  </header>
  <h2>Audio</h2>
     <audio class="Audio-1" src="au.mp3" controls>
            </audio> 
 <div class="contenedor" >  
        <div>
            

            <center>
                  <h2>REPRODUCE EL VIDEO</h2>
          
            <button id="btn-abrir-popup" class="btn-abrir-popup" style="background-color:#8181F7">



                 <video src="intro.mp4" autoplay loop muted width="100%" height="100%" > </video>
          </button>
        </center>
    
       



            
        <div class="overlay" id="overlay">


            <div class="popup" id="popup"  >
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h3>PIENSALO</h3>
                <h4> DISFRUTA LA VIDA</h4>

                <form action="acceso.php" method="POST" >
                        <center>
  
                        <video src="vide.mp4" widt="500" height="300" type="vide/mp4" controls></video>
                        </center>
             </form>  
            </div>
        </div>
    </div>
    

    <script src="popup.js"></script>
</body>
</html>