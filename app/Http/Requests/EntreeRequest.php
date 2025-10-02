<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EntreeRequest extends FormRequest
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
        $entreeId = $this->route('entree'); // récupère l’ID depuis la route /entrees/{entree}

        return [
            'libelle' => [
                'required',
                'string',
                'max:255',
                Rule::unique('entrees', 'libelle')->ignore($entreeId),
            ],
            'montant' => 'required|numeric|min:0',
            'motif' => 'nullable|string|max:1000',
            'date_entre' => 'required|date',
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
            'libelle.unique' => 'Cette entrée existe déjà.',

            'montant.required' => 'Le montant est obligatoire.',
            'montant.numeric' => 'Le montant doit être un nombre.',
            'montant.min' => 'Le montant doit être supérieur ou égal à 0.',

            'motif.string' => 'Le motif doit être une chaîne de caractères.',
            'motif.max' => 'Le motif ne doit pas dépasser 1000 caractères.',

            'date_entre.required' => 'La date de l’entrée est obligatoire.',
            'date_entre.date' => 'La date de l’entrée doit être une date valide.',

            'utilisateur_id.integer' => 'L’utilisateur doit être un entier.',
            'utilisateur_id.exists' => 'L’utilisateur sélectionné est invalide.',


        ];
    }
}
