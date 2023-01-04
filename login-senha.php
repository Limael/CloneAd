
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>
 
<body>
<?php
        if(isset($_POST["Submit"])){
            header('Location:dashboard.php');
        }
    ?>
    
    <section class="login-section">
        <div class="size-box shadow-none ps-5 pe-5 pb-5 pt-2 mb-5 bg-body-light rounded border ">
            <form method="post">
                <div class="text-center">
                    <img src="./images/logo.svg" class="img-login img-fluid" alt="logo">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
                </div>

                <p class="login-titulo text-center mb-1 mt-2">Usuario</p>

                <div class="flex-select">
                    <div class="select-user rounded-pill" aria-label="Filter select">
                        <i class="bi bi-person-circle"></i>
                        <span> user@email.com</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>

                <div class="mb-3 mt-4 input-group-lg">
                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Digite sua senha" aria-describedby="emailHelp">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Mostrar senha
                        </label>
                    </div>
                    <div class="flex-btns d-flex justify-content-between mt-5">
                        <button type="button" class="btn-esqueceu btn btn-link">Esqueceu a senha?</button>
                        <button type="submit" class="btn btn-primary"  name="Submit">Avançar</button>
                    </div>
                </div>


            </form>
        </div>
    </section>
</body>

</html>
