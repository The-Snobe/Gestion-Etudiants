<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Application de gestion d'une universite">
    <meta name="robots" content="noindex,nofollow">
    <title>GestionUniversite</title>
    <link rel="canonical" href="<?= base_url() ?>/https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/<plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/css/style.min.css" rel="stylesheet">

    <style>
        label {
            text-transform: uppercase;
            text-align: right;
            margin-right: 10px;
        }
    </style>
    <script>
  // Récupérer le formulaire
  var formulaire = document.querySelector('form');

  // Intercepter la soumission du formulaire
  formulaire.addEventListener('submit', function(event) {
    // Récupérer la valeur du champ nom
    var champNom = document.getElementById('nomInput').value.trim();

    // Vérifier si le champ est vide
    if (champNom === '') {
      // Empêcher l'envoi du formulaire
      event.preventDefault();
      return;
    }
  });
</script>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?= base_url() ?>/dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url() ?>/plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?= base_url() ?>/plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="<?= base_url() ?>/javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li>
                            <a class="profile-pic" href="<?= base_url() ?>/#">
                                <img src="<?= base_url() ?>/plugins/images/users/utilisateur.png" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">Gadnyz</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/Home/accueil" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Accueil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/Home/etudiant" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Etudiant</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/Home/promotion" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Promotion</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Promotion</h4>
</div>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php if (session()->get('success') != null) { ?>
        <div class="alert alert-success">
            <p>
                <strong>Mise à jour</strong>
                <hr>
                L'ajout de la promotion s'est effectué avec succès !
            </p>
        </div>
    <?php } else if (session()->get('success_update') != null) { ?>
        <div class="alert alert-success">
            <p>
                <strong>Mise à jour</strong>
                <hr>
                La modification de la promotion s'est effectuée avec succès !
            </p>
        </div>
    <?php } else if (session()->get('success_delete') != null) { ?>
        <div class="alert alert-success">
            <p>
                <strong>Mise à jour</strong>
                <hr>
                La suppression de la promotion s'est effectuée avec succès !
            </p>
        </div>
    <?php } else if (session()->get('error') != null) { ?>
        <div class="alert alert-success">
            <p>
                <strong>Mise à jour</strong>
                <hr>
                Échec d'ajout d'une nouvelle promotion !
            </p>
        </div>
    <?php } ?>

    <!-- ajout d'un nouvel etudiant -->
    <div class="row">
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="white-box">
                <h3 class="box-title">
                    
                    <?= isset($la_promotion) ? "Modification d'une promotion" : "Ajout d'une nouvelle promotion"  ?>
                </h3>
                <div class="card-body">

                    <form class="form-horizontal form-material" action="<?= base_url('Home/' . (isset($la_promotion) ? "enregistrer_modification_promotion/".$la_promotion['id'] : "ajout_promotion")) ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <div class="row">
                                    <?php echo form_open('save-profession'); ?>
                                        <label for="promotion" class="col-md-3 p-0">Intitule :</label>
                                        <div class="col-md-8 border-bottom p-0">
                                            <input type="text" name="profession" id="profession" value="<?= isset($la_promotion) ? $la_promotion['intitule'] : '' ?>" class="form-control p-0" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <div class="col-sm-12 d-flex">
                                        <button class="btn btn-danger btn-lg text-white" type="submit"><?= isset($la_promotion) ? "Modifier" : "Ajouter" ?></button>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php if (isset($la_promotion)) { ?>
                        <!-- Supprimer la promotion -->
                        <form action="<?= base_url('Home/supprimer_promotion/'.$la_promotion['id']) ?>" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette promotion ?');">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12 d-flex">
                                            <button class="btn btn-danger btn-lg text-white" type="submit">Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?> 

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- liste des etudiants -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Liste des promotions</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">INTITULE</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($promotions)) {
                                            $i = 1;
                                            foreach ($promotions as $key => $promotion) { ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $promotion['intitule'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Home/modifier_promotion/' . $promotion['id']) ?>" class="btn btn-primary btn-lg text-white">Modifier</a>
                                                        <a href="<?= base_url('Home/supprimer_promotion/' . $promotion['id']) ?>" class="btn btn-danger btn-lg text-white">Supprimer</a>
                                                    </td>
                                                </tr>
                                        <?php
                                                $i++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center"> 2023 © GestionUniversite</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/js/app-style-switcher.js"></script>
    <script src="<?= base_url() ?>/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?= base_url() ?>/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url() ?>/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url() ?>/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>