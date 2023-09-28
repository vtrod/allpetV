<?php

use tests\Entity\Servico;
require __DIR__.'\..\vendor\autoload.php';

$servico = Servico::getServico();




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AllPet | Serviço</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/fontawesome-free-6.4.0-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/fontawesome-free/css/style-allpet.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="../agenda/main.min.js"></script>
    <script src="../agenda/pt-br.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    
    <script>

    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion fixed-top" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../tests/index.html">
                <div class="sidebar-brand-icon">
                    <img src="../icon-allpet.svg" alt="Dog">
                </div>
                <div class="sidebar-brand-text fs-6 mx-1">ALLPET</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../tests/index.html">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFuncionarios"
                    aria-expanded="true" aria-controls="collapseFuncionarios">
                    <a class="text-reset text-decoration-none" href="./confuncionario.html">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Funcionário</span>
                    </a>
                </div>
                <div id="collapseFuncionarios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a class="collapse-item" href="./addfuncionario.html">Adicionar Funcionário</a>
                        <a class="collapse-item" href="./confuncionario.html">Consultar Funcionário</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <a class="text-reset text-decoration-none" href="conservico.php">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Serviços</span>
                    </a>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a class="collapse-item" href="addservico.php">Adicionar Serviços</a>
                        <a class="collapse-item" href="conservico.php">Consultar Serviços</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <a class="text-reset text-decoration-none" href="./contutor.html">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Tutores</span>
                </a>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a class="collapse-item" href="./addtutor.html">Adicionar Tutor</a>
                        <a class="collapse-item" href="./contutor.html">Consultar Tutor</a>
                    </div>
                </div>
            </li>

    

          <!-- Nav Item - Utilities Collapse Menu PET -->
          <li class="nav-item">
            <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgenda"
                aria-expanded="true" aria-controls="collapseAgenda">
                <a class="text-reset text-decoration-none" href="./conagenda.html">
                    <i class="fas fa-fw fa-paw"></i>
                <span>Pet</span>
                </a>
            </div>
            <div id="collapseAgenda" class="collapse" aria-labelledby="headingPets"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções:</h6>
                    <a class="collapse-item" href="./addpet.html">Adicionar Pet</a>
                    <a class="collapse-item" href="./conpet.html">Consultar Pet</a>
                    
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
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings"
                aria-expanded="true" aria-controls="collapseSettings">
                <i class="fa fa-print" aria-hidden="true"></i>
                <span>Relatórios</span>
            </a>
            <div id="collapseSettings" class="collapse" aria-labelledby="headingSettings" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções</h6>
                    <a class="collapse-item" href="alterar">Relatório Financeiro</a>
                    <a class="collapse-item" href="alterar">Relatório Funcionário</a>
                    <a class="collapse-item" href="alterar">Relatório Pet</a>
                    <a class="collapse-item" href="alterar">Relatório Serviço</a>
                    <a class="collapse-item" href="alterar">Relatório Tutor</a></li>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed-top margin-l">

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
                                            placeholder="Buscar..." aria-label="Search"
                                            aria-describedby="basic-addon2">
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
                            <!-- Dropdown - Messages ->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_1.svg"
                                            alt="...">
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
                                        <img class="rounded-circle" src="../img/undraw_profile_2.svg"
                                            alt="...">
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
                                        <img class="rounded-circle" src="../img/undraw_profile_3.svg"
                                            alt="...">
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
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
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
                  

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-5">
                      <div class="card-header py-3">
                          
                          <div class="row">
                              <div class="col">
                                  <h6 class="m-0 font-weight-bold text-primary">Serviços</h6>
                              </div>
                              <div class="col-auto">
                                <form class="form-inline">
                                  <input type="text" class="form-control" placeholder="Pesquisar">
                                  <button class="btn btn-primary m-2" type="button">
                                      <i class="fas fa-search fa-sm"></i>
                                  </button>
                                <!-- Botão CADASTRAR na tela de consulta-->
                                <a href="addservico.php" class="btn btn-primary ml-1"
                                   title="Cadastrar">
                                <i class="fas fa-fw fa-plus"></i></a>
                                 <!-- Fim Botão CADASTRAR na tela de consulta-->
                                </form>
                              </div>

                                <!-- Modal -->
                                <div class="container-fluid" id="card">
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-xl custom-dialog">
                                    <div class="modal-content p-3">
                                        <!--Modal Content-->
                                        <div class="mt-3">
                                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                              <a class="nav-link active" id="servico-tab" data-bs-toggle="tab" href="#servico" role="tab" aria-controls="servico" aria-selected="true">Serviço</a>
                                            </li>
                                            
                                          </ul>
                                          </div>

                                          <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="servico" role="tabpanel" aria-labelledby="servico-tab">
                                              <!-- servico tab content -->
                                              <div class="container mt-5 mb-5">
                                                <!--Formulário para preenchimento do cadastro do serviço-->

                   <!--NOME-->
    <form method="post">
          <div class="container mt-5 text-left">
            <div class="row align-items-start">
             <div class="col">
              <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">*Nome:</label>
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o Nome do Serviço">
              </div>
             </div>
             <div class="col">
              <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">*Duração Padrão:</label>
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite a Duração do Serviço">
              </div>
             </div>
            </div>
           </div>

           <!-- -->
           <div class="container text-left">
            <div class="row align-items-start">
             <div class="col">
              <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">Fluxo Agenda:</label>
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Fluxo Agenda">
              </div>
             </div>
             <div class="col">
              <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">Frequência Recomendada:</label>
               <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Frequência Recomendada">
              </div>
             </div>
            </div>
           </div>

           <div class="container mb-5 text-left">
         <div class="row align-items-start">
           <div class="col">
             <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Modelo de Atendimento:</label>
            <textarea class="form-control" id="descreverservico" rows="5" placeholder="Descreva aqui como funciona o serviço"></textarea>
           </div>
           </div>
         </div>
         </div>
    </form>
 <!--Esse esquema abaixo são os botões salvar e cancelar em relação ao Serviço-->

   <!-- End of Service-->

                                            </div>
                                            <hr>
                              <div class="container mt-4 mb-5">
                                <div class="d-flex justify-content-between">

                                    <button type="button" class="btn btn-primary btn-circle"><i class="fas fa-fw fa-chevron-left"></i></button>
                                    <div class="ml-auto">
                                    <a href="conservico2.php" class="btn btn-success btn-circle"><i class="fas fa-fw fa-chevron-down"></i></a>
                                    <a href="conservico.php" class="btn btn-danger btn-circle"><i class="fas fa-fw fa-xmark"></i></a>
                                    </div>

                                  </div>
                            </div>
                                            </div>


                                            </div>
                                        <!----------------->

                                    </div>
                                  </div>
                                </div>
                                </div>
                              </div>
                              <div class="card-body">
                          
                          <div class="table-responsive">
                              <table  id="myList" class="table table-bordered" width="100%" cellspacing="0">
                                  <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Nome do serviço</th>
                                      <th>Duração</th>
                                      <th>Preço</th>
                                      <th>Fluxo de agenda</th>
                                      <th>Fr. recomendada</th>
                                      <th>Descrição</th>
                                      <th>Ação</th>
                                  </tr>
                                  </thead>
                                      <tbody>
                                      <?php foreach ($servico as $servicos):?>
                                          <tr>
                                              <td><?=   $servicos->id             ?></td>
                                              <td><?=   $servicos->nomeservico    ?></td>
                                              <td><?=   $servicos->duracao        ?></td>
                                              <td><?=   $servicos->preco          ?></td>
                                              <td><?=   $servicos->fluxoag        ?></td>
                                              <td><?=   $servicos->periodorec     ?></td>
                                              <td><?=   $servicos->modatend       ?></td>
                                              <td style="width: 180px">
                                                  <a href="editarservico.php?id=<?= $servicos->id ?>"><button type="button" name="editar" class= "btn btn-primary btn-sm-2">Editar</button>
                                                  </a>
                                                  <a href="excluirservico.php?id=<?= $servicos->id ?>"><button type="button" name="excluir" class= "btn btn-danger btn-sm-2">Excluir</button>
                                                  </a>
                                              </td>
                                          </tr>
                                      <?php endforeach; ?>
                                      </tbody>
                              </table>
                          </div>
                              </div>
                          </div>
                      </div>
                      </div>



                    
                
                    
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
<footer class="sticky-footer bg-white margin-l" >
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
                    <a class="btn btn-primary" href="../login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Activate tab functionality
        var tab = new bootstrap.Tab(document.getElementById("servico-tab"));
        tab.show();

        // Get reference to the calendar container element
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