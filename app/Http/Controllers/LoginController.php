<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Utilisateur;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.page');
    }


    public function showRegisterForm()
    {
        return view('login.page_register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required|string',
            'mot_passe' => 'required|string',
        ]);

        $utilisateur = Utilisateur::where('login', $credentials['login'])
            ->orWhere('email', $credentials['login'])
            ->where('etat', 1)
            ->first();

        if (!$utilisateur || !Hash::check($credentials['mot_passe'], $utilisateur->mot_passe)) {
            return back()->withErrors(['login' => 'Identifiants invalides.'])->withInput();
        }

        // Connexion manuelle (stockage en session)
        Session::put('utilisateur_id', $utilisateur->id);
        Session::put('utilisateur_nom', $utilisateur->nom);
        Session::put('utilisateur_role', $utilisateur->role);

        return redirect()->intended('dashboard')->with('success', 'Connexion réussie.');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('admin_login')->with('success', 'Déconnexion réussie.');
    }
}
