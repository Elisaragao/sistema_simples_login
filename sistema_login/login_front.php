<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- REFERENCIA AO BOOTSTRAP -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <style>
        body
        {
            margin-left:400px;
            margin-top: 150px;
        }

        h2
        {
            text-align: center;
        }

        .button
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="login_back.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                
                    <h2>Login</h2>

                    <div class="form-group">
                    <input type="email" placeholder="Insira seu email" name="txtEmail" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <input type="password" placeholder="Insira sua senha" name="txtSenha" class="form-control" >
                    </div>
                <div class="button">
                    <div class="form-group">
                        <input type="submit" value="Entrar" class="btn btn-info">
                    </div>
                </div>
                   
                </form>
                
            </div>
            </div>
        </div>
    
    
    
    <?php    ?>
</body>
</html>