@include('layouts.header')
<!-- Wrapper -->
    <div id="db-wrapper">
        <!-- Sidebar -->
        @include('pages.admin_nav')
        <!-- sidebar -->

        <!-- Page Content -->
        <div id="page-content">

            <!-- Page Header -->
            @include('pages.admin_header')
            <!-- Page Header -->

            <!-- Container fluid::Nouvelle commande -->
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page Header -->
                        <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 font-weight-bold">Nouvelles commandes</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="dashboard">Tableau de bord</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Commandes</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Nouvelles
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card rounded-lg">
                            <!-- Card header -->
                            <div class="card-header border-bottom-0 p-0 bg-white">
                                <div>
                                    <!-- Nav -->
                                    <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="courses-tab" data-toggle="pill" href="#courses" role="tab" aria-controls="courses" aria-selected="true">En cours</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-4 row">
                                <!-- Form -->
                                <form class="d-flex align-items-center col-12 col-md-12 col-lg-12">
                                    <div class="col-lg-6">
                                            <select id="selectOne" class="form-control">
                                             <option>Filtre de recherche</option>
                                             <option>Code commande</option>
                                             <option>Date commande</option>
                                             <option>Client tel</option>
                                             <option>Transporteur tel</option>
                                            </select>
                                    </div>

                                    <div class="col-lg-6">
                                     <input type="search" class="form-control pl-6" placeholder="Rechercher"/>
                                    </div>
                                   
                                </form>
                            </div>
                            <div>
                                <!-- Table -->
                                <div class="tab-content" id="tabContent">
                                    <!--Tab pane -->
                                    <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                        <div class="table-responsive border-0 overflow-y-hidden">
                                            <table class="table mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                           Code
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            Courses
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            CLIENT
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            DATE
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            STATUS
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase">
                                                            ACTION
                                                        </th>
                                                        <th scope="col" class="border-0 text-uppercase"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-middle border-top-0">
                                                            <h4><b class="text-danger">012555</b></h4>
                                                        </td>

                                                        <td class="border-top-0">
                                                            <a href="#!" class="text-inherit">
                                                                <div class="d-lg-flex align-items-center">
                                                                    <div>
                                                                        <img src="assets/images/course/car.jpg" alt="" class="img-4by3-lg rounded" />
                                                                    </div>
                                                                    <div class="ml-lg-3 mt-2 mt-lg-0">
                                                                        <h4 class="mb-1">
                                                                            <span class="text-primary">Toumodi-Abidjan</span><br>
                                                                            <span>Unité: </span> Carton - 
                                                                            <span>Coût:</span> 1000 fcfa / place
                                                                        </h4>
                                                                        <span class="text-success">Commandes:</span> 10 places<br>
                                                                        <span class="text-success">Montant payé:</span> 1000 fcfa<br>
                                                                        <a href="#" class="badge badge-warning" data-toggle="modal" data-target="#exampleModalLong">
                                                                            infos transporteur
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                       
                                                        <td class="align-middle border-top-0">
                                                            <div class="d-flex align-items-center">
                                                                Akissi Clarisse - 
                                                                0102205211
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <span class="bg-warning mr-1 d-inline-block align-middle"></span>11/01/2021
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>
                                                            <span class="text-primary">En cours</span>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <a href="#!" class="btn btn-outline-warning btn-sm">Livrer</a>
                                                            <a href="#!" class="btn btn-danger btn-sm">Rembourser</a>
                                                            <a href="#!" class="btn btn-success btn-sm">Solder</a>
                                                        </td>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                            </div>
                        </div>
                        <!-- Modal infos transporteur -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Réserver</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                      <div class="row align-items-center no-gutters">
                                          <div class="col-auto">
                                           <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xl" alt="">
                                          </div>
                                          <div class="col ml-2">
                                           <span class="text-warning">Transporteur : </span>
                                           <span>Touré Abou</span><br>
                                           <span><b>Toumodi - Abidjan</b></span><br>
                                           <span>10 places</span><br>
                                           <span><b>1000 fcfa / place</b></span><br>
                                           <span>Unité : Carton</span>
                                          </div>
                                      </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-warning" data-dismiss="modal">ok</button>
                                </div>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container fluid -->

        </div>
        <!-- Page Content -->
    </div>
@include('layouts.footer')