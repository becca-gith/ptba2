<!-- RECHERCHE GLOBALE -->
<div class="mb-3 d-flex justify-content-between align-items-center">
    <div>
        <select class="form-select form-select-sm w-auto" id="filterPTBA">
            <option value="">Tous les PTBA</option>
            <option value="1">PTBA 2025 - Santé</option>
            <option value="2">PTBA 2025 - Éducation</option>
        </select>
    </div>
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
                    <th>Cout total</th>
                    <th>Engagé / Décaissé</th>
                    <th>Solde</th>
                    <th class="text-center" style="width: 120px;">Action</th>
                </tr>
                </thead>
                <tbody>

                <!-- Exemple -->
                <tr>
                    <td>ACT-001</td>
                    <td>Construction de blocs sanitaires</td>
                    <td>
                        <span class="badge bg-info-subtle text-info">Composant A</span><br>
                        <span class="badge bg-primary text-white">PTBA 2025 - Santé</span>
                    </td>
                    <td>12 000 000 FCFA</td>
                    <td>10 000 000 / 8 000 000 FCFA</td>
                    <td><span class="badge bg-success-subtle text-success">2 000 000</span></td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailActivite1">
                            <i class="ti ti-eye"></i> Détails
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>ACT-002</td>
                    <td>Formation des agents communautaires</td>
                    <td>
                        <span class="badge bg-info-subtle text-info">Composant B</span><br>
                        <span class="badge bg-primary text-white">PTBA 2025 - Éducation</span>
                    </td>
                    <td>6 000 000 FCFA</td>
                    <td>4 000 000 / 1 500 000 FCFA</td>
                    <td><span class="badge bg-success-subtle text-success">2 500 000</span></td>
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
    const filterPTBA = document.getElementById('filterPTBA');
    const searchInput = document.getElementById('searchTable');
    const tableRows = document.querySelectorAll('#activitiesTable tbody tr');

    function filterTable() {
        const ptbaValue = filterPTBA.value.toLowerCase();
        const searchValue = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const rowText = row.innerText.toLowerCase();
            const ptbaBadge = row.querySelector('td:nth-child(3) .badge.bg-primary');
            const ptbaText = ptbaBadge ? ptbaBadge.innerText.toLowerCase() : '';

            if ((ptbaValue === '' || ptbaText.includes(ptbaValue)) &&
                (searchValue === '' || rowText.includes(searchValue))) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    filterPTBA.addEventListener('change', filterTable);
    searchInput.addEventListener('input', filterTable);
});
</script>
