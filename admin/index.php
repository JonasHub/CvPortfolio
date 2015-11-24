<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ACCESO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
	  
	  .alert {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;

      }
	  
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>
	<script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function(e) {
        $(".alert").css('display','none');
        $("#validar").click(function(e) {
                    var mail = $("#mail").val();
                    var password = $("#password").val();
                    //var img = $("#img").attr("name");
                        $.ajax({
                        type: "POST",
                        url: "validar.php",
                        data: "mail="+mail+"&password="+password+"",
                        success: function(datos){
                            $("#mail").text("");
                            $("#password").text("");
                            
                            if(datos==1){
                                <?php 
                                session_start();
                                if (!isset($_SESSION['sesion']))
                                $_SESSION['sesion']=0;
                                ?>
                                location.href="lista_empleo.php";
                                }
							if(datos==0){
								$(".alert").fadeIn('slow');
								}
    
                            //location.reload();
                        }
                        });
                });///Fin Clic en boton de alta
    });
    
    </script>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">ACCESO USUARIO</h2>
        <input type="text" class="input-block-level" placeholder="Mail" id="mail">
        <input type="password" class="input-block-level" placeholder="Contraseña" id="password">

        <button class="btn btn-large btn-primary" type="button" id="validar">Validar</button>
      </form>
      
        <div class="alert alert-block">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Error!</h4>
            El nombre de usuario o contraseña no existen...
        </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    
	

  </body>
</html>
