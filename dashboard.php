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
    <title>Dashboard</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<body>

    <header>
        <div class="header-flex p-2">

            <button class="btn ms-3" id="menu-btn">
                <img class="list-icon " src="./images/list.svg" alt="">
            </button>
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
            <div class="d-flex flex-column ms-3">
                <a href="#">KoontaAzul</a>
                <span> 21863267590 </span>
            </div>
        </div>

        <div class="content-side-bar">

            <button onclick="toggleVisibility('inicialDiv')" class="button-side-bar">
                <a href="../CloneAd/dashboard.php" class="d-flex align-items-center flex-side-bar side-button-flex text-decoration-none" style="margin-left:5%">
                    <span class="side-bar-options"> <img class="icon-side-bar" src="./images/house-door-grey.svg" alt=""> Página inicial</span>
                </a>
            </button>

            <button onclick="toggleVisibility('exibicaoDiv')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex ">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/truck-grey.svg" alt=""> Exibição</a>
                </div>
            </button>
            <div id="exibicaoDiv" style="display:none">
                <a class="d-flex align-items-center flex-side-bar flex-side-bar-button text-decoration-none" href="#">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Pedidos</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Itens de linha</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Criativos</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Nativo</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Ferramentas de exibição</span>
                </a>
            </div>



            <button onclick="toggleVisibility('inventarioDiv')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/picture-in-picture-grey.svg" alt=""> Inventário</a>
                </div>
            </button>

            <div id="inventarioDiv" style="display:none">
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Blocos de anúncios</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Apps</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Chaves-valor</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Predefinições de segmenta...</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Análise de tráfego</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Configurações de rede</span>
                </a>
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

            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Relatórios</span>
            </a>
            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Modelos</span>
            </a>
        </div>

        <button onclick="toggleVisibility('otmDiv')" class="button-side-bar">
            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a class="side-bar-options"><img class="icon-side-bar" src="./images/analytics-grey.svg" alt=""> Otimização</a>
            </div>
        </button>
        <div id="otmDiv" style="display:none">

            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Oportunidades</span>
            </a>
            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Experimentos</span>
            </a>
        </div>

        <button onclick="toggleVisibility('admDiv')" class="button-side-bar">

            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a class="side-bar-options"> <img class="icon-side-bar" src="./images/wrench-grey.svg" alt=""> Administrador</a>
            </div>
        </button>

        <div id="admDiv" style="display:none">

            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Configurações globais</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Gerenciamento de ads.txt</span>
            </a>


            <a href="./usuario.php" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Acesso e autorização</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Contas vinculadas</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Exibição</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Inventário</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Áudio e vídeo</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Empresas</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Histórico de alterações</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Gerenciamento de múltiplos... </span>
            </a>


        </div>
    </div>

    <div id="mySidenav-full" class="sidenav border">
        <div class="empresa-info d-flex border-bottom align-items-center">
            <img src="./images/buildings.svg" alt="">
            <div class="d-flex flex-column ms-3">
                <a href="#">KoontaAzul</a>
                <span> 21863267590 </span>
            </div>
        </div>

        <div class="content-side-bar">

            <button onclick="toggleVisibilityMax('inicialDiv')" class="button-side-bar">
                <a href="../CloneAd/dashboard.php" class="d-flex align-items-center flex-side-bar side-button-flex text-decoration-none" style="margin-left:5%">
                    <span class="side-bar-options"> <img class="icon-side-bar" src="./images/house-door-grey.svg" alt=""> Página inicial</span>
                </a>
            </button>

            <button onclick="toggleVisibilityMax('exibicaoDivFull')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex ">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/truck-grey.svg" alt=""> Exibição</a>
                </div>
            </button>
            <div id="exibicaoDivFull" style="display:none">
                <a class="d-flex align-items-center flex-side-bar flex-side-bar-button text-decoration-none" href="#">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Pedidos</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Itens de linha</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Criativos</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Nativo</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Ferramentas de exibição</span>
                </a>
            </div>



            <button onclick="toggleVisibilityMax('inventarioDivMax')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/picture-in-picture-grey.svg" alt=""> Inventário</a>
                </div>
            </button>

            <div id="inventarioDivMax" style="display:none">
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Blocos de anúncios</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Apps</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Chaves-valor</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Predefinições de segmenta...</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Análise de tráfego</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Configurações de rede</span>
                </a>
            </div>




            <button onclick="toggleVisibilityMax('protecaoDiv')" style="margin-left:5%" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/shield-check-grey.svg" alt=""> Proteções</a>
                </div>
            </button>


            <button onclick="toggleVisibilityMax('relatorioDiv')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/chart-grey-side.svg" alt=""> Relatórios</a>
                </div>
            </button>
            <div id="relatorioDiv" style="display:none">

                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Relatórios</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Modelos</span>
                </a>
            </div>

            <button onclick="toggleVisibilityMax('otmDivMax')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a class="side-bar-options"><img class="icon-side-bar" src="./images/analytics-grey.svg" alt=""> Otimização</a>
                </div>
            </button>
            <div id="otmDivMax" style="display:none">

                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Oportunidades</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Experimentos</span>
                </a>
            </div>

            <button onclick="toggleVisibilityMax('admDivMax')" class="button-side-bar">

                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a class="side-bar-options"> <img class="icon-side-bar" src="./images/wrench-grey.svg" alt=""> Administrador</a>
                </div>
            </button>

            <div id="admDivMax" style="display:none">

                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Configurações globais</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Gerenciamento de ads.txt</span>
                </a>


                <a href="./usuario.php" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Acesso e autorização</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Contas vinculadas</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Exibição</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Inventário</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Áudio e vídeo</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Empresas</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Histórico de alterações</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Gerenciamento de múltiplos... </span>
                </a>
            </div>

        </div>
    </div>


    </div>

    <div class="dashboard-header">
        <div class="div-flex-header border-bottom border-top">
            <div class="flex-left">
                <span class="pgInicial-text">Página inicial: Visão geral</span>
                <div class="badges">
                    <span class="badge text-bg-light border" style="font-weight: 400;letter-spacing: .08em;text-transform: uppercase;font-size: .5rem;padding-bottom: 1%;">Personalizável</span>
                    <span class="badge bg-success-subtle text-success beta-badge">BETA</span>
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
            <div>
                <select class="form-select form-select-sm selecionar-responsivo" aria-label=".form-select-sm example">
                    <option selected>Escolha uma opção</option>
                    <option value="1">Personalizar</option>
                    <option value="2">Adicionar card de dados</option>
                    <option value="3">Redefinir papel</option>
                </select>
            </div>

            <div class="flex-right">

                <button class="btn btn-primary" type="submit"><img src="./images/chart.svg" alt=""> Personalizar</button>
                <button class="btn btn-primary" type="submit"><img src="./images/plus.svg" alt=""> Adicionar card de dados</button>
                <button type="button" class="btn btn-outline-secondary" disabled>Redefinir painel</button>
            </div>
        </div>

        <div class="div-flex border-bottom">
            <div class="flex-date border-end p-2  d-flex justify-content-center">
                <form>
                    <div class="row form-group mb-0">
                        <div class="col-sm-4">
                            <div class="input-group date d-flex border-bottom" style="width: 16vw;" id="datepicker">
                                <input type="text" class="form-control border border-0">
                                <span class="input-group-append">
                                    <span class="input-group-text  border border-0 bg-white">
                                        <i class="bi bi-caret-down-fill"></i>
                                    </span>
                                </span>
                            </div>

                        </div>
                    </div>
                </form>
                <img src="./images/question-circle.svg" alt="">
                </section>


            </div>
            <div class="filter-flex ">
                <img class="p-2" src="./images/funnel.svg" alt="">

                <div>
                    <input type="text" class="form-control border border-0" id="exampleFormControlInput1" placeholder="Adicionar filtro">
                </div>
            </div>
        </div>

    </div>

    <section class="dashboard-select" class="dashboard-contents" style="background-color: #f1f3f4;">
        <div class="container-primeiros container d-flex justify-content-center pt-4">

            <div class="card card-visao">
                <div class="card-body pb-5">
                    <div class="top-header d-flex align-items-start">
                        <h5 class="card-title title-visao me-1">Visão geral</h5>
                        <img src="./images/question-circle.svg" alt="">
                    </div>
                    <div class="card-content mt-5 mb-3 text-center d-flex align-items-center">
                        <img class="card-img-info" src="./images/filter_adjustment.png" alt="">
                        <p class="card-text">Nenhum resultado para os filtros e as datas selecionados.</br> Ajuste a seleção.</p>
                    </div>
                </div>
            </div>

            <div class="card ms-4 card-procurando">
                <div class="card-body pb-5 ">
                    <div class="top-header d-flex align-items-start">
                        <h5 class="card-title">Procurando insights</h5>
                    </div>
                    <div class="card-content mb-3 ">
                        <p class="card-text">Estamos acompanhando as mudanças e tendências significativas na sua rede nos últimos 30 dias. Volte amanhã para ver se há atualizações.</p>
                        <p class="card-text-info">Sobre este painel <img class="pb-2" src="./images/box-arrow-up-right.svg" alt=""></p>
                        <p class="card-text-info">O que há de novo no Ad Manager <img class="pb-2" src="./images/box-arrow-up-right.svg" alt=""></p>

                    </div>
                </div>
            </div>

        </div>
        <div class="container d-flex justify-content-center pt-4">
            <div class="card card-generic">
                <div class="card-body pb-5">
                    <div class="top-header d-flex align-items-start justify-content-between">
                        <div class="d-flex align-items-start">
                            <h5 class="card-title me-1 title-indica">Indicadores de vídeo programático</h5>
                            <img src="./images/question-circle.svg" alt="">
                        </div>
                        <select class="form-select" style="width: 30%;" aria-label="Default select example">
                            <option selected>Todas as plataformas de vídeo</option>
                            <option value="1">Web</option>
                            <option value="2">Tv e console de jogos</option>
                            <option value="3">App para dispositivos móveis</option>
                        </select>
                    </div>
                    <div class="card-content mt-5 mb-3 text-center d-flex align-items-center">
                        <img class="card-img-info" src="./images/filter_adjustment.png" alt="">
                        <p class="card-text">Nenhum resultado para os filtros e as datas selecionados.</br> Ajuste a seleção.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container d-flex justify-content-center pt-4">

            <div class="card card-generic">
                <div class="card-body pb-5">
                    <div class="top-header d-flex align-items-start">
                        <h5 class="card-title me-1">Erros de VAST</h5>
                        <img src="./images/question-circle.svg" alt="">
                        <span class="badge bg-success-subtle text-success beta-badge ms-1">BETA</span>
                    </div>
                    <div class="second-card-header d-flex border">
                        <span>Selecionar visualiazação</span> <img class="pb-2" src="./images/question-circle.svg" alt="">
                        <div class="d-flex ms-4">
                            <input class="form-check-input me-2 mt-0" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                            <span>Visão geral</span>
                        </div>
                        <div class="d-flex ms-4">
                            <input class="form-check-input me-2 mt-0" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
                            <span>Visualização do item de linha</span>
                        </div>

                    </div>
                    <div class="card-content mt-5 mb-3 text-center d-flex align-items-center">
                        <img class="card-img-info" src="./images/filter_adjustment.png" alt="">
                        <p class="card-text">Nenhum resultado para os filtros e as datas selecionados.</br> Ajuste a seleção.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center pt-4">

            <div class="card card-generic">
                <div class="card-body pb-5">
                    <div class="top-header d-flex align-items-start">
                        <h5 class="card-title me-1">Principais regras de precificação</h5>
                        <img src="./images/question-circle.svg" alt="">
                    </div>
                    <div class="card-content mt-5 mb-3 text-center d-flex align-items-center">
                        <img class="card-img-info" src="./images/filter_adjustment.png" alt="">
                        <p class="card-text">Nenhum resultado para os filtros e as datas selecionados.</br> Ajuste a seleção.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center pt-4">

            <div class="card card-generic">
                <div class="card-body pb-5">
                    <div class="top-header d-flex align-items-start">
                        <h5 class="card-title me-1">Visão geral do desempenho do app</h5>
                        <img src="./images/question-circle.svg" alt="">
                    </div>
                    <div class="card-content mt-5 mb-3 text-center d-flex align-items-center">
                        <img class="card-img-info" src="./images/filter_adjustment.png" alt="">
                        <p class="card-text">Nenhum resultado para os filtros e as datas selecionados.</br> Ajuste a seleção.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center pt-4">

            <div class="card card-generic">
                <div class="card-body pb-5 ps-0 pe-0">
                    <div class="top-header d-flex align-items-start justify-content-between">
                        <div class="d-flex align-items-start">
                            <h5 class="card-title me-1 ps-3">Comparação de demanda</h5>
                            <img src="./images/question-circle.svg" alt="">
                        </div>
                        <select class="form-select" style="width: 20%;" aria-label="Default select example">
                            <option selected>Impressões</option>
                            <option value="1">Receita</option>
                            <option value="2">eCPM</option>
                            <option value="3">Visibilidade</option>
                        </select>
                    </div>
                    <div class="card-content mt-5 mb-3 text-center d-flex align-items-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="d-flex">
                                    <th class="d-flex flex-column tabela" style="border-bottom: solid 4px rgb(66, 133, 244);" scope="col">
                                        <select class="form-select comp-deman" style="width: 100%;" aria-label="Default select example">
                                            <option selected>Não preenchidas</option>
                                            <option value="1">Leilão aberto (geral)</option>
                                            <option value="2">Leilão aberto (Acesso preferencial)</option>
                                            <option value="3">Leilão privado</option>
                                            <option>Outro</option>
                                            <option>Servidor de anúncios</option>
                                            <option>Transações preferenciais</option>
                                            <option>Programática garantida</option>
                                            <option>Patrocínio</option>
                                            <option>Padrão</option>
                                            <option>Prioridades de preços</option>
                                            <option>Em massa</option>
                                            <option>Interno</option>
                                            <option>Rede</option>
                                            <option>Outro</option>
                                            <option>Lances de cabeçalhos (detectados)</option>
                                            <option>Open Biding</option>
                                            <option>AdSense</option>
                                            <option>Mediação</option>
                                            <option>Não preenchidas</option>
                                            <option>Todos os canais de demanda</option>




                                        </select>
                                        <span class="chart-info">32,6 mil</span>
                                    </th>

                                    <th class="d-flex flex-column tabela" style="border-bottom: solid 4px rgb(234, 67, 53);" scope="col">
                                        <select class="form-select comp-deman" style="width: 100%;" aria-label="Default select example">
                                            <option selected>Não preenchidas</option>
                                            <option value="1">Leilão aberto (geral)</option>
                                            <option value="2">Leilão aberto (Acesso preferencial)</option>
                                            <option value="3">Leilão privado</option>
                                            <option>Outro</option>
                                            <option>Servidor de anúncios</option>
                                            <option>Transações preferenciais</option>
                                            <option>Programática garantida</option>
                                            <option>Patrocínio</option>
                                            <option>Padrão</option>
                                            <option>Prioridades de preços</option>
                                            <option>Em massa</option>
                                            <option>Interno</option>
                                            <option>Rede</option>
                                            <option>Outro</option>
                                            <option>Lances de cabeçalhos (detectados)</option>
                                            <option>Open Biding</option>
                                            <option>AdSense</option>
                                            <option>Mediação</option>
                                            <option>Não preenchidas</option>
                                            <option>Todos os canais de demanda</option>
                                        </select>
                                        <span class="chart-info">0</span>
                                    </th>

                                    <th class="d-flex flex-column tabela" style="border-bottom: solid 4px rgb(232, 113, 10);" scope="col">
                                        <select class="form-select comp-deman" style="width: 100%;" aria-label="Default select example">
                                            <option selected>Não preenchidas</option>
                                            <option value="1">Leilão aberto (geral)</option>
                                            <option value="2">Leilão aberto (Acesso preferencial)</option>
                                            <option value="3">Leilão privado</option>
                                            <option>Outro</option>
                                            <option>Servidor de anúncios</option>
                                            <option>Transações preferenciais</option>
                                            <option>Programática garantida</option>
                                            <option>Patrocínio</option>
                                            <option>Padrão</option>
                                            <option>Prioridades de preços</option>
                                            <option>Em massa</option>
                                            <option>Interno</option>
                                            <option>Rede</option>
                                            <option>Outro</option>
                                            <option>Lances de cabeçalhos (detectados)</option>
                                            <option>Open Biding</option>
                                            <option>AdSense</option>
                                            <option>Mediação</option>
                                            <option>Não preenchidas</option>
                                            <option>Todos os canais de demanda</option>
                                        </select>
                                        <span class="chart-info">0</span>
                                    </th>

                                    <th class="d-flex flex-column tabela" style="border-bottom: solid 4px rgb(161, 66, 244);" scope="col">
                                        <select class="form-select comp-deman" style="width: 100%;" aria-label="Default select example">
                                            <option selected>Não preenchidas</option>
                                            <option value="1">Leilão aberto (geral)</option>
                                            <option value="2">Leilão aberto (Acesso preferencial)</option>
                                            <option value="3">Leilão privado</option>
                                            <option>Outro</option>
                                            <option>Servidor de anúncios</option>
                                            <option>Transações preferenciais</option>
                                            <option>Programática garantida</option>
                                            <option>Patrocínio</option>
                                            <option>Padrão</option>
                                            <option>Prioridades de preços</option>
                                            <option>Em massa</option>
                                            <option>Interno</option>
                                            <option>Rede</option>
                                            <option>Outro</option>
                                            <option>Lances de cabeçalhos (detectados)</option>
                                            <option>Open Biding</option>
                                            <option>AdSense</option>
                                            <option>Mediação</option>
                                            <option>Não preenchidas</option>
                                            <option>Todos os canais de demanda</option>
                                        </select>
                                        <span class="chart-info">0</span>
                                    </th>

                                    <th class="d-flex flex-column tabela" style="border-bottom: solid 4px rgb(52, 168, 83);" scope="col">
                                        <select class="form-select comp-deman" style="width: 100%;" aria-label="Default select example">
                                            <option selected>Não preenchidas</option>
                                            <option value="1">Leilão aberto (geral)</option>
                                            <option value="2">Leilão aberto (Acesso preferencial)</option>
                                            <option value="3">Leilão privado</option>
                                            <option>Outro</option>
                                            <option>Servidor de anúncios</option>
                                            <option>Transações preferenciais</option>
                                            <option>Programática garantida</option>
                                            <option>Patrocínio</option>
                                            <option>Padrão</option>
                                            <option>Prioridades de preços</option>
                                            <option>Em massa</option>
                                            <option>Interno</option>
                                            <option>Rede</option>
                                            <option>Outro</option>
                                            <option>Lances de cabeçalhos (detectados)</option>
                                            <option>Open Biding</option>
                                            <option>AdSense</option>
                                            <option>Mediação</option>
                                            <option>Não preenchidas</option>
                                            <option>Todos os canais de demanda</option>
                                        </select>
                                        <span class="chart-info">0</span>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center pt-4">

            <div class="card card-generic">
                <div class="card-body pb-5">
                    <div class="top-header d-flex align-items-start">
                        <h5 class="card-title me-1">Principais anunciantes classificados</h5>
                        <img src="./images/question-circle.svg" alt="">
                    </div>
                    <div class="card-content mt-5 mb-3 text-center d-flex align-items-center">
                        <img class="card-img-info" src="./images/filter_adjustment.png" alt="">
                        <p class="card-text">Nenhum resultado para os filtros e as datas selecionados.</br> Ajuste a seleção.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center pt-4">

            <div class="card card-generic">
                <div class="card-body pb-5">
                    <div class="top-header d-flex align-items-start">
                        <h5 class="card-title me-1 title-princ-parc">Principais parceiros de rendimento detectados</h5>
                        <img src="./images/question-circle.svg" alt="">
                    </div>
                    <div class="card-content mt-5 mb-3 text-center d-flex align-items-center">
                        <img class="card-img-info" src="./images/filter_adjustment.png" alt="">
                        <p class="card-text">Nenhum resultado para os filtros e as datas selecionados.</br> Ajuste a seleção.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

<script>
    var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    });
</script>


<script>
    function toggleVisibility(id) {
        var div = document.getElementById(id);
        if (div.style.display === "none") {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
    function toggleVisibilityMax(id) {
        var div = document.getElementById(id);
        if (div.style.display === "none") {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
</script>


<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });

    const menuBtn = document.getElementById('menu-btn');
    const sideMenu = document.getElementById('mySidenav-full');

    function toggleMenu() {
        sideMenu.classList.toggle('show');
    }

    if (matchMedia('(max-width: 730px)').matches) {
        menuBtn.addEventListener('click', toggleMenu);
    } else {
        menuBtn.removeEventListener('click', toggleMenu);
    }

    window.addEventListener('resize', () => {
        if (matchMedia('(max-width: 730px)').matches) {
            menuBtn.addEventListener('click', toggleMenu);
        } else {
            menuBtn.removeEventListener('click', toggleMenu);
        }
    });
</script>

</script>

</html>