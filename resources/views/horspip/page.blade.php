@extends('layout.app')

@section('title')
    HORS PIP | Liste
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
                    <h4 class="fw-bold">Hors PIP</h4>
                    <h6>Liste des Hors PIP</h6>
                </div>
            </div>
            <ul class="table-top-head">
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf">
                        <img src="{{asset('app')}}/assets/img/icons/pdf.svg" alt="img">
                    </a>
                </li>
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel">
                        <img src="{{asset('app')}}/assets/img/icons/excel.svg" alt="img">
                    </a>
                </li>
            </ul>
            <div class="page-btn">
                <a href="{{ url('/horspips/create') }}" class="btn btn-primary" id="lancerHorspip">  {{-- ← corrigé --}}
                    <i class="ti ti-circle-plus me-1"></i>Ajouter
                </a>
            </div>
        </div>

        @include('horspip.partial.liste')  {{-- ← corrigé --}}
    </div>
@endsection

@section('js')
    <script src="{{asset('app')}}/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('app')}}/assets/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
        });
    </script>

    <script src="{{asset('pages')}}/horspip.js"></script>  {{-- ← corrigé --}}
@endsection