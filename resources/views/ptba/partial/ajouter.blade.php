<div class="card shadow-lg border-0">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">
            <i data-feather="clipboard"></i> Création / Modification du PTBA
        </h5>
    </div>

    <div class="card-body">
        <form id="formPtba">

            <!-- ===================== SECTION PTBA ===================== -->
            <div class="mb-4">
                <h6 class="text-success border-bottom pb-2 mb-3">
                    <i data-feather="file-text"></i> Informations générales du PTBA
                </h6>

                <!-- COST TOTAL LARGE DISPLAY -->
                <div class="mb-3">
                    <div class="bg-primary bg-opacity-75 text-white p-3 rounded shadow-sm text-center">
                        <span class="fw-bold fs-4">Coût total du PTBA :</span>
                        <span class="badge bg-light text-primary fs-4 ms-2" id="cout_total_ptba">0 FCFA</span>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="annee" class="form-label fw-semibold">Année</label>
                        <select class="form-select" id="annee">
                            <option value="" disabled selected>Choisir une année</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                        </select>
                    </div>
                </div>
            </div>


            <!-- ===================== SECTION BAILLEURS ===================== -->
            <div class="mb-4">
                <h6 class="text-success border-bottom pb-2 mb-3">
                    <i data-feather="users"></i> Répartition par bailleur
                </h6>

                <div class="row g-2 mb-3">
                    <div class="col-md-5">
                        <select id="bailleur_select" class="form-select">
                            <option value="" disabled selected>Choisir un bailleur</option>
                            <option>Banque Mondiale</option>
                            <option>FAO</option>
                            <option>Etat</option>
                            <option>BAD</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <input type="number" id="montant_bailleur" class="form-control"
                            placeholder="Montant (FCFA)" min="0">
                    </div>
                    <div class="col-md-2 d-grid">
                        <button type="button" id="btnAjouterBailleur" class="btn btn-primary">
                            <i data-feather="plus-circle"></i> Ajouter
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-primary text-dark">
                        <tr>
                            <th>Bailleur</th>
                            <th class="text-end">Montant (FCFA)</th>
                            <th class="text-center" style="width: 80px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="listeBailleurs">
                        <tr class="text-center text-muted">
                            <td colspan="3">Aucun bailleur ajouté</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- ===================== SECTION COMPOSANTS ===================== -->
            <div class="mb-4">
                <h6 class="text-success border-bottom pb-2 mb-3">
                    <i data-feather="list"></i> Liste des composants
                </h6>

                <div class="d-flex align-items-center gap-2 mb-3">
                    <input type="text" id="libelle_composant" class="form-control"
                           placeholder="Libellé du composant">
                    <input type="number" id="montant_composant" class="form-control"
                           placeholder="Montant (FCFA)" min="0">
                    <button type="button" id="btnAjouterComposant" class="btn btn-success">
                        <i data-feather="plus-circle"></i> Ajouter
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-success text-dark">
                        <tr>
                            <th>Libellé du composant</th>
                            <th class="text-end">Montant (FCFA)</th>
                            <th class="text-center" style="width: 80px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="listeComposants">
                        <tr class="text-center text-muted">
                            <td colspan="3">Aucun composant ajouté</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="text-end mt-4">
                <button type="submit" class="btn btn-success px-4">
                    <i data-feather="save"></i> Enregistrer le PTBA
                </button>
            </div>
        </form>
    </div>
</div>
