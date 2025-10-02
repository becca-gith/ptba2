<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        // Ici on autorise tout le monde à tenter la connexion
        return true;
    }

    /**
     * Règles de validation
     */
    public function rules(): array
    {
        return [
            'login_utilisateur'    => 'required',
            'mot_passe' => 'required',
        ];
    }

    /**
     * Messages personnalisés
     */
    public function messages(): array
    {
        return [
            'login_utilisateur.required'    => 'Le login  est obligatoire.',
            'mot_passe.required' => 'Le mot de passe est obligatoire.',

        ];
    }
}
