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
                <div class="row g-3">
                    <div class="col-md-8">
                        <label for="intitule" class="form-label fw-semibold">Intitulé du PTBA</label>
                        <input type="text" class="form-control" id="intitule" name="intitule"
                               placeholder="Ex : Programme de développement 2025">
                    </div>
                    <div class="col-md-4">
                        <label for="annee" class="form-label fw-semibold">Année</label>
                        <input type="number" class="form-control" id="annee" name="annee"
                               placeholder="2025" min="2000" max="2100">
                    </div>
                </div>
            </div>

            <!-- ===================== SECTION COMPOSANTS ===================== -->
            <div class="mb-4">
                <h6 class="text-success border-bottom pb-2 mb-3">
                    <i data-feather="list"></i> Liste des composants
                </h6>

                <!-- Formulaire d'ajout d’un composant -->
                <div class="d-flex align-items-center gap-2 mb-3">
                    <input type="text" id="libelle_composant" class="form-control"
                           placeholder="Libellé du composant">
                    <input type="number" id="montant_composant" class="form-control"
                           placeholder="Montant (FCFA)" min="0">
                    <button type="button" id="btnAjouterComposant" class="btn btn-success">
                        <i data-feather="plus-circle"></i> Ajouter
                    </button>
                </div>

                <!-- Tableau des composants -->
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

            <!-- ===================== BOUTON ENREGISTRER ===================== -->
            <div class="text-end mt-4">
                <button type="submit" class="btn btn-success px-4">
                    <i data-feather="save"></i> Enregistrer le PTBA
                </button>
            </div>
        </form>
    </div>
</div>

