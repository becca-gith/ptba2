<div class="account-content">
    <div class="login-wrapper login-new">
        <div class="row w-100">
            <div class="col-lg-5 mx-auto">
                <div class="login-content user-login">

                    <!-- Logo -->
                    <div class="login-logo text-center mb-4">
                        <a href="{{ url('/login') }}">
                            <img src="{{ asset('app/assets/img/armoirie.png') }}" alt="Logo" class="img-fluid" style="max-height: 100px;">
                        </a>
                    </div>

                    <!-- Formulaire -->
                    <form action="" method="POST" id="form-login">
                        @csrf
                        <div class="card shadow-lg">
                            <div class="card-body p-5">

                                <div class="login-userheading text-center mb-4">
                                    <h3><i class="ti ti-login"></i> Connexion à la plateforme</h3>
                                    <p class="text-muted">Veuillez saisir vos identifiants pour accéder à votre espace.</p>
                                </div>

                                <!-- Login -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">
                                        <i class="ti ti-user-circle"></i> Identifiant  <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="login_utilisateur" id="login_utilisateur" class="form-control" placeholder="Entrez votre login" required>
                                        <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                    </div>
                                </div>

                                <!-- Mot de passe -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">
                                        <i class="ti ti-lock"></i> Mot de passe <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password" name="mot_passe" id="mot_passe" class="form-control" placeholder="********" required>
                                        <span class="input-group-text"><i class="ti ti-eye-off toggle-password"></i></span>
                                    </div>
                                </div>

                                <!-- Rappel & Mot de passe oublié -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember">
                                        <label class="form-check-label text-muted" for="remember">
                                            <i class="ti ti-check"></i> Se souvenir de moi
                                        </label>
                                    </div>
                                    <a href="" class="text-decoration-none text-warning fw-semibold">
                                        <i class="ti ti-help-circle"></i> Mot de passe oublié ?
                                    </a>
                                </div>

                                <!-- Bouton de connexion -->
                                <div class="d-grid mb-4">
                                    <button type="submit" class="btn btn-primary btn-lg" id="authentifier">
                                        <i class="ti ti-login"></i> Connexion
                                    </button>
                                </div>

                                <!-- Lien d'inscription -->
                                <div class="text-center">
                                    <p class="mb-0">Nouveau sur la plateforme ?
                                        <a href="{{ url('/register') }}" class="text-decoration-none text-info fw-bold">
                                            <i class="ti ti-user-plus"></i> Créer un compte
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Copyright -->
                    <div class="text-center mt-4 text-muted small">
                        &copy; {{ date('Y') }} <strong>MENV</strong> – Tous droits réservés.
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

