<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DecaissementRequest extends FormRequest
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
        $decaissementId = $this->route('id'); // ID ou modèle dans la route

        return [
            'libelle' => [
                'required',
                'string',
                'max:255',
                Rule::unique('decaissements', 'libelle')->ignore($decaissementId),
            ],
            'fichier_justificatif' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'motif' => 'nullable|string|max:1000',
            'date_decaissement' => 'required|date',
            'montant' => 'required|numeric|min:0',

            'utilisateur_id' => 'nullable|integer|exists:utilisateurs,id',
            'ptba_id' => 'required|integer|exists:ptbas,id',
            'composant_id' => 'required|integer|exists:composants,id',
            'activite_id' => 'required|integer|exists:activites,id',


        ];
    }

    /**
     * Messages personnalisés
     */
    public function messages(): array
    {
        return [
            'libelle.required' => 'Le libellé est obligatoire.',
            'libelle.unique' => 'Ce libellé existe déjà.',
            'libelle.max' => 'Le libellé ne doit pas dépasser 255 caractères.',

            'fichier_justificatif.file' => 'Le justificatif doit être un fichier.',
            'fichier_justificatif.mimes' => 'Le justificatif doit être au format pdf, jpg, jpeg ou png.',
            'fichier_justificatif.max' => 'Le fichier justificatif ne doit pas dépasser 2 Mo.',

            'motif.string' => 'Le motif doit être une chaîne de caractères.',
            'motif.max' => 'Le motif ne doit pas dépasser 1000 caractères.',

            'date_decaissement.required' => 'La date du décaissement est obligatoire.',
            'date_decaissement.date' => 'La date du décaissement doit être une date valide.',

            'montant.required' => 'Le montant est obligatoire.',
            'montant.numeric' => 'Le montant doit être un nombre.',
            'montant.min' => 'Le montant doit être supérieur ou égal à 0.',

            'utilisateur_id.exists' => 'L’utilisateur sélectionné est invalide.',
            'ptba_id.required' => 'Le PTBA est obligatoire.',
            'ptba_id.exists' => 'Le PTBA sélectionné est invalide.',
            'composant_id.required' => 'Le composant est obligatoire.',
            'composant_id.exists' => 'Le composant sélectionné est invalide.',
            'activite_id.required' => 'L’activité est obligatoire.',
            'activite_id.exists' => 'L’activité sélectionnée est invalide.',

           
        ];
    }
}
