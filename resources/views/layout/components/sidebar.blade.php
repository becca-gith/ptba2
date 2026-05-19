<!-- Sidebar -->
<div class="sidebar sidebar-horizontal" id="horizontal-menu">
    <div id="sidebar-menu-3" class="sidebar-menu">
        <div class="main-menu">
            <ul class="nav-menu">


            
                <!-- TABLEAU DE BORD -->
                <li class="{{ request()->is('/') ? 'active-menu' : '' }}">
                    <a href="{{ url('/') }}">
                        <i class="ti ti-dashboard fs-16 me-2"></i>
                        <span>TABLEAU DE BORD</span>
                    </a>
                </li>

                <!-- PTBA -->
                <li class="{{ request()->is('ptbas*') ? 'active-menu' : '' }}">
                    <a href="{{ url('/ptbas/index') }}">
                        <i class="ti ti-list-details fs-16 me-2"></i>
                        <span>PTBA</span>
                    </a>
                </li>

               <!-- HORS PIP -->
                <li class="{{ request()->is('ptbas*') ? 'active-menu' : '' }}">
                    <a href="{{ url('/horspips/index') }}">
                        <i class="ti ti-list-details fs-16 me-2"></i>
                        <span>HORS PIP</span>
                    </a>
                </li>

                <!-- ACTIVITES -->
                <li class="{{ request()->is('activites*') ? 'active-menu' : '' }}">
                    <a href="{{ url('/activites/index') }}">
                        <i class="ti ti-chart-bar fs-16 me-2"></i>
                        <span>ACTIVITES</span>
                    </a>
                </li>




                <!-- OPERATIONS -->
                <li class="{{ request()->is('operations*') ? 'active-menu' : '' }}">
                    <a href="{{ url('/operations/index') }}">
                        <i class="ti ti-chart-bar fs-16 me-2"></i>
                        <span>OPERATIONS</span>
                    </a>
                </li>

                <!-- PARAMETRES -->
                <li class="submenu {{ request()->is('annees*') || request()->is('bailleurs*') || request()->is('utilisateurs*') ? 'open' : '' }}">
                    <a href="javascript:void(0);">
                        <i class="ti ti-settings fs-16 me-2"></i>
                        <span>PARAMETRES</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->is('annees*') ? 'active-submenu' : '' }}">
                            <a href="{{ url('/annees/index') }}"><span>ANNEES</span></a>
                        </li>
                        <li class="{{ request()->is('bailleurs*') ? 'active-submenu' : '' }}">
                            <a href="{{ url('/bailleurs/index') }}"><span>BAILLEURS</span></a>
                        </li>

                        <li class="{{ request()->is('projets*') ? 'active-submenu' : '' }}">
                            <a href="{{ url('/projets/index') }}"><span>PROJETS</span></a>
                        </li>
                        <li class="{{ request()->is('utilisateurs*') ? 'active-submenu' : '' }}">
                            <a href="{{ url('/utilisateurs/index') }}"><span>UTILISATEURS</span></a>
                        </li>

                        <li class="{{ request()->is('historiques*') ? 'active-submenu' : '' }}">
                            <a href="{{ url('/historiques/index') }}"><span>HISTORIQUE</span></a>
                        </li>


                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->


