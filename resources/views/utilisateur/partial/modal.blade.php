<!-- Add / Edit Utilisateur -->
<div class="modal fade" id="addUtilisateur">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="page-title">
                    <h4 id="modalUtilisateurLabel">Ajouter un utilisateur</h4>
                </div>
                <button type="button" class="close bg-danger text-white fs-16" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="form-utilisateur" action="" method="POST">
                @csrf
                <input type="hidden" id="utilisateur_id" name="utilisateur_id">

                <div class="modal-body">

                    <!-- Nom et Prénom -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="fas fa-user text-primary me-2"></i> Nom et prénom <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="nom_prenom" id="nom_prenom" class="form-control" placeholder="Ex : John Doe" required>
                    </div>

                    <!-- Login -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="fas fa-user-circle text-primary me-2"></i> Login <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="login_utilisateur" id="login_utilisateur" class="form-control" placeholder="Ex : johndoe" required>
                    </div>

                    <!-- Téléphone -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="fas fa-phone text-primary me-2"></i> Téléphone
                        </label>
                        <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Ex : +228 90 00 00 00">
                    </div>

                    <!-- Mot de passe et Confirmation sur la même ligne -->
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label fw-bold">
                                <i class="fas fa-lock text-primary me-2"></i> Mot de passe <span class="text-danger" id="motPasseRequired">*</span>
                            </label>
                            <input type="password" name="mot_passe" id="mot_passe" class="form-control" placeholder="Mot de passe">
                        </div>
                        <div class="col">
                            <label class="form-label fw-bold">
                                <i class="fas fa-lock text-primary me-2"></i> Confirmer le mot de passe <span class="text-danger">*</span>
                            </label>
                            <input type="password" name="mot_passe_confirmation" id="mot_passe_confirmation" class="form-control" placeholder="Confirmez le mot de passe">
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="fas fa-user-shield text-primary me-2"></i> Rôle
                        </label>
                        <select name="role" id="role" class="form-select">
                            <option value="">Sélectionnez un rôle</option>
                            <option value="1">Utilisateur</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>

                </div>

                <!-- Boutons -->
                <div class="modal-footer border-0 d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-secondary px-4 rounded-pill" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i> Annuler
                    </button>

                    <div>
                        <button type="submit" id="btn-ajouter" class="btn btn-primary px-4 rounded-pill me-2">
                            <i class="bi bi-plus-circle-fill me-1"></i> Ajouter
                        </button>
                        <button type="submit" id="btn-modifier" class="btn btn-warning text-white px-4 rounded-pill d-none">
                            <i class="bi bi-pencil-square me-1"></i> Modifier
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add / Edit Utilisateur -->
