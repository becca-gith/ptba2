<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OperationRequest extends FormRequest
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
        $operationId = $this->route('id'); // ID ou modèle passé dans la route

        return [
            'libelle' => [
                'required',
                'string',
                'max:255',
                Rule::unique('operations', 'libelle')->ignore($operationId),
            ],
            'statut' => 'required|integer|in:0,1,2', // à adapter selon tes statuts possibles
            'date_operation' => 'required|date',
            'activite_id' => 'required|integer|exists:activites,id',
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
            'libelle.unique' => 'Cette opération existe déjà.',

            'statut.required' => 'Le statut est obligatoire.',
            'statut.integer' => 'Le statut doit être un entier.',
            'statut.in' => 'Le statut doit être une valeur valide.',

            'date_operation.required' => 'La date de l’opération est obligatoire.',
            'date_operation.date' => 'La date de l’opération doit être une date valide.',

            'activite_id.required' => 'L’activité est obligatoire.',
            'activite_id.integer' => 'L’activité doit être un entier.',
            'activite_id.exists' => 'L’activité sélectionnée est invalide.',

            'utilisateur_id.integer' => 'L’utilisateur doit être un entier.',
            'utilisateur_id.exists' => 'L’utilisateur sélectionné est invalide.',

            
        ];
    }
}
