<?php
use tests\Entity\Pessoas;
use tests\Entity\Funcao;
use tests\Entity\Endereco;
use tests\Entity\Funcionario;
use tests\db\Database;

require __DIR__.'\..\vendor\autoload.php';
require 'db\Database.php';



if(isset($_POST['botaocadastro'])) {
    $obPessoa = new Pessoas;
    $obPessoa->nome= $_POST['nome'];
    $obPessoa->cpf= $_POST['cpf'];
    $obPessoa->rg= $_POST['rg'];
    $obPessoa->telefone= $_POST['telefone'];
    $obPessoa->email= $_POST['email'];
    $obPessoa->dtnasc= $_POST['dtnasc'];
    $obPessoa->cadastrar();
    header('location: addfuncionario.php?status=success');
    exit;
}
if(isset($_POST['botaocadastro1'])) {
    $obEndereco = new Endereco;
    $obEndereco->logradouro= $_POST['logradouro'];
    $obEndereco->bairro= $_POST['bairro'];
    $obEndereco->cidade= $_POST['cidade'];
    $obEndereco->estado= $_POST['estado'];
    $obEndereco->cep= $_POST['cep'];
    $obEndereco->numero= $_POST['numero'];
    $obEndereco->complemento= $_POST['complemento'];
    $obEndereco->ponto_ref= $_POST['ponto_ref'];
    $obEndereco->cadastrar();
    header('location: addfuncionario.php?status=success');
    exit;
}

if(isset($_POST['botaocadastro2'])) {
    $obFuncao = new Funcao;
    $obFuncao->nome_funcao =                $_POST['nome_funcao'];
    $obFuncao->salario =                    $_POST['salario'];
    $obFuncao->perfil =                     $_POST['perfil'];
    $obFuncao->hora_de_trab =               $_POST['hora_de_trab'];
    $obFuncao->dia_folga =                  $_POST['dia_folga'];
    $obFuncao->cadastrar();
    header('location: addfuncionario.php?status=success');
    exit;
}

if(isset($_POST['botaocadastro3'])) {
    $obFuncionario = new Funcionario;
    $obFuncionario->cpf =                   $_POST['cpf'];
    $obFuncionario->hora_de_trab =          $_POST['hora_de_trab'];
    $obFuncionario->dia_folga =             $_POST['dia_folga'];
    $obFuncionario->perfil =                $_POST['perfil'];
    $obFuncionario->nome_funcao =           $_POST['nome_funcao'];
    $obFuncionario->cadastrar();
    header('location: addfuncionario.php?status=success');
    exit;
}
$pessoa = Pessoas::getPessoa();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AllPet | Adicionar Funcionário</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/fontawesome-free-6.4.0-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/fontawesome-free/css/style-allpet.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion fixed-top" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../tests/index.php">
            <div class="sidebar-brand-icon">
                <img src="../icon-allpet.svg" alt="Dog">
            </div>
            <div class="sidebar-brand-text fs-6 mx-1">ALLPET</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="../tests/index.php">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item -Funcionário -->
        <li class="nav-item">
            <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFuncionario"
                 aria-expanded="true" aria-controls="collapseFuncionario">
                <a class="text-reset text-decoration-none" href="#collapseFuncionario">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Funcionários</span>
                </a>
            </div>
            <div id="collapseFuncionario" class="collapse" aria-labelledby="headingTwo"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções:</h6>
                    <a class="collapse-item" href="./addfuncionario.php">Adicionar Funcionário</a>
                    <a class="collapse-item" href="./confuncionario.php">Consultar Funcionário</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Serviço -->
        <li class="nav-item">
            <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServico"
                 aria-expanded="true" aria-controls="collapseServico">
                <a class="text-reset text-decoration-none" href="#collapseServico">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Serviços</span>
                </a>
            </div>
            <div id="collapseServico" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções:</h6>
                    <a class="collapse-item" href="./addservico.php">Adicionar Serviços</a>
                    <a class="collapse-item" href="./conservico.php">Consultar Serviços</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Tutor -->
        <li class="nav-item">
            <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTutor"
                 aria-expanded="true" aria-controls="collapseTutor">
                <a class="text-reset text-decoration-none" href="#collapseTutor">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Tutores</span>
                </a>
            </div>
            <div id="collapseTutor" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções:</h6>
                    <a class="collapse-item" href="./addtutor.php">Adicionar Tutor</a>
                    <a class="collapse-item" href="./contutor.php">Consultar Tutor</a>
                </div>
            </div>
        </li>



        <!-- Nav Item - PET -->
        <li class="nav-item">
            <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePet"
                 aria-expanded="true" aria-controls="collapsePet">
                <a class="text-reset text-decoration-none" href="#collapsePet">
                    <i class="fas fa-fw fa-paw"></i>
                    <span>Pets</span>
                </a>
            </div>
            <div id="collapsePet" class="collapse" aria-labelledby="headingPets" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções:</h6>
                    <a class="collapse-item" href="./addpet.php">Adicionar Pet</a>
                    <a class="collapse-item" href="./conpet.php">Consultar Pet</a>

                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Outros
        </div>

        <!-- Nav Item - Relatórios -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRelatorio"
               aria-expanded="true" aria-controls="collapseRelatorio" href="#collapseRelatorio">
                <i class="fas fa fa-bar-chart"></i>
                <span>Relatórios</span>
            </a>
            <div id="collapseRelatorio" class="collapse" aria-labelledby="headingSettings"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções</h6>
                    <a class="collapse-item" href="../buttons.php">1</a>
                    <a class="collapse-item" href="../cards.php">2</a>
                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav
                class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed-top margin-l">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <h5 class="text-primary">Funcionário -Adicionar</h5>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts ->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts ->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts ->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages ->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages ->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages --
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="../img/undraw_profile_1.svg" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="../img/undraw_profile_2.svg" alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="../img/undraw_profile_3.svg" alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                            <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Body Content-->

            <!-- Form Container-->
            <div class="card shadow container w-75 margin-b margin-t" id="card">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="mt-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pessoa-tab" data-bs-toggle="tab" href="#pessoa"
                                   role="tab" aria-controls="pessoa" aria-selected="true">Pessoa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="funcao-tab" data-bs-toggle="tab" href="#funcao" role="tab"
                                   aria-controls="funcao" aria-selected="false">Função</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="endereco-tab" data-bs-toggle="tab" href="#endereco"
                                   role="tab" aria-controls="endereco" aria-selected="false">Endereço</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pessoa" role="tabpanel"
                             aria-labelledby="pessoa-tab">

                            <!-- Aba Pessoa tab content -->
                            <form method="post" action="addfuncionario.php">
                            <div class="container mt-5 mb-5">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nome" class="form-label"><b>Nome</b></label>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="cpf" class="form-label"><b>CPF</b></label>
                                        <input type="text" class="form-control" name="cpf"
                                               placeholder="Digite o cpf">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="rg" class="form-label"><b>RG</b></label>
                                        <input type="text" class="form-control" id="rg" name="rg"
                                               placeholder="Digite o RG">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="telefone" class="form-label"><b>Telefone</b></label>
                                        <input type="text" class="form-control" id="telefone" name="telefone"
                                               placeholder="Digite o telefone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="email" class="form-label"><b>Email</b></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Digite o email">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="dtnasc" class="form-label"><b>Data de Nascimento</b></label>
                                        <input type="dtnasc" class="form-control" id="dtnasc" name="dtnasc"
                                               placeholder="Digite a Data de Nascimento">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!--BOTÕES ADICIONAR -->
                                <div class="container mt-4 mb-5">
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="btn btn-primary btn-circle" title="Voltar">
                                            <i class="fas fa-fw fa-chevron-left"></i></a>
                                        <div class="ml-auto">
                                            <button name="botaocadastro" value="submit" class="btn btn-success btn-circle" title="Adicionar">
                                                <i class="fas fa-fw fa-chevron-down"></i></button>
                                            <a href="addfuncionario.php" class="btn btn-danger btn-circle" title="Excluir">
                                                <i class="fas fa-fw fa-xmark"></i></a>
                                        </div>
                                    </div>
                                </div>

                            <!-- FIM BOTÕES ADICIONAR -->
                        </div>
                        <div class="tab-pane fade" id="funcao" role="tabpanel" aria-labelledby="funcao-tab">

                            <!-- Aba Funcão tab content -->

                            <div class="container mt-5 mb-4">
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="funcao" class="form-label"><b>Função</b></label>
                                        <select class='form-control' name='nome_funcao'>
                                            <option value='0'>Selecione...</option>
                                            <option value='Atendente'>Atendente</option>
                                            <option value='Banhista'>Banhista</option>
                                            <option value='Gerente'>Gerente</option>
                                            <option value='Tosador'>Tosador</option>
                                        </select>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="salario" class="form-label"><b>Salário</b></label>
                                        <input type="text" class="form-control" id="salario" name="salario"
                                               placeholder="Digite o salário">
                                    </div><br>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="perfil" class="form-label"><b>Perfil</b></label>
                                        <select class="form-control" name="perfil" id="perfil" name="perfil">
                                            <option value="0">Selecione...</option>
                                            <option value="atendente">Atendente </option>
                                            <option value="gerente">Gerente </option>
                                        </select>
                                    </div>
                                    <div class="col mb-3">
                                        <label for="hora_de_trab" class="form-label"><b>Horário de
                                                Trabalho</b></label>
                                        <input type="number" class="form-control" id="hora_de_trab"
                                               name="hora_de_trab" placeholder="Digite o horário">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="diadefolga" class="form-label"><b>Dia de Folga</b></label>
                                        <select class="form-control" name="dia_folga">
                                            <option value="0">Selecione...</option>
                                            <option value="seg">Segunda-Feira </option>
                                            <option value="ter">Terça-Feira </option>
                                            <option value="qua">Quarta-Feira </option>
                                            <option value="qui">Quinta-Feira </option>
                                            <option value="sex">Sexta-Feira </option>
                                            <option value="sab">Sábado </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <!--BOTÕES ADICIONAR -->

                            <div class="container mt-4 mb-5">
                                <div class="d-flex justify-content-between">
                                    <a href="" class="btn btn-primary btn-circle" title="Voltar">
                                        <i class="fas fa-fw fa-chevron-left"></i></a>
                                    <div class="ml-auto">
                                        <button name="botaocadastro2" value="submit" class="btn btn-success btn-circle" title="Adicionar">
                                            <i class="fas fa-fw fa-chevron-down"></i></button>
                                        <a href="addfuncionario.php" class="btn btn-danger btn-circle" title="Excluir">
                                            <i class="fas fa-fw fa-xmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- FIM BOTÕES ADICIONAR -->
                        </div>
                        <div class="tab-pane fade" id="endereco" role="tabpanel" aria-labelledby="endereco-tab">

                            <!--Aba Endereço tab content -->

                            <div class="container mt-5 mb-5">

                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="rua" class="form-label"><b>Logradouro</b></label>
                                        <input type="text" class="form-control" id="rua" name="logradouro"
                                               placeholder="Digite o logradouro">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="bairro" class="form-label"><b>Bairro</b></label>
                                        <input type="text" class="form-control" id="bairro" name="bairro"
                                               placeholder="Digite o bairro">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="cidade" class="form-label"><b>Cidade</b></label>
                                        <input type="text" class="form-control" id="cidade" name="cidade"
                                               placeholder="Digite a cidade">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="estado" class="form-label"><b>Estado</b></label>
                                        <input type="text" class="form-control" id="estado" name="estado"
                                               placeholder="Digite estado">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="cep" class="form-label"><b>CEP</b></label>
                                        <input type="text" class="form-control" id="cep" name="cep"
                                               placeholder="Digite o CEP">
                                    </div>
                                    <div class="col-2 mb-3">
                                        <label for="numero" class="form-label"><b>Número</b></label>
                                        <input type="text" class="form-control" id="numero" name="numero"
                                               placeholder="Digite o numero">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="complemento" class="form-label"><b>Complemento</b></label>
                                        <input type="text" class="form-control" id="complemento" name="complemento"
                                               placeholder="Digite o complemento">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="pontoreferencia" class="form-label"><b>Ponto de
                                                Referência</b></label>
                                        <input type="text" class="form-control" name="ponto_ref" id="pontoreferencia"
                                               placeholder="Digite o ponto de referência">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!--BOTÕES ADICIONAR -->
                            <div class="container mt-4 mb-5">
                                <div class="d-flex justify-content-between">
                                    <a href="" class="btn btn-primary btn-circle" title="Voltar">
                                        <i class="fas fa-fw fa-chevron-left"></i></a>
                                    <div class="ml-auto">
                                        <button name="botaocadastro1" value="submit" class="btn btn-success btn-circle" title="Adicionar"">
                                            <i class="fas fa-fw fa-chevron-down"></i></button>
                                        <a href="addfuncionario.php" class="btn btn-danger btn-circle" title="Excluir">
                                            <i class="fas fa-fw fa-xmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- FIM BOTÕES ADICIONAR -->
                        </div>
                    </div>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End Form Container-->

            <!-- End Body Content-->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<!-- Footer -->
<footer class="sticky-footer bg-white margin-l">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="../login.php">Logout</a>
            </div>
        </div>
    </div>
</div>


<script>
    // Activate tab functionality
    var tab = new bootstrap.Tab(document.getElementById("pessoa-tab"));
    tab.show();

    $(document).ready(function () {
        $('#pessoa').submit(function (e) {
            e.preventDefault(); // Prevent form submission

            // Perform any necessary validation or processing here

            // Move to the next step
            $('#pessoa').hide();
            $('#funcao').show();
        });
    });

</script>
<script src="../js/allpet.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../js/demo/chart-area-demo.js"></script>
<script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>