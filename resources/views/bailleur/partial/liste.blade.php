<div class="card shadow-sm border-0">
    <div class="card-header bg-success text-white d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h5 class="mb-0">Liste des bailleurs</h5>

        <div class="d-flex align-items-center gap-2">
            <div class="search-set">
                <div class="search-input position-relative">
                    <input type="text" class="form-control ps-5" placeholder="Rechercher un bailleur...">
                    <span class="position-absolute top-50 start-0 translate-middle-y ps-3 text-white">
                        <i class="ti ti-search fs-5"></i>
                    </span>
                </div>
            </div>
            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalAddBailleur">
                <i class="ti ti-plus me-1"></i> Ajouter
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
                    <th>Code</th>
                    <th>Sigle</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Total financement</th>
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
                    <td><span class="fw-semibold text-dark">B001</span></td>
                    <td>AFD</td>
                    <td>Agence Française de Développement</td>
                    <td>contact@afd.fr</td>
                    <td><span class="badge rounded-pill bg-soft-success">45 000 000 FCFA</span></td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBailleur1">
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
                    <td><span class="fw-semibold text-dark">B002</span></td>
                    <td>BM</td>
                    <td>Banque Mondiale</td>
                    <td>info@worldbank.org</td>
                    <td><span class="badge rounded-pill bg-soft-warning">20 000 000 FCFA</span></td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#modalEditBailleur2">
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

<!-- MODALE AJOUTER BAILLEUR -->
<div class="modal fade" id="modalAddBailleur" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Ajouter un bailleur</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Code</label>
                        <input type="text" class="form-control" placeholder="Ex: B003">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sigle</label>
                        <input type="text" class="form-control" placeholder="Ex: ADB">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom du bailleur">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="contact@exemple.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total financement</label>
                        <input type="text" class="form-control" placeholder="Ex: 30 000 000 FCFA">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Ajouter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODALES EDITION EXEMPLE -->
<div class="modal fade" id="modalEditBailleur1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Modifier le bailleur</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaire similaire à l'ajout, pré-rempli -->
                <form>
                    <div class="mb-3">
                        <label class="form-label">Code</label>
                        <input type="text" class="form-control" value="B001">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sigle</label>
                        <input type="text" class="form-control" value="AFD">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" value="Agence Française de Développement">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="contact@afd.fr">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total financement</label>
                        <input type="text" class="form-control" value="45 000 000 FCFA">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
