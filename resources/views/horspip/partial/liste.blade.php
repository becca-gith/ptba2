<style>
    /* Animation pour la flèche du collapse */
    .rotate {
        transition: transform 0.2s ease;
        cursor: pointer;
        display: inline-block;
    }
    .rotate.open {
        transform: rotate(90deg);
    }
    /* Petites améliorations visuelles */
    .badge {
        font-weight: 500;
    }
    .progress-bar {
        font-size: 0.75rem;
    }
</style>

<div class="card shadow-sm border-0">
    <div class="card-header bg-primary bg-opacity-10">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <button class="nav-link active text-dark fw-bold" data-bs-toggle="tab" data-bs-target="#horspip2024">HORS PIP 2026</button>
            </li>
        </ul>
    </div>

    <div class="card-body tab-content">
        <div class="tab-pane fade show active" id="horspip2024">

                    <!-- ========== FILTRE ========== -->
            <div class="d-flex align-items-center gap-2">
                <span class="text-muted small"><i class="ti ti-filter"></i> Afficher :</span>
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-outline-primary filter-btn active" data-limit="5">
                        <i class="ti ti-layout-list"></i> 5 lignes
                    </button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-limit="all">
                        <i class="ti ti-list-details"></i> Toutes les lignes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body tab-content">
        <div class="tab-pane fade show active" id="horspip2024">

            <!-- ================= HORS PIP ================= -->
            <div class="p-3 mb-3 rounded bg-primary bg-opacity-10 border-start border-4 border-primary shadow-sm">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div class="fw-bold text-dark">
                        <i class="ti ti-folder me-2"></i> MONTANT AFFECTÉ <span class="text-muted">2026</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <span class="badge bg-primary">Total : 20 000 000</span>
                        <span class="badge bg-info">Engagé : 10 000 000</span>
                        <span class="badge bg-success">Décaisse : 6 000 000</span>
                        <span class="badge bg-dark">Disponible : 4 000 000</span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ti ti-settings me-1"></i> Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="#" class="dropdown-item">Modifier</a></li>
                                <li><a href="#" class="dropdown-item">Ajouter composant</a></li>
                                <li><a href="#" class="dropdown-item text-danger">Supprimer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 52%;">52%</div>
                    </div>
                </div>
            </div>

            <!-- ================= COMPOSANT 1 ================= -->
            <div class="p-2 border rounded mb-2 bg-light shadow-sm">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div class="fw-semibold d-flex align-items-center">
                        <i class="ti ti-chevron-right rotate me-2" data-bs-target="#comp1" data-bs-toggle="collapse" role="button"></i>
                        <i class="ti ti-puzzle text-primary me-2"></i> FOURNITURE DE PAPIERS ET ARTICLES LIES
                        <small class="ms-2 badge bg-secondary">4 activités</small>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <span class="badge bg-primary">Total : 4 000 000</span>
                        <span class="badge bg-info">Engagé : 3 900 000</span>
                        <span class="badge bg-success">Décaisse : 2 500 000</span>
                        <span class="badge bg-dark">Disponible : 2 000 000</span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ti ti-settings me-1"></i> Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="#" class="dropdown-item">Modifier</a></li>
                                <li><a href="#" class="dropdown-item">Ajouter activité</a></li>
                                <li><a href="#" class="dropdown-item text-danger">Supprimer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 65%;">65%</div>
                    </div>
                </div>
                <div class="collapse mt-2" id="comp1">
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Achat de climatiseur</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 1 500 000</span>
                            <span class="badge bg-info">Engagé : 1 000 000</span>
                            <span class="badge bg-success">Décaisse : 900 000</span>
                            <span class="badge bg-dark">Disponible : 600 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Plomberie</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 1 000 000</span>
                            <span class="badge bg-info">Engagé : 700 000</span>
                            <span class="badge bg-success">Décaisse : 700 000</span>
                            <span class="badge bg-dark">Disponible : 300 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Achat de produit nettoyant</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 1 500 000</span>
                            <span class="badge bg-info">Engagé : 1 200 000</span>
                            <span class="badge bg-success">Décaisse : 1 000 000</span>
                            <span class="badge bg-dark">Disponible : 500 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Achat de fourniture</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 1 500 000</span>
                            <span class="badge bg-info">Engagé : 1 000 000</span>
                            <span class="badge bg-success">Décaisse : 900 000</span>
                            <span class="badge bg-dark">Disponible : 600 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= COMPOSANT 2 ================= -->
            <div class="p-2 border rounded mb-2 bg-light shadow-sm">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div class="fw-semibold d-flex align-items-center">
                        <i class="ti ti-chevron-right rotate me-2" data-bs-target="#comp2" data-bs-toggle="collapse" role="button"></i>
                        <i class="ti ti-puzzle text-primary me-2"></i> Fournitures de petits matériel de bureau, de produits d'entretien et de charroi
                        <small class="ms-2 badge bg-secondary">4 activités</small>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <span class="badge bg-primary">Total : 4 000 000</span>
                        <span class="badge bg-info">Engagé : 3 900 000</span>
                        <span class="badge bg-success">Décaisse : 2 500 000</span>
                        <span class="badge bg-dark">Disponible : 2 000 000</span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ti ti-settings me-1"></i> Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="#" class="dropdown-item">Modifier</a></li>
                                <li><a href="#" class="dropdown-item">Ajouter activité</a></li>
                                <li><a href="#" class="dropdown-item text-danger">Supprimer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 65%;">65%</div>
                    </div>
                </div>
                <div class="collapse mt-2" id="comp2">
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Achat de climatiseur</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 1 500 000</span>
                            <span class="badge bg-info">Engagé : 1 000 000</span>
                            <span class="badge bg-success">Décaisse : 900 000</span>
                            <span class="badge bg-dark">Disponible : 600 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Plomberie</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 1 000 000</span>
                            <span class="badge bg-info">Engagé : 700 000</span>
                            <span class="badge bg-success">Décaisse : 700 000</span>
                            <span class="badge bg-dark">Disponible : 300 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Achat de produit nettoyant</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 1 500 000</span>
                            <span class="badge bg-info">Engagé : 1 200 000</span>
                            <span class="badge bg-success">Décaisse : 1 000 000</span>
                            <span class="badge bg-dark">Disponible : 500 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Achat de fourniture</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 1 500 000</span>
                            <span class="badge bg-info">Engagé : 1 000 000</span>
                            <span class="badge bg-success">Décaisse : 900 000</span>
                            <span class="badge bg-dark">Disponible : 600 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= COMPOSANT 3 ================= -->
            <div class="p-2 border rounded mb-2 bg-light shadow-sm">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div class="fw-semibold d-flex align-items-center">
                        <i class="ti ti-chevron-right rotate me-2" data-bs-target="#comp3" data-bs-toggle="collapse" role="button"></i>
                        <i class="ti ti-puzzle text-primary me-2"></i> FOURNITURE INFORMATIQUES
                        <small class="ms-2 badge bg-secondary">3 activités</small>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <span class="badge bg-primary">Total : 6 000 000</span>
                        <span class="badge bg-info">Engagé : 3 200 000</span>
                        <span class="badge bg-success">Décaisse : 2 600 000</span>
                        <span class="badge bg-dark">Disponible : 3 400 000</span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ti ti-settings me-1"></i> Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="#" class="dropdown-item">Modifier</a></li>
                                <li><a href="#" class="dropdown-item">Ajouter activité</a></li>
                                <li><a href="#" class="dropdown-item text-danger">Supprimer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 43%;">43%</div>
                    </div>
                </div>
                <div class="collapse mt-2" id="comp3">
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Achat semences</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 2 000 000</span>
                            <span class="badge bg-info">Engagé : 1 200 000</span>
                            <span class="badge bg-success">Décaisse : 800 000</span>
                            <span class="badge bg-dark">Disponible : 1 200 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Irrigation</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 2 000 000</span>
                            <span class="badge bg-info">Engagé : 1 200 000</span>
                            <span class="badge bg-success">Décaisse : 1 000 000</span>
                            <span class="badge bg-dark">Disponible : 1 000 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Distribution outils</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 2 000 000</span>
                            <span class="badge bg-info">Engagé : 800 000</span>
                            <span class="badge bg-success">Décaisse : 800 000</span>
                            <span class="badge bg-dark">Disponible : 1 200 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= COMPOSANT 4 ================= -->
            <div class="p-2 border rounded mb-2 bg-light shadow-sm">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div class="fw-semibold d-flex align-items-center">
                        <i class="ti ti-chevron-right rotate me-2" data-bs-target="#comp4" data-bs-toggle="collapse" role="button"></i>
                        <i class="ti ti-puzzle text-primary me-2"></i> FOURNITURE DE CARBURANT ET LUBRIFIANT
                        <small class="ms-2 badge bg-secondary">3 activités</small>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <span class="badge bg-primary">Total : 6 000 000</span>
                        <span class="badge bg-info">Engagé : 3 200 000</span>
                        <span class="badge bg-success">Décaisse : 2 600 000</span>
                        <span class="badge bg-dark">Disponible : 3 400 000</span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ti ti-settings me-1"></i> Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="#" class="dropdown-item">Modifier</a></li>
                                <li><a href="#" class="dropdown-item">Ajouter activité</a></li>
                                <li><a href="#" class="dropdown-item text-danger">Supprimer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 43%;">43%</div>
                    </div>
                </div>
                <div class="collapse mt-2" id="comp4">
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Achat semences</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 2 000 000</span>
                            <span class="badge bg-info">Engagé : 1 200 000</span>
                            <span class="badge bg-success">Décaisse : 800 000</span>
                            <span class="badge bg-dark">Disponible : 1 200 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Irrigation</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 2 000 000</span>
                            <span class="badge bg-info">Engagé : 1 200 000</span>
                            <span class="badge bg-success">Décaisse : 1 000 000</span>
                            <span class="badge bg-dark">Disponible : 1 000 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4 mb-2 p-2 border rounded bg-white d-flex justify-content-between align-items-center flex-wrap gap-2 shadow-sm">
                        <div><i class="ti ti-circle-filled text-secondary me-2"></i> Distribution outils</div>
                        <div class="d-flex gap-2 align-items-center flex-wrap">
                            <span class="badge bg-primary">Total : 2 000 000</span>
                            <span class="badge bg-info">Engagé : 800 000</span>
                            <span class="badge bg-success">Décaisse : 800 000</span>
                            <span class="badge bg-dark">Disponible : 1 200 000</span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item">Voir détail</a></li>
                                    <li><a class="dropdown-item">Modifier</a></li>
                                    <li><a class="dropdown-item">Engager</a></li>
                                    <li><a class="dropdown-item">Ordonnancer</a></li>
                                    <li><a class="dropdown-item">Décaisser</a></li>
                                    <li><a class="dropdown-item text-danger">Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= COMPOSANT 5 à 10 ================= -->
            <!-- Même structure avec IDs uniques : comp5, comp6, comp7, comp8, comp9, comp10 -->
            <!-- Pour gagner de la place ici, je te montre un exemple raccourci, mais le principe est le même -->

            <div class="alert alert-info mt-3">
                <i class="ti ti-info-circle"></i> Les composants 5 à 10 suivent la même structure avec <strong>comp5, comp6, etc.</strong> comme IDs uniques.
            </div>

        </div>
    </div>
</div>

<script>
    document.querySelectorAll(".rotate").forEach(el => {
        el.addEventListener("click", function(){
            el.classList.toggle("open");
        });
    });
</script>