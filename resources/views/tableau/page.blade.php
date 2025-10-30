@extends('layout.app')

@section('title')

    PTBA | Tableau de bord

@endsection

@section('css')



@endsection

@section('contenu')


    <div class="content">

        <div class="container-fluid py-4">
            <!-- TITRE DU DASHBOARD -->
            <div class="mb-4">
                <h3 class="fw-bold">Tableau de Bord PTBA</h3>
                <p class="text-muted">Résumé de l’activité du logiciel</p>
            </div>

            <!-- CARDS DES INDICATEURS (couleurs et tailles harmonisées) -->
            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <div class="card text-white bg-success h-100 shadow-sm p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-uppercase mb-2">PTBA</h6>
                                <h4 class="fw-bold">12</h4>
                            </div>
                            <i class="ti ti-file-check fs-3"></i>
                        </div>
                        <p class="mt-2 mb-0"><i class="ti ti-arrow-up"></i> +10% depuis le mois dernier</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card text-white bg-danger h-100 shadow-sm p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-uppercase mb-2">Décaissements</h6>
                                <h4 class="fw-bold">8</h4>
                            </div>
                            <i class="ti ti-currency-dollar fs-3"></i>
                        </div>
                        <p class="mt-2 mb-0"><i class="ti ti-arrow-down"></i> -5% depuis la semaine dernière</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card text-white bg-primary h-100 shadow-sm p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-uppercase mb-2">Entrées</h6>
                                <h4 class="fw-bold">15</h4>
                            </div>
                            <i class="ti ti-wallet fs-3"></i>
                        </div>
                        <p class="mt-2 mb-0"><i class="ti ti-arrow-up"></i> +20% ce mois-ci</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card text-white bg-warning h-100 shadow-sm p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-uppercase mb-2">Opérations</h6>
                                <h4 class="fw-bold">24</h4>
                            </div>
                            <i class="ti ti-activity fs-3"></i>
                        </div>
                        <p class="mt-2 mb-0"><i class="ti ti-arrow-up"></i> +8% aujourd’hui</p>
                    </div>
                </div>
            </div>

            <!-- GRAPHIQUE SIMPLIFIÉ AVEC CARDS COLORÉES AU LIEU DE CHART.JS -->
            <div class="row g-4 mb-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-0 shadow-sm p-3 bg-light h-100">
                        <h6 class="text-muted mb-2">Total Montants Entrées</h6>
                        <h4 class="fw-bold text-success">425 000 FCFA</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-0 shadow-sm p-3 bg-light h-100">
                        <h6 class="text-muted mb-2">Total Montants Décaissements</h6>
                        <h4 class="fw-bold text-danger">370 000 FCFA</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-0 shadow-sm p-3 bg-light h-100">
                        <h6 class="text-muted mb-2">PTBA Actifs</h6>
                        <h4 class="fw-bold text-success">12</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card border-0 shadow-sm p-3 bg-light h-100">
                        <h6 class="text-muted mb-2">Opérations Totales</h6>
                        <h4 class="fw-bold text-warning">24</h4>
                    </div>
                </div>
            </div>

            <!-- TABLEAUX DES DERNIÈRES ENTRÉES ET DÉCAISSEMENTS -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm p-3">
                        <h6 class="text-muted mb-3">Dernières Entrées</h6>
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th>Libellé</th>
                                <th>Montant</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Vente matériel</td>
                                <td>75 000 FCFA</td>
                                <td>22/10/2025</td>
                            </tr>
                            <tr>
                                <td>Recette formation</td>
                                <td>150 000 FCFA</td>
                                <td>20/10/2025</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm p-3">
                        <h6 class="text-muted mb-3">Derniers Décaissements</h6>
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th>Libellé</th>
                                <th>Montant</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Mission terrain</td>
                                <td>250 000 FCFA</td>
                                <td>20/10/2025</td>
                            </tr>
                            <tr>
                                <td>Achat fournitures</td>
                                <td>120 000 FCFA</td>
                                <td>18/10/2025</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>


@endsection


@section('js')


@endsection
