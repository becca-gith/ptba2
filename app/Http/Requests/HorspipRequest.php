<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PtbaRequest extends FormRequest
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
        $ptbaId = $this->route('ptba'); // récupère l’ID depuis la route /ptbas/{ptba}

        return [
            'libelle' => [
                'required',
                'string',
                'max:255',
                Rule::unique('ptbas', 'libelle')->ignore($ptbaId),
            ],
            'annee_id' => 'required|integer|exists:annees,id',
            'type' => 'required|integer|in:1,2', // à adapter selon les valeurs possibles
            

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
            'libelle.unique' => 'Ce libellé existe déjà.',

            'annee_id.required' => 'L’année est obligatoire.',
            'annee_id.integer' => 'L’année doit être un entier.',
            'annee_id.exists' => 'L’année sélectionnée est invalide.',

            'type.required' => 'Le type est obligatoire.',
            'type.integer' => 'Le type doit être un entier.',
            'type.in' => 'Le type doit être parmi les valeurs autorisées.',

           

          
        ];
    }
}
