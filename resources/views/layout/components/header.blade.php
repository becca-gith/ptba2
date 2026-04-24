<!-- Header -->
<div class="header" style="background-color: #006a4e; color: #FFFFFF;">
    <div class="main-header d-flex align-items-center justify-content-between">

        <!-- Logo & PTBA -->
        <div class="header-left active d-flex align-items-center">
            <!-- Armoirie du Togo -->
            <img src="{{ asset('app/assets/img/armoirie.png') }}" alt="Armoirie Togo"
                 style="height:40px; margin-right:10px;">

            <!-- Texte PTBA -->
            <a href="{{ url('/') }}" class="logo logo-normal me-2 text-decoration-none">
    <span class="fs-3 fw-bold"
          style="font-family: 'Kumbh Sans', sans-serif; color: #FFFFFF;">
       Projet  | {{ ucfirst(session('ProjetActif.libelle', 'Projet') ) }}
    </span>
            </a>
        </div>
        <!-- /Logo -->

        <!-- Bouton mobile -->
        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span><span></span><span></span>
            </span>
        </a>

        <!-- Header Menu -->
        <ul class="nav user-menu">

            <!-- Search -->
            <li class="nav-item nav-searchinputs">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </li>
            <!-- /Search -->


           <!-- RUSH - Liste des projets statique -->
<li class="nav-item dropdown pos-nav">
    <a href="#" class="btn btn-light btn-md d-inline-flex align-items-center text-dark fw-bold dropdown-toggle" 
       id="rushDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ti ti-device-laptop me-1"></i> PROJETS
    </a>
    <ul class="dropdown-menu" aria-labelledby="rushDropdown">
        <li><a class="dropdown-item" href="#">Projet Alpha</a></li>
        <li><a class="dropdown-item" href="#">Projet Beta</a></li>
        <li><a class="dropdown-item" href="#">Projet Gamma</a></li>
        <li><a class="dropdown-item" href="#">Projet Delta</a></li>
    </ul>
</li>


            <!-- Fullscreen -->
            <li class="nav-item nav-item-box">
                <a href="javascript:void(0);" id="btnFullscreen"><i class="ti ti-maximize"></i></a>
            </li>


            <!-- Notifications -->
            <li class="nav-item dropdown nav-item-box">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <i class="ti ti-bell"></i>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header d-flex justify-content-between align-items-center">
                        <h5 class="notification-title">Notifications</h5>
                        <a href="javascript:void(0)" class="clear-noti">Tout marquer comme lu</a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message p-2">
                                <p class="mb-0">⚡ Exemple de notification</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- Profil -->
            <li class="nav-item dropdown has-arrow main-drop profile-nav">
                <a href="javascript:void(0);" class="nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-info p-0">
                        <img src="{{asset('app')}}/assets/img/profiles/avator1.jpg"
                             alt="Img" class="img-fluid rounded-circle" style="height:35px;">
                    </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profileset d-flex align-items-center p-2">
                        <img src="{{asset('app')}}/assets/img/profiles/avator1.jpg"
                             alt="Img" class="me-2 rounded-circle" style="height:40px;">
                        <div>
                            <h6 class="fw-bold mb-0">John Smilga</h6>
                            <small>Admin</small>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profile.html"><i class="ti ti-user-circle me-2"></i>Mon profil</a>
                    <a class="dropdown-item" href="sales-report.html"><i class="ti ti-file-text me-2"></i>Mes documents</a>
                    <hr class="my-2">
                    <a class="dropdown-item logout pb-0" href="signin.html"><i class="ti ti-logout me-2"></i>Se déconnecter</a>
                </div>
            </li>
        </ul>
        <!-- /Header Menu -->

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="profile.html">Mon profil</a>
                <a class="dropdown-item" href="signin.html">Se déconnecter</a>
            </div>
        </div>
        <!-- /Mobile Menu -->
    </div>
</div>
<!-- /Header -->
