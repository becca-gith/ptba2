<!-- Sidebar -->
<div class="sidebar sidebar-horizontal" id="horizontal-menu">
    <div id="sidebar-menu-3" class="sidebar-menu">
        <div class="main-menu">
            <ul class="nav-menu">

                <!-- TABLEAU DE BORD -->
                
                <li class="submenu">
                    <a href="{{ url('/') }}">
                        <i class="ti ti-restaurant fs-16 me-2"></i>
                        <span>TABLEAU DE BORD </span>
                       
                    </a>
                    
                </li>


                <!-- PTBA -->
                <li class="submenu">
                    <a href="{{ url('/ptbas/index') }}">
                        <i class="ti ti-restaurant fs-16 me-2"></i>
                        <span>PTBA</span>
                       
                    </a>
                    
                </li>

                <!-- OPERATIONS -->
                <li class="submenu">
                    <a href="{{ url('/operations/index') }}">
                        <i class="ti ti-chart-bar fs-16 me-2"></i>
                        <span>OPERATIONS</span>
                       
                    </a>
                   
                </li>
                
                <!-- CAISSE -->
                <li class="submenu">
                    <a href="{{ url('/decaissements/index') }}">
                        <i class="ti ti-settings fs-16 me-2"></i>
                        <span>DECAISSEMENTS </span>
                       
                    </a>
                    
                </li>

                <!-- ENTREE DE FONDS -->
                <li class="submenu">
                    <a href="{{ url('/produits') }}">
                        <i class="ti ti-coin fs-16 me-2"></i>
                        <span>ENTREE DE FONDS </span>
                      
                    </a>
                    
                </li>

                
                
                
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="ti ti-restaurant fs-16 me-2"></i>
                        <span>PARAMETRES</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ url('/annees/index') }}"><span>ANNEES</span></a></li>
                        <li><a href="{{ url('/utilisateurs/index') }}"><span>UTILISATEURS</span></a></li>
                        
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

