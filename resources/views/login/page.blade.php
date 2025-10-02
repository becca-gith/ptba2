<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>PTBA  | Connexion</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app') }}/assets/img/favicon.png" />

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app') }}/assets/img/apple-touch-icon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('app') }}/assets/css/bootstrap.min.css" />

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('app') }}/assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="{{ asset('app') }}/assets/plugins/fontawesome/css/all.min.css" />

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('app') }}/assets/plugins/tabler-icons/tabler-icons.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('app') }}/assets/css/style.css" />
    <link rel="stylesheet" href="{{ asset('app') }}/assets/css/mystyle.css" />

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

</head>
<body class="account-page bg-white">

<div id="global-loader">
    <div class="whirly-loader"></div>
</div>

<!-- Main Wrapper -->
<div class="main-wrapper">
    @include('login.partials.form_login')
</div>
<!-- /Main Wrapper -->

<!-- Scripts en fin de body pour chargement optimal -->

<!-- jQuery (chargé via CDN officiel) -->
<!-- jQuery -->
<script src="{{asset('app')}}/assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

<!-- jQuery Validation plugin via CDN -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<!-- Feather Icon JS -->
<script src="{{ asset('app') }}/assets/js/feather.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('app') }}/assets/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Custom JS principal -->
<script src="{{ asset('app') }}/assets/js/script.js"></script>

<!-- Ton script de login (doit être après jQuery Validate) -->
<script src="{{ asset('pages/login.js') }}"></script>

<!-- Vérification de chargement -->
<script>
    console.log('jQuery chargé ?', typeof jQuery !== 'undefined');
    console.log('jQuery Validate chargé ?', typeof $.validator !== 'undefined');
</script>

</body>
</html>
