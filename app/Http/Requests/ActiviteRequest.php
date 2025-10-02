<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ActiviteRequest extends FormRequest
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
        $activiteId = $this->route('id'); // récupère l’ID depuis la route /activites/{activite}

        return [
            'libelle' => [
                'required',
                'string',
                'max:255',
                Rule::unique('activites', 'libelle')->ignore($activiteId),
            ],
            'montant' => 'required|numeric|min:0',
            'ptba_id' => 'required|integer|exists:ptbas,id',
            'composant_id' => 'required|integer|exists:composants,id',
            'utilisateur_id' => 'nullable|integer|exists:utilisateurs,id',

        ];
    }

    /**
     * Messages personnalisés
     */
    public function messages(): array
    {
        return [
            'libelle.required' => 'Le libellé est obligatoire.',
            'libelle.string' => 'Le libellé doit être une chaîne de caractères.',
            'libelle.max' => 'Le libellé ne doit pas dépasser 255 caractères.',
            'libelle.unique' => 'Cette activité existe déjà.',

            'montant.required' => 'Le montant est obligatoire.',
            'montant.numeric' => 'Le montant doit être un nombre.',
            'montant.min' => 'Le montant doit être supérieur ou égal à 0.',

            'ptba_id.required' => 'Le PTBA est obligatoire.',
            'ptba_id.integer' => 'Le PTBA doit être un entier.',
            'ptba_id.exists' => 'Le PTBA sélectionné est invalide.',

            'composant_id.required' => 'Le composant est obligatoire.',
            'composant_id.integer' => 'Le composant doit être un entier.',
            'composant_id.exists' => 'Le composant sélectionné est invalide.',

            'utilisateur_id.integer' => 'L’utilisateur doit être un entier.',
            'utilisateur_id.exists' => 'L’utilisateur sélectionné est invalide.',


        ];
    }
}
