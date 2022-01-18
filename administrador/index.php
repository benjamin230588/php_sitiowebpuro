<?php
if($_POST)
{
    session_start();
if ($_POST['Usuario']=="benja" && $_POST['pasword']=="123") 
{
    $_SESSION['nombreusuario']="benjamin";
    $_SESSION['usuario']="ok";
    header('Location:inicio.php'); 
}
else
{
   $mensaje="usuario incorrecto";
}
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
       <br>
       <div class="row">
       <div class="col-md-4">

       </div>
       <div class="col-md-4">

           <div class="card text-left">
            
             <div class="card-body">
             <?php if(isset($mensaje)) { ?>
                 
                 <div class="alert alert-danger" role="alert">
                     <?php echo $mensaje ?>
                 </div>
                 <?php  } ?>
                 
             <form id="forminicio" method="POST" autocomplete="off">
                    <br />
                    
                    <div class="form-row">
                        <div class="col-sm-11 col-11">

                            <input type="text" class="form-control" name="Usuario" id="Usuario" maxlength="10"  placeholder="Usuario"  required autofocus>
                        </div>
                    </div>
                    <br />
                    <div class="form-row">
                        <div class="col-sm-11 col-11">
                            <input type="password" class="form-control" name="pasword" id="pasword" placeholder="Password"  required>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="form-row">

                        <div class="col-sm-12">
                            <button id="boton" class="form-control btn btn-primary" type="submit">Ingresar</button>
                        </div>
                    </div>

                    <br />
                    <br />

                </form>

             </div>
           </div>
               
       </div>
           
       </div>
   </div>
  
  </body>
</html>