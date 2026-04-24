<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BailleurRequest extends FormRequest
{
    /**
     * Déterminer si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true; // À ajuster si besoin
    }

    /**
     * Règles de validation.
     */
    public function rules(): array
    {
        return [
            'code'             => 'nullable|string|max:50|unique:bailleurs,code',
            'logo'             => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
            'sigle'            => 'nullable|string|max:100',
            'nom'              => 'nullable|string|max:255',
            'email'            => 'nullable|email|max:255',
            'utilisateur_id'   => 'nullable|integer|exists:utilisateurs,id',

        ];
    }

    /**
     * Messages personnalisés.
     */
    public function messages(): array
    {
        return [
            'code.unique'           => 'Ce code est déjà utilisé.',
            'logo.image'            => 'Le logo doit être une image.',
            'logo.mimes'            => 'Formats acceptés : png, jpg, jpeg, webp.',
            'logo.max'              => 'La taille du logo ne doit pas dépasser 2 Mo.',
            'email.email'           => "L'adresse email n'est pas valide.",
            'utilisateur_id.exists' => "L'utilisateur sélectionné n'existe pas.",

        ];
    }
}

