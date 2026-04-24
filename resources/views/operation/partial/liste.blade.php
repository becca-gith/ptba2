<!-- RECHERCHE GLOBALE + FILTRES -->
<div class="mb-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div class="d-flex gap-2">
        <!-- Filtre Type d'opération -->
        <select class="form-select form-select-sm w-auto" id="filterTypeOperation">
            <option value="">Tous les types</option>
            <option value="Paiement">Paiement</option>
            <option value="Décaissement">Décaissement</option>
            <option value="Engagement">Engagement</option>
        </select>

        <!-- Filtre PTBA -->
        <select class="form-select form-select-sm w-auto" id="filterPTBA">
            <option value="">Tous les PTBA</option>
            <option value="PTBA 2025 - Santé">PTBA 2025 - Santé</option>
            <option value="PTBA 2025 - Éducation">PTBA 2025 - Éducation</option>
        </select>
    </div>

    <!-- Recherche globale -->
    <div>
        <input type="text" class="form-control form-control-sm" id="searchTable" placeholder="Rechercher une activité...">
    </div>
</div>

<!-- TABLE DES ACTIVITES -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Liste des activités</h5>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="activitiesTable">
                <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Activité</th>
                    <th>Composant / PTBA</th>
                    <th>Type d'opération</th>
                    <th>Date</th>
                    <th>Cout total</th>
                    <th class="text-center" style="width: 120px;">Action</th>
                </tr>
                </thead>
                <tbody>

                <!-- Exemple Ligne 1 -->
                <tr>
                    <td>ACT-001</td>
                    <td>Construction de blocs sanitaires</td>
                    <td>
                        <span class="badge bg-info-subtle text-info">Composant A</span><br>
                        <span class="badge bg-primary text-white">PTBA 2025 - Santé</span>
                    </td>
                    <td><span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Paiement</span></td>
                    <td>23/10/2025</td>
                    <td>12 000 000 FCFA</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailActivite1">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                    </td>
                </tr>

                <!-- Exemple Ligne 2 -->
                <tr>
                    <td>ACT-002</td>
                    <td>Formation des agents communautaires</td>
                    <td>
                        <span class="badge bg-info-subtle text-info">Composant B</span><br>
                        <span class="badge bg-primary text-white">PTBA 2025 - Éducation</span>
                    </td>
                    <td><span class="badge bg-warning-subtle text-warning px-3 py-2 rounded-pill">Engagement</span></td>
                    <td>24/10/2025</td>
                    <td>6 000 000 FCFA</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailActivite2">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterType = document.getElementById('filterTypeOperation');
    const filterPTBA = document.getElementById('filterPTBA');
    const searchInput = document.getElementById('searchTable');
    const tableRows = document.querySelectorAll('#activitiesTable tbody tr');

    function filterTable() {
        const typeValue = filterType.value.toLowerCase();
        const ptbaValue = filterPTBA.value.toLowerCase();
        const searchValue = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const rowText = row.innerText.toLowerCase();

            const typeBadge = row.querySelector('td:nth-child(4) .badge');
            const typeText = typeBadge ? typeBadge.innerText.toLowerCase() : '';

            const ptbaBadge = row.querySelector('td:nth-child(3) .badge.bg-primary');
            const ptbaText = ptbaBadge ? ptbaBadge.innerText.toLowerCase() : '';

            if ((typeValue === '' || typeText.includes(typeValue)) &&
                (ptbaValue === '' || ptbaText.includes(ptbaValue)) &&
                (searchValue === '' || rowText.includes(searchValue))) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    filterType.addEventListener('change', filterTable);
    filterPTBA.addEventListener('change', filterTable);
    searchInput.addEventListener('input', filterTable);
});
</script>
