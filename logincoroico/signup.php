<?php include('server.php') ?>
<!DOCTYPE html>
<html>

    <head>
        
        <title>LOGIN COROICO</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
    
        <style type="text/css">
            
            body{
                
                background-color: #BDBDBD;
                background-size:cover;
                background-position:center center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                font-family: 'Century Gothic', 'CenturyGothic', 'AppleGothic', sans-serif;
            }
        
            .login{
                margin: 150px auto;
                width: 300px;
                height: auto;
                padding: 30px 25px;
                background: white;
                border: 1px solid #c4c4c4;
                border-radius: 5px;
            }
            h1.login-title {
                margin: -28px -25px 3px;
                padding: 15px 25px;
                line-height: 15px;
                font-size: 25px;
                font-weight: 300;
                color: #ADADAD;
                text-align:center;
                background-color: white;
               

            }

            .login-input {
                width: 285px;
                height: 50px;
                margin-bottom: 25px;
                padding-left:10px;
                font-size: 15px;
                background: #fff;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-family: 'Century Gothic', 'CenturyGothic', 'AppleGothic', sans-serif;
            }
            .login-input:focus {
                border-color:#6e8095;
                outline: none;
            }
            .login-button {
                width: 285px;
                height: 50px;
                padding: 0;
                font-size: 20px;
                color: #fff;
                text-align: center;
                background: #f0776c;
                border: 0;
                border-radius: 5px;
                cursor: pointer; 
                outline:0;
                font-family: 'Century Gothic', 'CenturyGothic', 'AppleGothic', sans-serif;
            }

            .login-lost
                        {
                text-align:center;
                margin-bottom:0px;
            }

            .login-lost a
                        {
                color:#666;
                text-decoration:none;
                font-size:13px;
                font-family: 'Century Gothic', 'CenturyGothic', 'AppleGothic', sans-serif;
            }

        </style>
    
    </head>

    <body>
        
       <form class="login" action="signup.php" method="POST">
           <?php include('errors.php'); ?>
        <h1 class="login-title"> <img src="Logo3.png" style="max-width:80%;width:auto;height:auto;" >
 </h1>
       <input name="username" type="text" class="login-input" placeholder="Usuario" value="<?php echo $email; ?>" autofocus>
        
        <input name="email" type="text" class="login-input" placeholder="Correo Eléctronico" value="<?php echo $email; ?>"  autofocus>
        
        <input name="password_1" type="password" class="login-input" placeholder="Contraseña">
        
        <input name="password_2" type="password" class="login-input" placeholder="Confirmar Contraseña">
        
        <input type="submit" value="Registrarse" class="login-button" name="reg_user">
        
        <p class="login-lost"><a href="login.php"> ¿Ya estas registrado?</a></p>
        
        </form>
        
    
    </body>

</html>
