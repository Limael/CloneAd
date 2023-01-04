<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Dashboard-Exibição</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<body>

    <header>
        <div class="header-flex p-2">

            <img class="list-icon ms-3" src="./images/list.svg" alt="">
            <a class="btn d-flex align-items-center" href="./dashboard.php">
                <img class="logo-manager ms-4" src="./images/logoadmaneger.png" alt="">
                <span class="header-titulo ms-3">Ad Manager</span>
            </a>
            <div class="barra-pesquisa input-group flex-nowrap ms-6">
                <span class="input-group-text bg-body-secondary  border border-0" id="addon-wrapping"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control bg-body-secondary  border border-0" aria-label="Search" aria-describedby="addon-wrapping">
            </div>
            <div class="buttons-end ">
                <img src="./images/question-circle.svg" alt="">
                <img src="./images/bell.svg" alt="">
                <img src="./images/three-dots-vertical.svg" alt="">
                <img src="./images//person-circle.svg" alt="">
            </div>
        </div>
    </header>

    <div id="mySidenav" class="sidenav border">
        <div class="empresa-info d-flex border-bottom align-items-center">
            <img src="./images/buildings.svg" alt="">
            <a href="#">Koontaazul <br>
                21863267590
            </a>

        </div>

        <div class="content-side-bar">

            <button onclick="toggleVisibility('inicialDiv')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex" style="margin-left:5%">
                    <a href="../CloneAd/dashboard.php" class="side-bar-options"> <img class="icon-side-bar" src="./images/house-door-grey.svg" alt=""> Página inicial</a>

                </div>
            </button>

            <button onclick="toggleVisibility('exibicaoDiv')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/truck-grey.svg" alt=""> Exibição</a>
                </div>
            </button>
            <div id="exibicaoDiv" style="display:none">
                <div class="d-flex align-items-center flex-side-bar flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Pedidos</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Itens de linha</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Criativos</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Nativo</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Ferramentas de exibição</a>
                </div>
            </div>



            <button onclick="toggleVisibility('inventarioDiv')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/picture-in-picture-grey.svg" alt=""> inventário</a>
                </div>
            </button>
            <div id="inventarioDiv" style="display:none">
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Blocos de anúncios</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Apps</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Chaves-valor</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Predefinições de segmenta...</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Análise de tráfego</a>
                </div>
                <div class="d-flex align-items-center flex-side-bar-button">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Configurações de rede</a>
                </div>
            </div>
        </div>


        <button onclick="toggleVisibility('protecaoDiv')" style="margin-left:5%" class="button-side-bar">
            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/shield-check-grey.svg" alt=""> Proteções</a>
            </div>
        </button>


        <button onclick="toggleVisibility('relatorioDiv')" class="button-side-bar">
            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/chart-grey-side.svg" alt=""> Relatórios</a>
            </div>
        </button>
        <div id="relatorioDiv" style="display:none">
            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Relatórios</a>
            </div>
            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Modelos</a>
            </div>
        </div>

        <button onclick="toggleVisibility('otmDiv')" class="button-side-bar">
            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a class="side-bar-options"><img class="icon-side-bar" src="./images/analytics-grey.svg" alt=""> Otimização</a>
            </div>
        </button>
        <div id="otmDiv" style="display:none">
            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Oportunidades</a>
            </div>
            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="#" class="side-bar-options">Experimentos</a>
            </div>
        </div>

        <button onclick="toggleVisibility('admDiv')" class="button-side-bar">

            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a class="side-bar-options"> <img class="icon-side-bar" src="./images/wrench-grey.svg" alt=""> Administrador</a>
            </div>
        </button>

        <div id="admDiv" style="display:none">

            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Configurações globais</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Gerenciamento de ads.txt</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Acesso e autorização</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Contas vinculadas</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Exibição</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Inventário</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Áudio e vídeo</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Empresas</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Histórico de alterações</a>
            </div>


            <div class="d-flex align-items-center flex-side-bar-button">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <a href="./usuario.php" class="side-bar-options">Gerenciamento de múltiplos... </a>
            </div>


        </div>
    </div>


    </div>

    <div class="dashboard-header">
        <div class="div-flex-header border-bottom border-top">
            <div class="flex-left">
                <span class="pgInicial-text">Página inicial: Anunciantes</span>

                <div class="dropdown">
                    <button class="dropdown-toggle bg-transparent border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <img src="./images/question-circle.svg" alt="">

            </div>

        </div>


    </div>

    <section class="dashboard-select" class="dashboard-contents" style="background-color: #f1f3f4; " >
      
        <div class="d-flex justify-content-center pt-4 " >
        <div style="width:60%;" class="barra-pesquisa input-group flex-nowrap ms-6">
                <span class="input-group-text bg-body-secondary  border border-0" id="addon-wrapping"><i class="bi bi-search"></i></span>
                <input placeholder="Pesquisar anunciantes classificados" type="text" class="form-control bg-body-secondary  border border-0" aria-label="Search" aria-describedby="addon-wrapping">
                <img class="ms-2" src="./images/question-circle.svg" alt="">  
            </div>
           
        </div>

 
    </section>
</body>


<script>
    function toggleVisibility(id) {
        var div = document.getElementById(id);
        if (div.style.display === "none") {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
</script>



</html>