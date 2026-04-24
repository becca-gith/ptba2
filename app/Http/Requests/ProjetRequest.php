<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        // Mettre à true si tous les utilisateurs autorisés peuvent créer/modifier un projet
        return true;
    }

    /**
     * Règles de validation pour le projet.
     */
    public function rules(): array
    {
        return [
            'libelle' => 'required|string|max:255',
            'description' => 'nullable|string',

        ];
    }

    /**
     * Messages personnalisés pour les erreurs de validation.
     */
    public function messages(): array
    {
        return [
            'libelle.required' => 'Le libellé du projet est obligatoire.',
            'libelle.string' => 'Le libellé doit être une chaîne de caractères.',
            'libelle.max' => 'Le libellé ne doit pas dépasser 255 caractères.',
            'description.string' => 'La description doit être une chaîne de caractères.',

        ];
    }
}
