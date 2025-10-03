<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UtilisateurRequest extends FormRequest
{
    /**
     * Autoriser la requête
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Règles de validation
     */
    public function rules(): array
    {
        $utilisateurId = $this->route('id'); // récupère l’ID depuis la route /utilisateurs/{id}

        return [
            'nom_prenom' => 'required|string|max:255',

            'login_utilisateur' => [
                'required',
                'string',
                'max:255',
                Rule::unique('utilisateurs', 'login_utilisateur')->ignore($utilisateurId),
            ],

            'telephone' => [
                'nullable',
                'string',
                'max:20',
                Rule::unique('utilisateurs', 'telephone')->ignore($utilisateurId),
            ],

            'mot_passe' => $this->isMethod('post')
                ? 'required|string|min:6|confirmed' // création obligatoire + confirmation
                : 'nullable|string|min:6|confirmed',  // modification facultative + confirmation

            'role' => 'required|integer|in:0,1,2', // à adapter selon tes rôles
        ];
    }

    /**
     * Messages personnalisés
     */
    public function messages(): array
    {
        return [
            'nom_prenom.required' => 'Le nom et prénom sont obligatoires.',
            'nom_prenom.string' => 'Le nom et prénom doivent être une chaîne de caractères.',
            'nom_prenom.max' => 'Le nom et prénom ne doivent pas dépasser 255 caractères.',

            'login_utilisateur.required' => 'Le login est obligatoire.',
            'login_utilisateur.unique' => 'Ce login est déjà utilisé.',

            'telephone.unique' => 'Ce numéro de téléphone est déjà utilisé.',

            'mot_passe.required' => 'Le mot de passe est obligatoire.',
            'mot_passe.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'mot_passe.confirmed' => 'La confirmation du mot de passe ne correspond pas.',

            'role.required' => 'Le rôle est obligatoire.',
            'role.in' => 'Le rôle doit être parmi les valeurs autorisées.',
        ];
    }
}

