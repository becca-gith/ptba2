<div class="card shadow-sm border-0">
    <div class="card-header bg-success text-white d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h5 class="mb-0">Liste des opérations</h5>

        <div class="search-set">
            <div class="search-input position-relative">
                <input type="text" class="form-control ps-5" placeholder="Rechercher une opération...">
                <span class="position-absolute top-50 start-0 translate-middle-y ps-3 text-white">
                    <i class="ti ti-search fs-5"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                <tr>
                    <th style="width: 50px;">
                        <label class="checkboxs mb-0">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label>
                    </th>
                    <th>PTBA</th>
                    <th>Activité</th>
                    <th>Statut</th>
                    <th>Date / Heure Ordonnance</th>
                    <th class="text-center" style="width: 180px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label class="checkboxs mb-0">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label>
                    </td>
                    <td><span class="fw-semibold text-dark">PTBA 2025 - Santé</span></td>
                    <td>Renforcement des centres de santé</td>
                    <td>
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                                Ordonnancée
                            </span>
                    </td>
                    <td>23/10/2025 à 09:45</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info me-2" data-bs-toggle="modal" data-bs-target="#modalDetailActivite1">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="ti ti-x-circle"></i> Annuler
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="checkboxs mb-0">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label>
                    </td>
                    <td><span class="fw-semibold text-dark">PTBA 2025 - Éducation</span></td>
                    <td>Appui à la formation des enseignants</td>
                    <td>
                            <span class="badge bg-secondary-subtle text-muted px-3 py-2 rounded-pill">
                                Non ordonnancée
                            </span>
                    </td>
                    <td>—</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info me-2" data-bs-toggle="modal" data-bs-target="#modalDetailActivite2">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                        <span class="text-muted">—</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 🔍 MODALES DE DÉTAIL D’ACTIVITÉ -->
<div class="modal fade" id="modalDetailActivite1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Détail de l’activité</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p><strong>PTBA :</strong> PTBA 2025 - Santé</p>
                <p><strong>Activité :</strong> Renforcement des centres de santé</p>
                <p><strong>Objectif :</strong> Améliorer la couverture sanitaire et les infrastructures médicales rurales.</p>
                <p><strong>Budget :</strong> 45 000 000 FCFA</p>
                <p><strong>Responsable :</strong> Direction régionale de la santé</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetailActivite2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Détail de l’activité</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p><strong>PTBA :</strong> PTBA 2025 - Éducation</p>
                <p><strong>Activité :</strong> Appui à la formation des enseignants</p>
                <p><strong>Objectif :</strong> Renforcer les compétences pédagogiques et numériques des enseignants du primaire.</p>
                <p><strong>Budget :</strong> 20 000 000 FCFA</p>
                <p><strong>Responsable :</strong> Direction nationale de la formation</p>
            </div>
        </div>
    </div>
</div>
