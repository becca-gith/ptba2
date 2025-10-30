<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <div class="search-set">
            <div class="search-input">
                <span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span>
            </div>
        </div>

    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table datatable table-hover align-middle">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Libellé</th>
                    <th>Type</th>
                    <th>Composants</th>
                    <th>Activités</th>
                    <th>Montant total</th>
                    <th>Montant engagé</th>
                    <th>Statut</th>
                    <th class="text-center" style="min-width: 220px;">Actions</th>
                </tr>
                </thead>
                <tbody id="liste_ptba">

                <!-- PTBA exemple -->
                <tr>
                    <td>1</td>
                    <td>PTBA Santé 2025</td>
                    <td><span class="badge rounded-pill bg-soft-success">Investissement</span></td>
                    <td>12</td>
                    <td>10</td>
                    <td><span class="badge rounded-pill bg-soft-success">8 500 000</span></td>
                    <td><span class="badge rounded-pill bg-soft-success">6 300 000</span></td>
                    <td><span class="badge rounded-pill bg-soft-success">Engagé</span></td>
                    <td class="text-center">
                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Voir  Detail</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Modifier PTBA  </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Ajouter un composant </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Ajouter une activité  </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="trash" class="info-img"></i>Suprimer  un PTBA   </a>
                            </li>
                        </ul>
                    </td>
                </tr>

                <!-- PTBA non engagé -->


                </tbody>
            </table>
        </div>
    </div>
</div>

