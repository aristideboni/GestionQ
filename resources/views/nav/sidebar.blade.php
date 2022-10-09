<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset ('images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('app_dashboard') }}">Dashboard</a>
                        </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>List</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('app_pays_list') }}">Pays</a>
                        </li>
                        <li>
                            <a href="{{ route('app_ville_list') }}">Villes</a>
                        </li>
                        <li>
                            <a href="{{ route('app_quartier_list') }}">Quartiers</a>
                        </li>
                        <li>
                            <a href="{{ route('app_logement_list') }}">Logements</a>
                        </li>
                        <li>
                            <a href="{{ route('app_habitant_list') }}">Habitants</a>
                        </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Add</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('app_pays_add') }}">Pays</a>
                        </li>
                        <li>
                            <a href="{{ route('app_ville_add') }}">Villes</a>
                        </li>
                        <li>
                            <a href="{{ route('app_quartier_add') }}">Quartiers</a>
                        </li>
                        <li>
                            <a href="{{ route('app_logement_add') }}">Logements</a>
                        </li>
                        <li>
                            <a href="{{ route('app_habitant_add') }}">Habitants</a>
                        </li>

                    </ul>
                </li>




            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
