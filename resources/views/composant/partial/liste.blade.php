<!-- CARD POUR AJOUTER UN COMPOSANT -->
<div class="mb-3 text-end">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAjouterComposant">
        <i class="ti ti-plus"></i> Ajouter un composant
    </button>
</div>

<!-- FILTRE PAR PTBA -->
<div class="mb-3">
    <select class="form-select form-select-sm w-auto" id="filterPTBA">
        <option value="">Tous les PTBA</option>
        <option value="ptba1">PTBA 2025 - Santé</option>
        <option value="ptba2">PTBA 2025 - Éducation</option>
    </select>
</div>

<!-- TABLE DES COMPOSANTS -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Liste des composants</h5>
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
                    <th>Composant</th>
                    <th>Montant (Engagé / Dépensé)</th>
                    <th>Activités liées</th>
                    <th class="text-center" style="width: 220px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                <!-- Exemple de composant -->
                <tr>
                    <td>
                        <label class="checkboxs mb-0">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label>
                    </td>
                    <td>
                        Renforcement des centres de santé
                        <br>
                        <span class="badge bg-warning-subtle text-warning" title="PTBA: PTBA 2025 - Santé">PTBA</span>
                    </td>
                    <td>
                        45 000 000 / 30 000 000 FCFA
                    </td>
                    <td>
                        <span class="badge bg-info-subtle text-info">3 activités</span>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info me-1" data-bs-toggle="modal" data-bs-target="#modalDetailComposant1">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                        <button class="btn btn-sm btn-outline-primary me-1">
                            <i class="ti ti-pencil"></i> Modifier
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="ti ti-trash"></i> Supprimer
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
                    <td>
                        Appui à la formation des enseignants
                        <br>
                        <span class="badge bg-warning-subtle text-warning" title="PTBA: PTBA 2025 - Éducation">PTBA</span>
                    </td>
                    <td>
                        20 000 000 / 12 000 000 FCFA
                    </td>
                    <td>
                        <span class="badge bg-info-subtle text-info">2 activités</span>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info me-1" data-bs-toggle="modal" data-bs-target="#modalDetailComposant2">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                        <button class="btn btn-sm btn-outline-primary me-1">
                            <i class="ti ti-pencil"></i> Modifier
                        </button>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="ti ti-trash"></i> Supprimer
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODALES DE DÉTAIL COMPOSANT -->
<div class="modal fade" id="modalDetailComposant1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Détail du composant</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p><strong>Composant :</strong> Renforcement des centres de santé</p>
                <p><strong>PTBA :</strong> PTBA 2025 - Santé</p>
                <p><strong>Montant engagé :</strong> 45 000 000 FCFA</p>
                <p><strong>Montant dépensé :</strong> 30 000 000 FCFA</p>
                <p><strong>Activités liées :</strong> 3 activités</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetailComposant2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Détail du composant</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p><strong>Composant :</strong> Appui à la formation des enseignants</p>
                <p><strong>PTBA :</strong> PTBA 2025 - Éducation</p>
                <p><strong>Montant engagé :</strong> 20 000 000 FCFA</p>
                <p><strong>Montant dépensé :</strong> 12 000 000 FCFA</p>
                <p><strong>Activités liées :</strong> 2 activités</p>
            </div>
        </div>
    </div>
</div>

<!-- MODALE AJOUT COMPOSANT -->
<div class="modal fade" id="modalAjouterComposant" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Ajouter un composant</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="libelleComposant" class="form-label">Libellé</label>
                        <input type="text" class="form-control" id="libelleComposant" placeholder="Libellé du composant">
                    </div>
                    <div class="mb-3">
                        <label for="ptbaComposant" class="form-label">PTBA lié</label>
                        <select class="form-select" id="ptbaComposant">
                            <option value="">Sélectionner un PTBA</option>
                            <option value="ptba1">PTBA 2025 - Santé</option>
                            <option value="ptba2">PTBA 2025 - Éducation</option>
                        </select>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
