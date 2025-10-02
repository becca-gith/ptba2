@extends('layout.app')

@section('title')

    PTBA  | Annees

@endsection

@section('css')



    <link rel="stylesheet" href="{{asset('app')}}/assets/css/dataTables.bootstrap5.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

@endsection

@section('contenu')


    <div class="content">
        <div class="page-header">
            <div class="add-item d-flex">
                <div class="page-title">
                    <h4 class="fw-bold">Annees    </h4>
                    <h6>Liste des annees   </h6>
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
            <div class="page-btn">
                <a href="#" class="btn btn-primary" id="lancerAnnee"><i class="ti ti-circle-plus me-1"></i>Ajouter </a>
            </div>
        </div>

        @include('annee.partial.liste')
        <!-- /product list -->

        <!-- /product list -->
    </div>

    @include('annee.partial.modal')
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


    <script src="{{asset('pages')}}/annee.js" type="text/javascript"></script>


@endsection
