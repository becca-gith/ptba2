<!-- Add / Edit PTBA -->
<div class="modal fade" id="addPtba">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="page-title">
                    <h4 id="modalPtbaLabel">Ajouter un PTBA</h4>
                </div>
                <button type="button" class="close bg-danger text-white fs-16" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="form-ptba" action="" method="POST">
                @csrf
                <input type="hidden" id="ptba_id" name="ptba_id">

                <div class="modal-body">

                    <!-- Libelle -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="fas fa-file-signature text-primary me-2"></i> Libellé <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="libelle" id="libelle" class="form-control" placeholder="Ex : Programme annuel" required>
                    </div>

                    <!-- Année -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="fas fa-calendar text-primary me-2"></i> Année <span class="text-danger">*</span>
                        </label>
                        <select name="annee_id" id="annee_id" class="form-select" required>
                            <option value="">-- Sélectionnez une année --</option>
                            @foreach($annees as $annee)
                                <option value="{{ $annee->id }}">{{ $annee->libelle }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Type -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="fas fa-list text-primary me-2"></i> Type <span class="text-danger">*</span>
                        </label>
                        <select name="type" id="type" class="form-select" required>
                            <option value="">-- Sélectionnez un type --</option>
                            <option value="1">Type 1</option>
                            <option value="2">Type 2</option>
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
<!-- /Add / Edit PTBA -->
