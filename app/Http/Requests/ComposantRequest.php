<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComposantRequest extends FormRequest
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
        $composantId = $this->route('composant'); // récupère l’ID depuis la route /composants/{composant}

        return [
            'libelle' => [
                'required',
                'string',
                'max:255',
                Rule::unique('composants', 'libelle')->ignore($composantId),
            ],
            'ptba_id' => 'required|integer|exists:ptbas,id',
            'montant' => 'required|numeric|min:0',
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
            'libelle.unique' => 'Ce libellé existe déjà.',

            'ptba_id.required' => 'Le PTBA est obligatoire.',
            'ptba_id.integer' => 'Le PTBA doit être un entier.',
            'ptba_id.exists' => 'Le PTBA sélectionné est invalide.',

            'montant.required' => 'Le montant est obligatoire.',
            'montant.numeric' => 'Le montant doit être un nombre.',
            'montant.min' => 'Le montant doit être supérieur ou égal à 0.',

            'utilisateur_id.integer' => 'L’utilisateur doit être un entier.',
            'utilisateur_id.exists' => 'L’utilisateur sélectionné est invalide.',


        ];
    }
}
