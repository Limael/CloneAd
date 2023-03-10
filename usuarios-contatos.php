<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Contatos</title>
</head>

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

   
    <div id="Side-user" class="sidenav border">
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
                    <span class="side-bar-options"> <img class="icon-side-bar" src="./images/house-door-grey.svg" alt=""> P??gina inicial</span>
                </a>
            </button>

            <button onclick="toggleVisibility('exibicaoDiv')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex ">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/truck-grey.svg" alt=""> Exibi????o</a>
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
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Ferramentas de exibi????o</span>
                </a>
            </div>



            <button onclick="toggleVisibility('inventarioDiv')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/picture-in-picture-grey.svg" alt=""> Invent??rio</a>
                </div>
            </button>

            <div id="inventarioDiv" style="display:none">
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Blocos de an??ncios</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Apps</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Chaves-valor</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Predefini????es de segmenta...</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">An??lise de tr??fego</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Configura????es de rede</span>
                </a>
            </div>

        </div>


        <button onclick="toggleVisibility('protecaoDiv')" style="margin-left:5%" class="button-side-bar">
            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/shield-check-grey.svg" alt=""> Prote????es</a>
            </div>
        </button>


        <button onclick="toggleVisibility('relatorioDiv')" class="button-side-bar">
            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/chart-grey-side.svg" alt=""> Relat??rios</a>
            </div>
        </button>
        <div id="relatorioDiv" style="display:none">

            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Relat??rios</span>
            </a>
            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Modelos</span>
            </a>
        </div>

        <button onclick="toggleVisibility('otmDiv')" class="button-side-bar">
            <div class="d-flex align-items-center flex-side-bar side-button-flex">
                <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a class="side-bar-options"><img class="icon-side-bar" src="./images/analytics-grey.svg" alt=""> Otimiza????o</a>
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
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Configura????es globais</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Gerenciamento de ads.txt</span>
            </a>


            <a href="./usuario.php" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Acesso e autoriza????o</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Contas vinculadas</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Exibi????o</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Invent??rio</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">??udio e v??deo</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Empresas</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Hist??rico de altera????es</span>
            </a>


            <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Gerenciamento de m??ltiplos... </span>
            </a>


        </div>
    </div>
    <div id="Side-user-full" class="sidenav border">
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
                    <span class="side-bar-options"> <img class="icon-side-bar" src="./images/house-door-grey.svg" alt=""> P??gina inicial</span>
                </a>
            </button>

            <button onclick="toggleVisibilityMax('exibicaoDivFull')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex ">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/truck-grey.svg" alt=""> Exibi????o</a>
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
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Ferramentas de exibi????o</span>
                </a>
            </div>



            <button onclick="toggleVisibilityMax('inventarioDivMax')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/picture-in-picture-grey.svg" alt=""> Invent??rio</a>
                </div>
            </button>

            <div id="inventarioDivMax" style="display:none">
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Blocos de an??ncios</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Apps</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Chaves-valor</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Predefini????es de segmenta...</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">An??lise de tr??fego</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Configura????es de rede</span>
                </a>
            </div>




            <button onclick="toggleVisibilityMax('protecaoDiv')" style="margin-left:5%" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/shield-check-grey.svg" alt=""> Prote????es</a>
                </div>
            </button>


            <button onclick="toggleVisibilityMax('relatorioDivSide')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a href="#" class="side-bar-options"><img class="icon-side-bar" src="./images/chart-grey-side.svg" alt=""> Relat??rios</a>
                </div>
            </button>
            <div id="relatorioDivSide" style="display:none">

                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Relat??rios</span>
                </a>
                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Modelos</span>
                </a>
            </div>

            <button onclick="toggleVisibilityMax('otmDivMax')" class="button-side-bar">
                <div class="d-flex align-items-center flex-side-bar side-button-flex">
                    <img src="./images/caret-right-fill.svg" class="triangle-side-bar" alt=""> <a class="side-bar-options"><img class="icon-side-bar" src="./images/analytics-grey.svg" alt=""> Otimiza????o</a>
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
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Configura????es globais</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Gerenciamento de ads.txt</span>
                </a>


                <a href="./usuario.php" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Acesso e autoriza????o</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Contas vinculadas</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Exibi????o</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Invent??rio</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">??udio e v??deo</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Empresas</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Hist??rico de altera????es</span>
                </a>


                <a href="#" class="d-flex align-items-center flex-side-bar-button text-decoration-none">
                    <img src="./images/circle-fill.svg" class="circle-side-bar" alt=""> <span class="side-bar-options">Gerenciamento de m??ltiplos... </span>
                </a>
            </div>

        </div>
    </div>



    <section class="dashboard-select">
        <nav class="usuario-header  border-bottom border-top">
            <div class="container-fluid">
                <div class="nav-content" id="navbarNavAltMarkup">
                    <div class="navbar-nav box-nav d-flex flex-row">
                        <a class="nav-link " aria-current="page" href="./usuario.php">Usu??rios</a>
                        <a class="nav-link" href="./usuarios-funcoes.php">Fun????es</a>
                        <a class="nav-link active user-ativo" href="./usuarios-contatos.php">Contatos</a>
                        <a class="nav-link" href="./usuarios-vinculados.php">Dispositivos vinculados</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container d-flex justify-content-start pt-4">
            <h5 class="card-title me-1">Contatos</h5>
            <img src="./images/question-circle.svg" alt="">
        </div>

        <div class="container d-flex justify-content-between pt-4 button-search-user">
            <button type="button" class="btn btn-primary button-usuario">Novo Contato</button>
            <div>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Username" aria-describedby="basic-addon1">
                    <img class="ms-3" style="width: 7%;" src="./images/layout-three-columns.svg" alt="">
                </div>
            </div>
        </div>

        <div class=" border-bottom border-top d-flex justify-content-between mt-2 p-2 ps-3">
            <div class="d-flex align-items-center">
                <img class="funil-user" src="./images/blue_funnel.svg" alt="">
                <input class="filtro-input" type="text" placeholder="Adicionar novo filtro">
            </div>

        </div>
        <div class="table-responsive-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome <i class="bi bi-arrow-up"></i></th>
                        <th scope="col">Representar</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Nome da empresa</th>
                        <th scope="col">T??tulo</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>

                </tbody>

            </table>
        </div>
        <div class="table-footer border-bottom align-items-center d-flex justify-content-center ">
            <div class="d-flex align-items-center box-footer-table flex-column">
                <img style="width: 50%;background: grey; border-radius: 60px; padding: 10px;" src="./images/inbox-fill.svg" alt="">
                <span class="text-center">N??o h?? dados para exibir</span>
            </div>
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
    function toggleVisibilityMax(id) {
        var div = document.getElementById(id);
        if (div.style.display === "none") {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
</script>
</script>
<script type="text/javascript">
    const menuBtn = document.getElementById('menu-btn');
    const sideMenu = document.getElementById('Side-user-full');

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

</html>