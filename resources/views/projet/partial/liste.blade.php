<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h5 class="mb-0">Liste des projets</h5>

        <div class="d-flex align-items-center gap-2">
            <div class="search-set">
                <div class="search-input position-relative">
                    <input type="text" class="form-control ps-5" placeholder="Rechercher un projet...">
                    <span class="position-absolute top-50 start-0 translate-middle-y ps-3 text-white">
                        <i class="ti ti-search fs-5"></i>
                    </span>
                </div>
            </div>
            <button class="btn btn-light text-primary" data-bs-toggle="modal" data-bs-target="#modalAddProjet">
                <i class="ti ti-plus fs-5 me-1"></i> Ajouter un projet
            </button>
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
                    <th>Libellé</th>
                    <th>Description</th>
                    <th class="text-center" style="width: 200px;">Actions</th>
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
                    <td><span class="fw-semibold text-dark">Projet Santé 2025</span></td>
                    <td>Renforcement des infrastructures sanitaires</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info me-2" data-bs-toggle="modal" data-bs-target="#modalDetailProjet1">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                        <button class="btn btn-sm btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#modalEditProjet1">
                            <i class="ti ti-edit"></i> Modifier
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
                    <td><span class="fw-semibold text-dark">Projet Éducation 2025</span></td>
                    <td>Amélioration des programmes scolaires</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info me-2" data-bs-toggle="modal" data-bs-target="#modalDetailProjet2">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                        <button class="btn btn-sm btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#modalEditProjet2">
                            <i class="ti ti-edit"></i> Modifier
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

<!-- Modal Détails Projet -->
<div class="modal fade" id="modalDetailProjet1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Détail du projet</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p><strong>Libellé :</strong> Projet Santé 2025</p>
                <p><strong>Description :</strong> Renforcement des infrastructures sanitaires</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetailProjet2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Détail du projet</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p><strong>Libellé :</strong> Projet Éducation 2025</p>
                <p><strong>Description :</strong> Amélioration des programmes scolaires</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ajouter Projet -->
<div class="modal fade" id="modalAddProjet" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Ajouter un projet</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input type="text" class="form-control" id="libelle" placeholder="Libellé du projet">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Description du projet"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Ajouter le projet</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Projet (exemple pour 1er projet) -->
<div class="modal fade" id="modalEditProjet1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">Modifier le projet</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="libelleEdit1" class="form-label">Libellé</label>
                        <input type="text" class="form-control" id="libelleEdit1" value="Projet Santé 2025">
                    </div>
                    <div class="mb-3">
                        <label for="descriptionEdit1" class="form-label">Description</label>
                        <textarea class="form-control" id="descriptionEdit1" rows="3">Renforcement des infrastructures sanitaires</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Modifier le projet</button>
                </form>
            </div>
        </div>
    </div>
</div>
