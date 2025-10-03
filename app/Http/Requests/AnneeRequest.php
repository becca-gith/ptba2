<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AnneeRequest extends FormRequest
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
        $anneeId = $this->route('id'); // récupère l'ID depuis la route (ex: /annees/{id})

        return [
            'libelle' => [
                'required',
                'string',
                'max:255',
                Rule::unique('annees', 'libelle')->ignore($anneeId),
            ],

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
            'libelle.unique' => 'Cette année existe déjà.',
           
        ];
    }
}
