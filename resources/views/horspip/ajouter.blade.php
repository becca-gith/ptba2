@extends('layout.app')

@section('title')

    PTBA  | Ajouter un PTBA

@endsection

@section('css')



    <link rel="stylesheet" href="{{asset('app')}}/assets/css/dataTables.bootstrap5.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
@endsection

@section('contenu')


    <div class="content">
        <div class="page-header">
            <div class="add-item d-flex">
                <div class="page-title">
                    <h4 class="fw-bold">Ptbas    </h4>
                    <h6>Ajouter un ptba  </h6>
                </div>
            </div>
            <ul class="table-top-head">
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="{{asset('app')}}/assets/img/icons/pdf.svg" alt="img"></a>
                </li>

                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="{{asset('app')}}/assets/img/icons/excel.svg" alt="img"></a>
                </li>
            </ul>

        </div>

        @include('ptba.partial.ajouter')
        <!-- /product list -->


    </div>


@endsection


@section('js')

    <!-- Datatable JS -->
    <script src="{{asset('app')}}/assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{asset('app')}}/assets/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

     <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Toastr (version compatible) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <!-- Feather + jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        $(document).ready(function() {
            feather.replace();
            let composants = [];

            function rafraichirTable() {
                const tbody = $("#listeComposants");
                tbody.empty();

                if (composants.length === 0) {
                    tbody.html('<tr class="text-center text-muted"><td colspan="3">Aucun composant ajouté</td></tr>');
                    return;
                }

                composants.forEach((c, i) => {
                    tbody.append(`
                <tr>
                    <td>${c.libelle}</td>
                    <td class="text-end">
                        <span class="badge bg-light text-success border border-success">
                            ${parseInt(c.montant).toLocaleString()} F
                        </span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-danger btnSupprimer" data-index="${i}" title="Supprimer">
                            <i data-feather="trash"></i>
                        </button>
                    </td>
                </tr>
            `);
                });
                feather.replace();
            }

            $("#btnAjouterComposant").on("click", function() {
                const libelle = $("#libelle_composant").val().trim();
                const montant = $("#montant_composant").val().trim();

                if (!libelle || !montant) {
                    alert("Veuillez saisir le libellé et le montant !");
                    return;
                }

                composants.push({ libelle, montant });
                $("#libelle_composant").val('');
                $("#montant_composant").val('');
                rafraichirTable();
            });

            $(document).on("click", ".btnSupprimer", function() {
                const index = $(this).data("index");
                composants.splice(index, 1);
                rafraichirTable();
            });

            $("#formPtba").on("submit", function(e) {
                e.preventDefault();
                if (composants.length === 0) {
                    alert("Veuillez ajouter au moins un composant !");
                    return;
                }

                const data = {
                    intitule: $("#intitule").val(),
                    annee: $("#annee").val(),
                    composants: composants
                };

                console.log("Données à envoyer :", data);

                // Exemple d'envoi AJAX (à activer dans Laravel)
                /*
                $.ajax({
                    url: "{{ route('admin_ptba_store') }}",
            type: "POST",
            data: data,
            success: function(response) {
                alert("PTBA enregistré avec succès !");
            }
        });
        */
            });
        });
    </script>




@endsection
