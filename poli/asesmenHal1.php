<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Amezia - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by themesbrand" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span>
                    <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="../assets/images/logo.png" alt="logo-large" class="logo-lg">
                </span>
            </a>
        </div>

        <!-- Navbar -->
        <nav class="navbar-custom">

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input" type="search" placeholder="Search here.." />
                    <a href="javascript:void(0);" class="close-search search-btn" data-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li>
                    <a class="nav-link waves-effect waves-light search-btn" href="javascript:void(0);"
                        data-target="#search-wrap">
                        <i class="mdi mdi-magnify nav-icon"></i>
                    </a>
                </li>

                <li class="hidden-sm">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                        href="javascript: void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                        English <img src="../assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt="" /> <i
                            class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img
                                src="../assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img
                                src="../assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img
                                src="../assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img
                                src="../assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img
                                src="../assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline nav-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">
                            Notifications (258)
                        </h6>
                        <div class="slimscroll notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                <p class="notify-details">Your item is shipped<small class="text-muted">It is a long
                                        established fact that a reader will</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a>
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="hidden-sm">
                    <a class="nav-link waves-effect waves-light" href="javascript:void(0);" id="btn-fullscreen">
                        <i class="mdi mdi-fullscreen nav-icon"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="../assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>

            <ul class="list-unstyled topbar-nav mb-0">

                <li>
                    <button class="button-menu-mobile nav-link waves-effect waves-light">
                        <i class="mdi mdi-menu nav-icon"></i>
                    </button>
                </li>

                <li class="hidden-sm">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-library-plus mr-2"></i>Tools <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Photoshop
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Visual Studio
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Sublime Text 3
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Phpstorm
                        </a>

                    </div>
                </li>
                <li class="hidden-sm">
                    <a class="nav-link waves-effect waves-light" href="../landing/index.html" target="_blank">
                        <i class="mdi mdi-airplane mr-2"></i>Landing
                    </a>
                </li>
            </ul>

        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->

    <div class="page-wrapper">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu" id="side-nav">

                <li class="menu-title">Main</li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-speedometer"></i><span>Dashboards</span><span
                            class="badge badge-danger badge-pill float-right">9+</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="index-2.html">Dashboard 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-email-variant"></i><span>Email</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Read Email</a></li>
                        <li><a href="email-compose.html">Compose Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="calendar.html">
                        <i class="mdi mdi-calendar"></i><span>Calendar</span>
                    </a>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-briefcase-check"></i><span>UI Elements</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-progress.html">Progress</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                        <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-video.html">Videos</a></li>
                        <li><a href="ui-colors.html">Colors</a></li>
                        <li><a href="ui-grid.html">Grid System</a></li>
                        <li><a href="ui-spinners.html">Spinners</a></li>
                        <li><a href="ui-toasts.html">Toasts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Advanced UI</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                        <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                        <li><a href="advanced-nestable.html">Nestable List</a></li>
                        <li><a href="advanced-ratings.html">Ratings</a></li>
                        <li><a href="advanced-highlight.html">Highlight</a></li>
                        <li><a href="advanced-clipboard.html">Clipboard</a></li>
                        <li><a href="advanced-lightbox.html">Lightbox</a></li>
                        <li><a href="advanced-session.html">Session Timeout</a></li>
                        <li><a href="advanced-scrollbars.html">Scrollbars</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span
                            class="badge badge-info float-right">8</span><span>Forms</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="forms-elements.html">Basic Elements</a></li>
                        <li><a href="forms-advanced.html">Advance Elements</a></li>
                        <li><a href="forms-validation.html">Validation</a></li>
                        <li><a href="forms-wizard.html">Wizard</a></li>
                        <li><a href="forms-editors.html">Editors</a></li>
                        <li><a href="forms-repeater.html">Repeater</a></li>
                        <li><a href="forms-x-editable.html">X Editable</a></li>
                        <li><a href="forms-uploads.html">File Upload</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-chart-arc"></i><span>Charts</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="charts-morris.html">Morris</a></li>
                        <li><a href="charts-chartist.html">Chartist</a></li>
                        <li><a href="charts-flot.html">Flot</a></li>
                        <li><a href="charts-peity.html">Peity</a></li>
                        <li><a href="charts-chartjs.html">Chartjs</a></li>
                        <li><a href="charts-sparkline.html">Sparkline</a></li>
                        <li><a href="charts-knob.html">Jquery Knob</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i
                            class="mdi mdi-format-list-bulleted-type"></i><span>Tables</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic</a></li>
                        <li><a href="tables-datatable.html">Datatables</a></li>
                        <li><a href="tables-responsive.html">Responsive</a></li>
                        <li><a href="tables-editable.html">Editable</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-album"></i><span>Icons</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                        <li><a href="icons-themify.html">Themify</a></li>
                        <li><a href="icons-typicons.html">Typicons</a></li>
                    </ul>
                </li>

                <li class="menu-title">More</li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Maps</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i
                            class="mdi mdi-account-location"></i><span>Authentication</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="auth-login.html">Login</a></li>
                        <li><a href="auth-register.html">Register</a></li>
                        <li><a href="auth-recoverpw.html">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                        <li><a href="auth-404.html">Error 404</a></li>
                        <li><a href="auth-500.html">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-google-pages"></i><span>Pages</span><span
                            class="badge badge-success float-right">Hot</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="page-tour.html">Tour</a></li>
                        <li><a href="page-timeline.html">Timeline</a></li>
                        <li><a href="page-invoice.html">Invoice</a></li>
                        <li><a href="page-treeview.html">Treeview</a></li>
                        <li><a href="page-profile.html">Profile</a></li>
                        <li><a href="page-starter.html">Starter Page</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>
                        <li><a href="page-faq.html">FAQs</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Email Templates</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                        <li><a href="email-templates-alert.html">Alert Email</a></li>
                        <li><a href="email-templates-billing.html">Billing Email</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- end left-sidenav-->

        <!-- Page Content-->
        <?php
        if(isset($_GET['sumber_data']));
        {
            $sumber_data = $_GET['sumber_data'];
            $nama_sb = $_GET['nama_sumber'];
            $hubungan_sb = $_GET['hub_sumber'];
            $cara_datang = $_GET['cara_datang'];
            $keluhan_utama = $_GET['keluhan_utama'];
            $riwayat_kes_skrg = $_GET['riwayat_kes_skrg'];
            $riwayat_kes_lama = $_GET['riwayat_kes_lama'];
            $riwayat_alergi = $_GET['alergi'];
            $suhu = $_GET['suhu'];
            $nadi = $_GET['nadi'];
            $tekanan_darah = $_GET['tekanan_darah'];
            $nafas = $_GET['nafas'];
            $nyeri = $_GET['nyeri'];
            $bb = $_GET['bb'];
            $tb = $_GET['tb'];
            $spo2 = $_GET['spo2'];
            $gcs = $_GET['gcs'];
            $gcs_e = $_GET['gcs_e'];
            $gcs_v = $_GET['gcs_v'];
            $gcs_m = $_GET['gcs_m'];
            $asesmen_psikologis = $_GET['asesmen'];
            $status_fungsional = $_GET['status_fg'];
            $imt = $_GET['imt'];
            $sn_bb = $_GET['sn_bb'];
            $asupan_makan = $_GET['asupan_makan'];
            $sakit_berat = $_GET['sakit_berat'];
            $kognitif = $_GET['kognitif'];
            $motivasi_edukasi = $_GET['motivasi_edukasi'];
            $keterbatasan_fisik = $_GET['keterbatasan_fisik'];
            $kebutuhan_penerjemah = $_GET['kebutuhan_penerjemah'];
            $kebutuhan_informasi = $_GET['kebutuhan_informasi'];
            $status_sosial = $_GET['status_sosial'];
            $hubungan_keluarga = $_GET['hubungan_keluarga'];
            $tempat_tinggal = $_GET['tempat_tinggal'];
            //resiko jatuh
            $resiko_dewasa = $_GET['resiko_dewasa'];
            $resiko_anak = $_GET['resiko_anak'];
            $resiko_geriarti = $_GET['resiko_geriarti'];
            $resiko_jiwa = $_GET['resiko_jiwa'];

            $rencana_intervensi = $_GET['rencana_intervensi'];
            $waktu_pelaksanaan = $_GET['waktu_pelaksanaan'];
            $evaluasi = $_GET['evaluasi_tindak_lanjut'];
            $waktu_kontrol = $_GET['kontrol_tanggal'];

            $status = $_GET['masalah_keperawatan'];
            //medis
            //$medis_keluhan = $_GET['medis_keluhan'];
            // $penyakit_sekarang = $_REQUEST['penyakit_sekarang'];
            // $penyakit_dulu = $_REQUEST['penyakit_dulu'];
            // $riwayat_operasi = $_REQUEST['riwayat_op'];
            // $medis_alergi = $_REQUEST['riwayat_alergi'];
            // $penyakit_keluarga = $_REQUEST['riwayat_pykt_klg'];
            // $riwayat_pengobatan = $_REQUEST['riwayat_pengobatan'];
            // $diagnosa = $_REQUEST['diagnosa'];
            // $kode_icd = $_REQUEST['kode_icd'];
            // $rencana_tindakan = $_REQUEST['rencana_tindakan'];
            // $edukasi_topik = $_REQUEST['edukasi_topik'];
        }
        ?>
        <form id="FormInput">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Amezia</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Validation</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Form Validation</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    <!--paling atas kanan-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="col-md-12">
                                            <label id="no_rm">No.RM</label>
                                            <input type="hidden" value="" name="no_rm_x">/
                                            <input type="hidden" value="" name="no_kunjungan">
                                            <label id="nama">Nama</label><br>
                                            <label id="umur">Umur</label>/
                                            <label id="jns_kel">Jenis Kelamin</label>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="formInput1">
                        <div class="form-group" id="keperawatan" name="keperawatan">
                            <!--Keperawatan-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="needs-validation" novalidate>
                                                <div class="form-row">
                                                    <h4 class="mt-0">Keperawatan</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="form-row">
                                                            <label for="tgl_kunjungan" class="col-2">Tanggal
                                                                Kunjungan</label>
                                                            <div class="col-2">
                                                                <label class="form-control" placeholder=""
                                                                    id="tgl_kunjungan"></label>
                                                            </div>
                                                            <label for="jam_dtg" class="col-2">Jam datang</label>
                                                            <div class="col-2">
                                                                <label class="form-control" placeholder=""
                                                                    id="jam_dtg"></label>
                                                            </div>
                                                            <label for="jam_plg" class="col-2">Jam pulang</label>
                                                            <div class="col-2">
                                                                <input type="time" class="form-control" placeholder=""
                                                                    id="jam_plg" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-row">
                                                            <div class="col-2">
                                                                <label for="klinik">Klinik yang dituju</label>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="klinik_penyakit_dlm" name="klinik"
                                                                        value="1">
                                                                    <label class="custom-control-label"
                                                                        for="klinik_penyakit_dlm">Penyakit
                                                                        Dalam</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="klinik_bedah" name="klinik" value="2">
                                                                    <label class="custom-control-label"
                                                                        for="klinik_bedah">Bedah</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="custom-control custom-radio ">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="klinik_kandungan" name="klinik" value="3">
                                                                    <label class="custom-control-label"
                                                                        for="klinik_kandungan">Kandungan</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-1">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="klinik_anak" name="klinik" value="4">
                                                                    <label class="custom-control-label"
                                                                        for="klinik_anak">Anak</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-1">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="klinik_lainnya" name="klinik" value="5">
                                                                    <label class="custom-control-label"
                                                                        for="klinik_lainnya">Lainnya</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <input class="form-control" style="display: none"
                                                                    type="text" id="klinik_lainnya_input" name="klinik">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <label for="sumber_data">Sumber Data</label>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="sumber_data_pasien" name="sumber_data"
                                                                        value="1" <?php echo ($sumber_data== '1') ?  "checked" : "" ;  ?>>
                                                                    <label class="custom-control-label"
                                                                        for="sumber_data_pasien">Pasien
                                                                        Sendiri</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="sumber_data_keluarga" name="sumber_data"
                                                                        value="2" <?php echo ($sumber_data== '2') ?  "checked" : "" ;  ?>>
                                                                    <label class="custom-control-label"
                                                                        for="sumber_data_keluarga">Keluarga</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="sumber_data_lain" name="sumber_data"
                                                                        value="3" <?php echo ($sumber_data== '3') ?  "checked" : "" ;  ?>>
                                                                    <label class="custom-control-label"
                                                                        for="sumber_data_lain">Orang
                                                                        lain</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-4"></div>
                                                            <div class="col-1">
                                                                <label>Nama</label>
                                                            </div>
                                                            <div class="col-3">
                                                                <input type="text" class="form-control"
                                                                    name="nama_sumber" id="nama_sumber" required value="<?= $nama_sb?>"/>
                                                            </div>
                                                            <div class="col-1">
                                                                <label>Hubungan</label>
                                                            </div>
                                                            <div class="col-3">
                                                                <input type="text" class="form-control"
                                                                    name="hub_sumber" id="hub_sumber" required value="<?= $hubungan_sb?>"/>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <label for="dtg_rs">Datang ke RS</label>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="cara_datang_sendiri" name="cara_datang"
                                                                        value="1" <?php echo ($cara_datang== '1') ?  "checked" : "" ;  ?>>
                                                                    <label class="custom-control-label"
                                                                        for="cara_datang_sendiri">Datang
                                                                        Sendiri</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="cara_datang_diantar" name="cara_datang"
                                                                        value="2" <?php echo ($cara_datang== '2') ?  "checked" : "" ;  ?>>
                                                                    <label class="custom-control-label"
                                                                        for="cara_datang_diantar">Diantar
                                                                        Keluarga</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-1">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="cara_datang_rujukan" name="cara_datang"
                                                                        value="3" <?php echo ($cara_datang== '3') ?  "checked" : "" ;  ?>>
                                                                    <label class="custom-control-label"
                                                                        for="cara_datang_rujukan">Rujukan
                                                                        dari</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <input type="text" style="display: none;" class="form-control"
                                                                    name="cara_datang_rujukan_add"
                                                                    id="cara_datang_rujukan_add" value="<?= $cara_datang?>" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Pengkajian Keperawatan-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="needs-validation" novalidate>
                                                <h4 style="text-align: center;">PENGKAJIAN KEPERAWATAN (S & O)</h4>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="keluhan_utama">Keluhan Utama</label>
                                                        <input type="text" class="form-control" name="keluhan_utama"
                                                            id="keluhan_utama" required value="<?= $keluhan_utama?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="rwyt_ksh_skrg">Riwayat Kesehatan sekarang</label>
                                                        <input type="text" class="form-control" name="riwayat_kes_skrg"
                                                            id="riwayat_kes_skrg" required value="<?= $riwayat_kes_skrg?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="rwyt_ksh_lalu">Riwayat Kesehatan yang lalu</label>
                                                        <input type="text" class="form-control" name="riwayat_kes_lama"
                                                            id="riwayat_kes_lama" required value="<?= $riwayat_kes_lama?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="alergi" class="col-3">Riwayat Alergi
                                                                Obat</label>
                                                            <div class="col-1">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="alergi_tidak" name="alergi" value="1" <?php echo ($riwayat_alergi== 1) ?  "checked" : "" ;  ?>>
                                                                    <label for="alergi_tidak"
                                                                        class="custom-control-label">Tidak
                                                                        Ada</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-0">
                                                                <div class="custom-control custom-radio mb-3">
                                                                    <input type="radio" class="custom-control-input"
                                                                        id="alergi_ada" name="alergi" value="2" <?php echo ($riwayat_alergi== 2) ?  "checked" : "" ;  ?>>
                                                                    <label for="alergi_ada"
                                                                        class="custom-control-label">Ada</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <input type="text" class="form-control" style="display: none;"
                                                                    id="alergi_ada_add" name="alergi" value="<?= $riwayat_alergi?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="suhu">Suhu</label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text" class="form-control"
                                                                            name="suhu" id="suhu" required value="<?= $suhu?>">
                                                                    </div>
                                                                    <div class="col-0">
                                                                        <h5>C</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="nadi">Nadi</label>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <input class="form-control" type="text"
                                                                            name="nadi" id="nadi" required value="<?= $nadi?>">
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <label for="">X/mnt</label>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <label for="tekanan_darah">Tekanan Darah</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="____/____" name="tekanan_darah"
                                                                            id="tekanan_darah" required value="<?= $tekanan_darah?>">
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <label for="">mmHg</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="nafas">Nafas</label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text" class="form-control"
                                                                            name="nafas" id="nafas" required value="<?= $nafas?>">
                                                                    </div>
                                                                    <div class="col-0">
                                                                        <h5>X/mnt</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="nyeri">Nyeri</label>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="custom-control custom-radio mb-3">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                id="nyeri_tidak" name="nyeri" value="1">
                                                                            <label for="nyeri_tidak"
                                                                                class="custom-control-label">Tidak
                                                                                Ada</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <div class="custom-control custom-radio mb-3">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                id="nyeri_ada" name="nyeri" value="2">
                                                                            <label for="nyeri_ada"
                                                                                class="custom-control-label">Ada</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <label for="" class=>:Skala</label>
                                                                    </div>
                                                                    <div class="col-5">

                                                                        <a href="" id="1"><img src="images/1.png" alt=""
                                                                                width="15%"></a>
                                                                        <a href="" id="2"><img src="images/2.png" alt=""
                                                                                width="15%"></a>
                                                                        <a href="" id="3"><img src="images/3.png" alt=""
                                                                                width="15%"></a>
                                                                        <a href="" id="4"><img src="images/4.png" alt=""
                                                                                width="15%"></a>
                                                                        <a href="" id="5"><img src="images/5.png" alt=""
                                                                                width="15%"></a>
                                                                        <a href="" id="6"><img src="images/6.png" alt=""
                                                                                width="15%"></a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="bb">BB</label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text" class="form-control"
                                                                            name="bb" id="bb" required value="<?= $bb?>">
                                                                    </div>
                                                                    <div class="col-0">
                                                                        <h5>Kg</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="tb">TB</label>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <input class="form-control" type="text"
                                                                            name="tb" id="tb" required value="<?= $tb?>">
                                                                    </div>
                                                                    <div class="col-0">
                                                                        <h5>cm</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="spo2">SPO2</label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text" class="form-control"
                                                                            name="spo2" id="spo2" required value="<?= $spo2?>">
                                                                    </div>
                                                                    <div class="col-0">
                                                                        <h5>%</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="gcs">GCS</label>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <input class="form-control" type="text"
                                                                            name="gcs" id="gcs" required value="<?= $gcs?>"> 
                                                                    </div>
                                                                    <div class="col-0">
                                                                        <h5>E</h5>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <input class="form-control" type="text"
                                                                            name="gcs_e" id="gcs_e" required value="<?= $gcs_e?>">
                                                                    </div>
                                                                    <div class="col-0">
                                                                        <h5 for="">V</h5>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <input class="form-control" type="text"
                                                                            name="gcs_v" id="gcs_v" required value="<?= $gcs_v?>">
                                                                    </div>
                                                                    <div class="col-0">
                                                                        <h5>M</h5>
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <input class="form-control" type="text"
                                                                            name="gcs_m" id="gcs_m" required value="<?= $gcs_m?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Status Fungsional & NSR -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <!--Status Fungsional-->
                                            <div class="needs-validation" novalidate>
                                                <div class="form-col">
                                                    <h5>Status Fungsional :</h5>
                                                    <div class="form-col">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="status_fg_r" name="status_fg" value="Ringan" <?php echo ($status_fungsional== 'Ringan') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="status_fg_r">Ketergantungan
                                                                Ringan</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="status_fg_s" name="status_fg" value="Sedang" <?php echo ($status_fungsional== 'Sedang') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="status_fg_s">Ketergantungan
                                                                Sedang</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="status_fg_b" name="status_fg" value="Berat" <?php echo ($status_fungsional== 'Berat') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="status_fg_b">Ketergantungan
                                                                Berat</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="status_fg_t" name="status_fg" value="Total" <?php echo ($status_fungsional== 'Total') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="status_fg_t">Ketergantungan
                                                                Total</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <!--NSR-->
                                            <div class="needs-validation" novalidate>
                                                <h5>Skrining Nutrisi (NSR)</h5>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">1. Indek Masa Tubuh (IMT) 20,5 (IMT =
                                                            BB/TB(m))</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input" id="imt_ya"
                                                                name="imt" value="Ya" <?php echo ($imt== 'Ya') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label" for="imt_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="imt_tidak" name="imt" value="Tidak" <?php echo ($imt== 'Tidak') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="imt_tidak">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">2. Kehilangan BB tidak direncanakan dalam 3 bulan
                                                            terakhir</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="sn_bb_ya" name="sn_bb" value="Ya" <?php echo ($sn_bb== 'Ya') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="sn_bb_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="sn_bb_tidak" name="sn_bb" value="Tidak" <?php echo ($sn_bb== 'Tidak') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="sn_bb_tidak">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">3. Penurunan asupan makanan dalam 1 minggu
                                                            terakhir</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="asupan_makan_ya" name="asupan_makan" value="Ya" <?php echo ($asupan_makan== 'Ya') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="asupan_makan_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="asupan_makan_tidak" name="asupan_makan"
                                                                value="Tidak" <?php echo ($asupan_makan== 'Tidak') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="asupan_makan_tidak">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">4. Apakah pasien memiliki sakit berat</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="sakit_berat_ya" name="sakit_berat" value="Ya" <?php echo ($sakit_berat== 'Ya') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="sakit_berat_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="sakit_berat_tidak" name="sakit_berat" value="Tidak" <?php echo ($sakit_berat== 'Tidak') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="sakit_berat_tidak">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Asesmen Psikologis & Kebutuhan Edukasi -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <!--Asesmen Psikologis-->
                                            <div class="needs-validation" novalidate>
                                                <div class="form-col">
                                                    <h5>Asesmen Psikologis :</h5>
                                                    <div class="form-col">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="asesmen_t" name="asesmen" value="Tenang" <?php echo ($asesmen_psikologis== 'Tenang') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="asesmen_t">Tenang</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="asesmen_c" name="asesmen" value="Cemas" <?php echo ($asesmen_psikologis== 'Cemas') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="asesmen_c">Cemas</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="asesmen_a" name="asesmen" value="Agitasi" <?php echo ($asesmen_psikologis== 'Agitasi') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="asesmen_a">Agitasi</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input" id=""
                                                                name="asesmen">
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input" id=""
                                                                name="asesmen">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <!--Kebutuhan Edukasi-->
                                            <div class="needs-validation" novalidate>
                                                <h5>Kebutuhan Edukasi</h5>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">Kemampuan kognitif</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="kognitif_ya" name="kognitif" value="Ya" <?php echo ($kognitif== 'Ya') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="kognitif_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="kognitif_tdk" name="kognitif" value="Tidak" <?php echo ($kognitif== 'Tidak') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="kognitif_tdk">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">Motivasi Menerima Edukasi</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="motivasi_edukasi_ya" name="motivasi_edukasi"
                                                                value="Ya" <?php echo ($motivasi_edukasi== 'Ya') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="motivasi_edukasi_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="motivasi_edukasi_tdk" name="motivasi_edukasi"
                                                                value="Tidak" <?php echo ($motivasi_edukasi== 'Tidak') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="motivasi_edukasi_tdk">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">Keterbatasan Fisik</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="keterbatasan_fisik_ya" name="keterbatasan_fisik"
                                                                value="Ya" <?php echo ($keterbatasan_fisik== 'Ya') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="keterbatasan_fisik_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="keterbatasan_fisik_tidak" name="keterbatasan_fisik"
                                                                value="Tidak" <?php echo ($keterbatasan_fisik== 'Tidak') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="keterbatasan_fisik_tidak">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">Kebutuhan Penerjemah</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="kebutuhan_penerjemah_ya" name="kebutuhan_penerjemah"
                                                                value="Ya" <?php echo ($kebutuhan_penerjemah== 'Ya') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="kebutuhan_penerjemah_ya">Ya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="kebutuhan_penerjemah_tidak"
                                                                name="kebutuhan_penerjemah" value="Tidak" <?php echo ($kebutuhan_penerjemah== 'Tidak') ?  "checked" : "" ;  ?>> 
                                                            <label class="custom-control-label"
                                                                for="kebutuhan_penerjemah_tidak">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-8">
                                                        <label for="">Kebutuhan Informasi dan Edukasi Tentang :</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control"
                                                            name="kebutuhan_informasi" id="kebutuhan_informasi"
                                                            required value="<?= $kebutuhan_informasi?>">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Status Sosial -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <!--Status sosial ekonomi..-->
                                            <div class="needs-validation" novalidate>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">Status Sosial dan Ekonomi</label>
                                                        <input type="text" class="form-control" name="status_sosial"
                                                            id="status_sosial" required value="<?= $status_sosial?>">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="">Hubungan pasien dengan anggota
                                                                keluarga</label>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="hubungan_keluarga_baik" name="hubungan_keluarga"
                                                                    value="Baik" <?php echo ($hubungan_keluarga== 'Baik') ?  "checked" : "" ;  ?>>
                                                                <label class="custom-control-label"
                                                                    for="hubungan_keluarga_baik">Baik</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="hubungan_keluarga_tidak"
                                                                    name="hubungan_keluarga" value="Tidak" <?php echo ($hubungan_keluarga== 'Tidak') ?  "checked" : "" ;  ?>>
                                                                <label class="custom-control-label"
                                                                    for="hubungan_keluarga_tidak">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="">Tempat Tinggal</label>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="tempat_tgl_sendiri" name="tempat_tinggal"
                                                                    value="1" <?php echo ($tempat_tinggal== '1') ?  "checked" : "" ;  ?>>
                                                                <label class="custom-control-label"
                                                                    for="tempat_tgl_sendiri">Rumah
                                                                    Sendiri</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="tempat_tgl_keluarga" name="tempat_tinggal"
                                                                    value="2" <?php echo ($tempat_tinggal== '2') ?  "checked" : "" ;  ?>>
                                                                <label class="custom-control-label"
                                                                    for="tempat_tgl_keluarga">Rumah
                                                                    Keluarga</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-1">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="tempat_tgl_lainnya" name="tempat_tinggal"
                                                                    value="3" <?php echo ($tempat_tinggal== '3') ?  "checked" : "" ;  ?>>
                                                                <label class="custom-control-label"
                                                                    for="tempat_tgl_lainnya">Lainnya</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" style="display: none;" class="form-control"
                                                                name="tempat_tgl_lainnya_add"
                                                                id="tempat_tgl_lainnya_add" value="<?= $tempat_tinggal?>">
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Resiko Jatuh & Masalah Keperawatan -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <!--Resiko Jatuh-->
                                            <div class="needs-validation" novalidate>
                                                <h4 style="text-align: center;">RESIKO JATUH</h4> <br>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">Dewasa (skala Morse)</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_dewasa_r" name="resiko_dewasa"
                                                                value="Rendah" <?php echo ($resiko_dewasa== 'Rendah') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_dewasa_r">Rendah</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_dewasa_s" name="resiko_dewasa"
                                                                value="Sedang" <?php echo ($resiko_dewasa== 'Sedang') ?  "checked" : "" ;  ?> >
                                                            <label class="custom-control-label"
                                                                for="resiko_dewasa_s">Sedang</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_dewasa_t" name="resiko_dewasa"
                                                                value="Resiko Tinggi"  <?php echo ($resiko_dewasa== 'Resiko Tinggi') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_dewasa_t">Resiko
                                                                Tinggi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">Anak (Humply Dumpty</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_anak_r" name="resiko_anak" value="Rendah"  <?php echo ($resiko_anak== 'Rendah') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_anak_r">Rendah</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_anak_s" name="resiko_anak" value="Sedang" <?php echo ($resiko_anak== 'Sedang') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_anak_s">Sedang</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_anak_t" name="resiko_anak"
                                                                value="Resiko Tinggi" <?php echo ($resiko_anak== 'Resiko Tinggi') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_anak_t">Resiko
                                                                Tinggi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">Geriatri (Ontario Modify Strotify</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_geriarti_r" name="resiko_geriarti"
                                                                value="Rendah" <?php echo ($resiko_geriarti== 'Rendah') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_geriarti_r">Rendah</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_geriarti_s" name="resiko_geriarti"
                                                                value="Sedang" <?php echo ($resiko_geriarti== 'Sedang') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_geriarti_s">Sedang</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_geriarti_t" name="resiko_geriarti"
                                                                value="Resiko Tinggi" <?php echo ($resiko_geriarti== 'Resiko Tinggi') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_geriarti_t">Resiko
                                                                Tinggi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="">Jiwa (Edmonson)</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_jiwa_r" name="resiko_jiwa" value="Rendah" <?php echo ($resiko_jiwa== 'Rendah') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_jiwa_r">Rendah</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_jiwa_s" name="resiko_jiwa" value="Sedang" <?php echo ($resiko_jiwa== 'Sedang') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_jiwa_s">Sedang</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input type="radio" class="custom-control-input"
                                                                id="resiko_jiwa_t" name="resiko_jiwa"
                                                                value="Resiko Tinggi" <?php echo ($resiko_jiwa== 'Resiko Tinggi') ?  "checked" : "" ;  ?>>
                                                            <label class="custom-control-label"
                                                                for="resiko_jiwa_t">Resiko
                                                                Tinggi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <!--Masalah Keperawatan-->
                                            <div class="needs-validation" novalidate>
                                                <h4 style="text-align: center;">MASALAH KEPERAWATAN</h4> <br>
                                                <div class="row">
                                                    <?php 
                                                        for ($i=0; $i < count($status); $i++) { 
                                                            if($status[$i] == '1'){
                                                                echo '
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_nyeri"
                                                                            name="masalah_keperawatan[]" value="1" checked>
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_nyeri">Nyeri
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }else {
                                                                echo '
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_nyeri"
                                                                            name="masalah_keperawatan[]" value="1">
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_nyeri">Nyeri
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }
                                                            
                                                            if($status[$i] == '2'){
                                                                echo '
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_hipertermi"
                                                                            name="masalah_keperawatan[]" value="2" checked>
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_hipertermi">Hipertermi
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }else {
                                                                echo '
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_hipertermi"
                                                                            name="masalah_keperawatan[]" value="2">
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_hipertermi">Hipertermi
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }
                                                            if($status[$i] == '3'){
                                                                echo '
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_resiko_infeksi"
                                                                            name="masalah_keperawatan[]" value="3" checked>
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_resiko_infeksi">Resiko Infeksi
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }else{
                                                                echo '
                                                                <div class="col-4">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_resiko_infeksi"
                                                                            name="masalah_keperawatan[]" value="3">
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_resiko_infeksi">Resiko Infeksi
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            } 
                                                            if($status[$i] == '4'){
                                                                echo '
                                                                <div class="col-6">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_resiko_cidera"
                                                                            name="masalah_keperawatan[]" value="4" checked>
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_resiko_cidera">Resiko Cidera
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }else {
                                                                echo '
                                                                <div class="col-6">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_resiko_cidera"
                                                                            name="masalah_keperawatan[]" value="4">
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_resiko_cidera">Resiko Cidera
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }if($status[$i] == '5'){
                                                                echo '
                                                                <div class="col-6">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_kurang_pengetahuan"
                                                                            name="masalah_keperawatan[]" value="5" checked>
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_kurang_pengetahuan">Kurang Pengetahuan
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }else {
                                                                echo '
                                                                <div class="col-6">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_kurang_pengetahuan"
                                                                            name="masalah_keperawatan[]" value="5">
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_kurang_pengetahuan">Kurang Pengetahuan
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            } if($status[$i] == '6'){
                                                                echo '
                                                                <div class="col-6">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_ketidakefektifan_nafas"
                                                                            name="masalah_keperawatan[]" value="6" checked>
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_ketidakefektifan_nafas">Ketidakefektifan bersihan jalan nafas
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }else {
                                                                echo '
                                                                <div class="col-6">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_ketidakefektifan_nafas"
                                                                            name="masalah_keperawatan[]" value="6">
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_ketidakefektifan_nafas">Ketidakefektifan bersihan jalan nafas
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }
                                                            
                                                            if($status[$i] == '7'){
                                                                echo '
                                                                <div class="col-6">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_manajemen_regimen"
                                                                            name="masalah_keperawatan[]" value="7" checked>
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_manajemen_regimen">Manajemen regimen terapeutik tidak efektif
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }else{
                                                                echo '
                                                                <div class="col-6">
                                                                    <div class="custom-control custom-checkbox mb-3">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="masalah_keperawatan_manajemen_regimen"
                                                                            name="masalah_keperawatan[]" value="7">
                                                                        <label class="custom-control-label"
                                                                            for="masalah_keperawatan_manajemen_regimen">Manajemen regimen terapeutik tidak efektif
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }
                                                            echo '</div>';

                                                            if($status[$i] != '1' || $status[$i] != '2' || $status[$i] != '3' || $status[$i] != '4' || $status[$i] != '5' || $status[$i] != '6' || $status[$i] != '7'){
                                                                
                                                                echo '
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <div class="custom-control custom-checkbox mb-3">
                                                                            <input type="checkbox" class="custom-control-input"
                                                                                id="masalah_keperawatan_lainnya"
                                                                                name="masalah_keperawatan[]" value="7" checked>
                                                                            <label class="custom-control-label"
                                                                                for="masalah_keperawatan_lainnya">Lainnya</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <div class="custom-control custom-checkbox mb-3">
                                                                            <input type="text" class="form-control" 
                                                                                name="masalah_keperawatan[]"
                                                                                id="masalah_keperawatan_lainnya_add" value="'.$status[$i].'">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                ';
                                                            }
                                                        }
                                                     ?>  
                                                </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Rencana interfensi & Waktu Pelaksanaan & Evaluasi & Kontrol Lagi -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="rencana_intervensi">Rencana Interfensi</label>
                                                <textarea name="rencana_intervensi" id="rencana_intervensi"
                                                    class="form-control" style="height: 235px;" ><?= $rencana_intervensi?></textarea>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="waktu_pelaksanaan">Waktu Pelaksanaan</label>
                                                <textarea name="waktu_pelaksanaan" id="waktu_pelaksanaan"
                                                    class="form-control" style="height: 235px;" ><?= $waktu_pelaksanaan?></textarea>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="evaluasi_tindak_lanjut">Evaluasi/Tindak Lanjut</label>
                                                <textarea name="evaluasi_tindak_lanjut" id="evaluasi_tindak_lanjut"
                                                    class="form-control mb-2" style="height: 150px;"><?= $evaluasi?></textarea>
                                                <label for="kontrol_tanggal">Kontrol Lagi Tanggal</label>
                                                <input type="date" name="kontrol_tanggal" id="kontrol_tanggal"
                                                    class="form-control" value="<?= $waktu_kontrol?>"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tombol -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-pink px-4" name="SUBMIT"
                                                id="btn_simpan">SIMPAN</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form id="formInput2">
                        <div class="form-group" id="medis" name="medis">
                            <!-- MEDIS -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="needs-validation" novalidate>
                                                <div class="form-row">
                                                    <h4>MEDIS</h4>
                                                </div>
                                                <div class="form-row">
                                                    <h5>1. Anamnesis (S)</h5>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="keluhan_utama_medis">Keluhan Utama : </label>
                                                        <textarea style="height: 150px;" class="form-control"
                                                            id="keluhan_utama_medis" name="medis_keluhan" placeholder=""
                                                            required><?= $medis_keluhan?></textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="riwayat_penyakit_sekarang">Riwayat Penyakit
                                                            Sekarang</label>
                                                        <textarea style="height: 150px;" class="form-control"
                                                            id="riwayat_penyakit_sekarang" name="penyakit_sekarang"
                                                            placeholder="" required></textarea>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="">Riwayat Penyakit Dahulu</label>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="custom-control custom-checkbox col-md-3">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="riwayat_pykt_dulu_tidak"
                                                                        name="penyakit_dulu" value="1">
                                                                    <label class="custom-control-label"
                                                                        for="riwayat_pykt_dulu_tidak">Tidak Ada</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox col-md-3">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="riwayat_pykt_dulu_hipertensi"
                                                                        name="penyakit_dulu" value="2">
                                                                    <label class="custom-control-label"
                                                                        for="riwayat_pykt_dulu_hipertensi">Hipertensi</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox col-md-3">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="riwayat_pykt_dulu_asma" name="penyakit_dulu"
                                                                        value="3">
                                                                    <label class="custom-control-label"
                                                                        for="riwayat_pykt_dulu_asma">Asma</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox col-md-3">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="riwayat_pykt_dulu_tbc" name="penyakit_dulu"
                                                                        value="4">
                                                                    <label class="custom-control-label"
                                                                        for="riwayat_pykt_dulu_tbc">TBC</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="custom-control custom-checkbox col-md-3">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="riwayat_pykt_dulu_dm" name="penyakit_dulu"
                                                                        value="5">
                                                                    <label class="custom-control-label"
                                                                        for="riwayat_pykt_dulu_dm">DM</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox col-md-3">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="riwayat_pykt_dulu_ginjal"
                                                                        name="penyakit_dulu" value="6">
                                                                    <label class="custom-control-label"
                                                                        for="riwayat_pykt_dulu_ginjal">Penyakit
                                                                        Ginjal</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox col-md-4">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="riwayat_pykt_dulu_jantung"
                                                                        name="penyakit_dulu" value="7">
                                                                    <label class="custom-control-label ml-3"
                                                                        for="riwayat_pykt_dulu_jantung">Penyakit
                                                                        Jantung</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="custom-control custom-checkbox col-md-2">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="penyakit_dulu_lain" name="penyakit_dulu">
                                                                    <label class="custom-control-label"
                                                                        for="penyakit_dulu_lain">Lainnya</label>

                                                                </div>
                                                                <div class="custom-control custom-checkbox col-md-10">
                                                                    <input type="text" class="form-control" style="display: none;"
                                                                        name="penyakit_dulu" id="penyakit_dulu_lain_add">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <label class="col-4" for="riwayat_op">Riwayat
                                                                Operasi</label>
                                                            <div class="custom-control custom-radio col-0 mr-2">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="riwayat_op_tdk" name="riwayat_op"
                                                                    data-parsley-multiple="radio-stacked" value="Tidak">
                                                                <label class="custom-control-label"
                                                                    for="riwayat_op_tdk">Tidak</label>
                                                            </div>
                                                            <div class="custom-control custom-radio col-0 mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="riwayat_op_ya" name="riwayat_op"
                                                                    data-parsley-multiple="riwayat_op" value="Ya">
                                                                <label class="custom-control-label"
                                                                    for="riwayat_op_ya">Ya
                                                                </label>

                                                            </div>
                                                            <input type="text" style="display: none;" class="form-control col-3 mr-1"
                                                                id="riwayat_op_ya_add" name="riwayat_op">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <div class="row">
                                                            <label class="col-4" for="riwayat_alergi">Riwayat
                                                                Alergi</label>
                                                            <div class="custom-control custom-radio ml-0 mr-2">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="riwayat_alergi_tdk" name="riwayat_alergi"
                                                                    data-parsley-multiple="riwayat_alergi"
                                                                    value="Tidak">
                                                                <label class="custom-control-label"
                                                                    for="riwayat_alergi_tdk">Tidak</label>
                                                            </div>
                                                            <div class="custom-control custom-radio ml-0 mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="riwayat_alergi_ada" name="riwayat_alergi"
                                                                    data-parsley-multiple="riwayat_alergi" value="Ada">
                                                                <label class="custom-control-label"
                                                                    for="riwayat_alergi_ada">Ada</label>

                                                            </div>
                                                            <input type="text" class="form-control col-md-3" style="display: none;"
                                                                id="riwayat_alergi_ada_add" name="riwayat_alergi"
                                                                placeholder="Reaksi">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <div class="row">
                                                            <label class="col-4" for="riwayat_pykt_klg">Riwayat Penyakit
                                                                Keluarga</label>
                                                            <div class="custom-control custom-radio ml-0 mr-2">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="riwayat_pykt_klg_tdk" name="riwayat_pykt_klg"
                                                                    data-parsley-multiple="riwayat_pykt_klg" value="Tidak">
                                                                <label class="custom-control-label"
                                                                    for="riwayat_pykt_klg_tdk">Tidak</label>
                                                            </div>
                                                            <div class="custom-control custom-radio ml-0 mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="riwayat_pykt_klg_ada" name="riwayat_pykt_klg"
                                                                    data-parsley-multiple="riwayat_pykt_klg" value="Ada">
                                                                <label class="custom-control-label"
                                                                    for="riwayat_pykt_klg_ada">Ada</label>
                                                            </div>
                                                            <input type="text" id="riwayat_pykt_klg_ada_add" style="display: none;"
                                                                name="riwayat_pykt_klg" class="form-control col-md-3"
                                                                >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <div class="row">
                                                            <label class="col-4" for="riwayat_pengobatan">Riwayat
                                                                Pengobatan</label>
                                                            <div class="custom-control custom-radio ml-0 mr-2">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="riwayat_pengobatan_tdk"
                                                                    name="riwayat_pengobatan"
                                                                    data-parsley-multiple="riwayat_pengobatan"
                                                                    value="Tidak">
                                                                <label class="custom-control-label"
                                                                    for="riwayat_pengobatan_tdk">Tidak</label>
                                                            </div>
                                                            <div class="custom-control custom-radio ml-0 mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="riwayat_pengobatan_ada"
                                                                    name="riwayat_pengobatan"
                                                                    data-parsley-multiple="riwayat_pengobatan"
                                                                    value="Ada">
                                                                <label class="custom-control-label"
                                                                    for="riwayat_pengobatan_ada">Ada</label>
                                                            </div>
                                                            <input type="text" id="riwayat_pengobatan_ada_add"
                                                                name="riwayat_pengobatan" style="display: none;"
                                                                class="form-control col-md-3">
                                                        </div>
                                                    </div>
                                                    <!-- <h5>2. Pemeriksaan Fisik dan Hasil Pemeriksaan Penunjang (O)</h5>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        name="pemeriksaan_fisik" id="pemeriksaan_fisik" required>
                                                    <label class="custom-file-label" for="pemeriksaan_fisik">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                    </div>
                                                </div>
                                                <div class='preview' style="width: 100px;
                                                height: 100px;
                                                border: 1px solid black;
                                                margin: 0 auto;
                                                background: white;">
                                                    <img id="img" width="100" height="100">
                                                </div>
                                                <button class="btn btn-secondary" id="but_upload"
                                                    type="submit">Submit
                                                    form</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="needs-validation" novalidate>

                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h5 class="ml-3">3. Diagnosa (A)</h5>
                                                        <textarea style="height: 150px;" class="form-control ml-3"
                                                            id="diagnosa" name="diagnosa" placeholder=""
                                                            required></textarea>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5>Kode ICD</h5>
                                                        <textarea style="height: 150px;" class="form-control"
                                                            id="kode_icd" name="kode_icd" placeholder=""
                                                            required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>4. Rencana Tindakan (P)</h5>
                                                    <textarea style="height: 150px;" class="form-control"
                                                        id="rencana_tindakan" name="rencana_tindakan" placeholder=""
                                                        required></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>5. Edukasi Topik :</h5>
                                                    <textarea style="height: 150px;" class="form-control"
                                                        id="edukasi_topik" name="edukasi_topik" placeholder=""
                                                        required></textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tombol -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-pink px-4"
                                                id="btn_simpan2">SIMPAN</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </form>
    </div>
    </div>

    <footer class="footer text-center text-sm-left">
        © 2018-2019 Amezia <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
    </footer>
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->


    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/waves.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>

    <!-- Parsley js -->
    <script src="../assets/plugins/parsleyjs/parsley.min.js"></script>
    <script src="../assets/pages/jquery.form-validation.init-.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

    <!-- App js -->
    <script src="../assets/js/app.js"></script>
    <script>
        // $(document).ready(function(){
        //   $('#penyakitLain').change(function(){
        //     $("#inputPenyakitLain").prop("disabled",false);
        // });
        // $('#klinik_lainnya').change(function () {
        //     $("#klinik_lainnya_input").prop("hidden", false);
        // });

        //     $(function () {
        //     $("#klinik_lainnya").click(function () {
        //         if ($(this).is(":change")) {
        //             $("#klinik_lainnya_input").show();
        //         } else {
        //             $("#klinik_lainnya_input").hide();
        //         }
        //     });
        // });

        $(document).ready(function () {
            $("input[name='klinik']").change(function () {
                if ($(this).val() == 5) {
                    $("#klinik_lainnya_input").show();
                }
                else {
                    $("#klinik_lainnya_input").hide();
                }
            });

            $("input[name='cara_datang']").change(function () {
                if ($(this).val() == 3) {
                    $("#cara_datang_rujukan_add").show();
                }
                else {
                    $("#cara_datang_rujukan_add").hide();
                }
            });

            
            $("input[name='alergi']").change(function () {
                if ($(this).val() == 2) {
                    $("#alergi_ada_add").show();
                }
                else {
                    $("#alergi_ada_add").hide();
                }
            });

            $("input[name='tempat_tinggal']").change(function () {
                if ($(this).val() == 3) {
                    $("#tempat_tgl_lainnya_add").show();
                }
                else {
                    $("#tempat_tgl_lainnya_add").hide();
                }
            });
            

            $("#masalah_keperawatan_lainnya").click(function () {
            if ($(this).is(":checked")) {
                $("#masalah_keperawatan_lainnya_add").show();
            } else {
                $("#masalah_keperawatan_lainnya_add").hide();
            }
             });
            
            $("#penyakit_dulu_lain").click(function () {
            if ($(this).is(":checked")) {
                $("#penyakit_dulu_lain_add").show();
            } else {
                $("#penyakit_dulu_lain_add").hide();
            }
            });
            
            $("input[name='riwayat_op']").change(function () {
                if ($(this).val() == 'Ya') {
                    $("#riwayat_op_ya_add").show();
                }
                else {
                    $("#riwayat_op_ya_add").hide();
                }
            });

            $("input[name='riwayat_alergi']").change(function () {
                if ($(this).val() == 'Ada') {
                    $("#riwayat_alergi_ada_add").show();
                }
                else {
                    $("#riwayat_alergi_ada_add").hide();
                }
            });
        
            $("input[name='riwayat_pykt_klg']").change(function () {
                if ($(this).val() == 'Ada') {
                    $("#riwayat_pykt_klg_ada_add").show();
                }
                else {
                    $("#riwayat_pykt_klg_ada_add").hide();
                }
            });

            $("input[name='riwayat_pengobatan']").change(function () {
                if ($(this).val() == 'Ada') {
                    $("#riwayat_pengobatan_ada_add").show();
                }
                else {
                    $("#riwayat_pengobatan_ada_add").hide();
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {

            var re = /^[0-9]+$/;

            $("#btn_simpan").on("click", function (e) {
                // jam_plg = $(#jam_plg).val();
                no_rm = $("#no_rm_x").val();
                no_kunjungan = $("#no_kunjungan").val();
                nama = $("#nama").val();
                umur = $("#umur").val();
                jns_kel = $("#jns_kel").val();

                tgl_kunjungan = $("#tgl_kunjungan").val();
                jam_dtg = $("#jam_dtg").val();
                jam_plg = $("#jam_plg").val();

                klinik = $('input[name="klinik"]:checked').val();
                sumber_data = $('input[name="sumber_data"]:checked').val();
                nama_sumber = $("#nama_sumber").val();
                hub_sumber = $("#hub_sumber").val();
                dtg_rs = $('input[name="dtg_rs"]:checked').val();

                keluhan_utama = $("#keluhan_utama").val();
                riwayat_kes_skrg = $("#riwayat_kes_skrg").val();
                riwayat_kes_lama = $("#riwayat_kes_lama").val();
                alergi = $('input[name="alergi"]:checked').val();

                suhu = $("#suhu").val();
                nadi = $("#nadi").val();
                tekanan_darah = $("#tekanan_darah").val();
                nafas = $("#nafas").val();
                nyeri = $('input[name="nyeri"]:checked').val();

                bb = $("#bb").val();
                tb = $("#tb").val();
                spo2 = $("#spo2").val();
                gcs = $("#gcs").val();
                gcs_e = $("#gcs_e").val();
                gcs_v = $("#gcs_v").val();
                gcs_m = $("#gcs_m").val();

                status_fg = $('input[name="status_fg"]:checked').val();
                imt = $('input[name="imt"]:checked').val();
                sn_bb = $('input[name="sn_bb"]:checked').val();
                asupan_makan = $('input[name="asupan_makan"]:checked').val();
                sakit_berat = $('input[name="sakit_berat"]:checked').val();
                asesmen = $('input[name="asesmen"]:checked').val();

                kognitif = $('input[name="kognitif"]:checked').val();
                motivasi_edukasi = $('input[name="motivasi_edukasi"]:checked').val();
                keterbatasan_fisik = $('input[name="keterbatasan_fisik"]:checked').val();
                kebutuhan_penerjemah = $('input[name="kebutuhan_penerjemah"]:checked').val();
                kebutuhan_informasi = $("#kebutuhan_informasi").val();

                status_sosial = $("#status_sosial").val();
                hubungan_keluarga = $('input[name="hubungan_keluarga"]:checked').val();
                tempat_tgl = $('input[name="tempat_tgl"]:checked').val();
                resiko_dewasa = $('input[name="resiko_dewasa"]:checked').val();
                resiko_anak = $('input[name="anak"]:checked').val();
                resiko_geriarti = $('input[name="resiko_geriarti"]:checked').val();
                resiko_jiwa = $('input[name="resiko_jiwa"]:checked').val();
                masalah_keperawatan = $('input[name="masalah_keperawatan"]:checked').val();

                rencana_intervensi = $("#rencana_intervensi").val();
                waktu_pelaksanaan = $("#waktu_pelaksanaan").val();
                evaluasi_tindak_lanjut = $("#evaluasi_tindak_lanjut").val();
                kontrol_tanggal = $("#kontrol_tanggal").val();

                $("#but_upload").click(function () {

                    var fd = new FormData();
                    var files = $('#file')[0].files[0];
                    fd.append('file', files);
                    $.ajax({
                        url: 'asesmen2.php',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            if (response != 0) {
                                $("#img").attr("src", response);
                                $(".preview img").show(); // Display image element
                            } else {
                                alert('file not uploaded');
                            }
                        },
                    });
                });

                if (jam_plg == "") {
                    alert("Mohon untuk mengisi jam pulang terlebih dahulu!")
                } else if (nama_sumber == "") {
                    alert("Mohon untuk mengisi data nama sumber terlebih dahulu!")
                } else if (hub_sumber == "") {
                    alert("Mohon untuk mengisi hubungan dengan sumber data terlebih dahulu!")
                } else if (keluhan_utama == "") {
                    alert("Mohon untuk mengisi keluhan utama terlebih dahulu!")
                } else if (riwayat_kes_skrg == "") {
                    alert("Mohon untuk mengisi riwayat kesehatan sekarang terlebih dahulu!")
                } else if (riwayat_kes_lama == "") {
                    alert("Mohon untuk mengisi riwayat kesehatan lama terlebih dahulu!")
                } else if (suhu == "") {
                    alert("Mohon untuk mengisi data suhu terlebih dahulu!")
                } else if (nadi == "") {
                    alert("Mohon untuk mengisi data nadi terlebih dahulu!")
                } else if (tekanan_darah == "") {
                    alert("Mohon untuk mengisi tekanan darah terlebih dahulu!")
                } else if (nafas == "") {
                    alert("Mohon untuk mengisi data nafas terlebih dahulu!")
                } else if (bb == "") {
                    alert("Mohon untuk mengisi data berat badan terlebih dahulu!")
                } else if (spo2 == "") {
                    alert("Mohon untuk mengisi data spo2 terlebih dahulu!")
                } else if (tb == "") {
                    alert("Mohon untuk mengisi data tinggi badan terlebih dahulu!")
                } else if (gcs == "" && gcs_e == "" && gcs_v == "" && gcs_m == "") {
                    alert("Mohon untuk mengisi data gcs sumber terlebih dahulu!")
                } else if (kebutuhan_informasi == "") {
                    alert("Mohon untuk mengisi data kebutuhan informasi dan edukasi terlebih dahulu!")
                } else if (status_sosial == "") {
                    alert("Mohon untuk mengisi data status sosial terlebih dahulu!")
                } else {
                    var no_rm = $("#no_rm_x").val();
                    var $form = $("#formInput1");
                    var $inputs = $form.find("input, select, button, textarea");
                    var serializedData = new FormData($("#formInput1")[0]);
                    $.ajax({
                        url: 'inc/asesmen.php',
                        type: 'POST',
                        data: $("#formInput1").serialize(),
                        success: function (no_rm) {
                            alert(no_rm);
                            // window.print(datax);
                            // window.location.href = 'inc/cetak.php?kode='+ no_rm
                            // if (datax == "-1") {

                            // } else {

                            // }
                        },
                        error: function (ts) {
                            console.log(ts)
                            alert(ts.responseText)
                        }
                    });
                }
            });

            $("#btn_simpan2").on("click", function (e) {
                keluhan_utama_medis = $("#keluhan_utama_medis").val();
                riwayat_penyakit_sekarang = $("#riwayat_penyakit_sekarang").val();
                penyakit_dulu = $('input[name="penyakit_dulu"]:checked').val();
                riwayat_op = $('input[name="riwayat_op"]:checked').val();
                riwayat_alergi = $('input[name="riwayat_alergi"]:checked').val();
                riwayat_pykt_klg = $('input[name="riwayat_pykt_klg"]:checked').val();
                riwayat_pengobatan = $('input[name="riwayat_pengobatan"]:checked').val();
                pemeriksaan_fisik = $("#pemeriksaan_fisik").val();
                diagnosa = $("#diagnosa").val();
                rencana_tindakan = $("#rencana_tindakan").val();
                edukasi_topik = $("#edukasi_topik").val();


                if (keluhan_utama_medis == "") {
                    alert("Mohon untuk mengisi keluhan utama terlebih dahulu!")
                } else if (riwayat_penyakit_sekarang == "") {
                    alert("Mohon untuk mengisi riwayat penyakit sekarang terlebih dahulu!")
                } else if (riwayat_pykt_klg == "") {
                    alert("Mohon untuk mengisi riwayat penyakit keluarga terlebih dahulu!")
                } else if (pemeriksaan_fisik == "") {
                    alert("Mohon untuk mengisi pemeriksaan fisik terlebih dahulu!")
                } else if (diagnosa == "") {
                    alert("Mohon untuk mengisi diagnosa terlebih dahulu!")
                } else if (rencana_tindakan == "") {
                    alert("Mohon untuk mengisi rencana tindakan terlebih dahulu!")
                } else if (edukasi_topik == "") {
                    alert("Mohon untuk mengisi edukasi topik terlebih dahulu!")
                } else {
                    var $form = $("#formInput2");
                    var $inputs = $form.find("input, select, button, textarea");
                    var serializedData = new FormData($("#formInput2")[0]);
                    $.ajax({
                        url: 'inc/asesmen2.php',
                        type: 'POST',
                        data: $("#formInput2").serialize(),
                        success: function (datax) {
                            alert(datax);
                            if (datax == "-1") {

                            } else {

                            }
                        },
                        error: function (ts) {
                            console.log(ts)
                            alert(ts.responseText)
                        }
                    });
                }


            })
            $(".del").on("click", function () {
                var id_x = $(this).attr("idx");
                $.ajax({
                    url: 'inc/stock_q.php',
                    type: 'POST',
                    data: 'DEL=1&id=' + id_x,
                    success: function (data) {
                        alert("Hapus data tindakan sukses!");
                        location.reload();
                    }
                });

            });
        });
    </script>
</body>

</html>