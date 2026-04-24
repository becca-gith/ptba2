<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoriqueRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        // Mettre à true si tous les utilisateurs autorisés peuvent créer/modifier un historique
        return true;
    }

    /**
     * Règles de validation pour l'historique.
     */
    public function rules(): array
    {
        return [
            'libelle' => 'nullable|string|max:255',
            'heure_action' => 'nullable|date',
            'utilisateur_id' => 'nullable|integer|exists:users,id',

        ];
    }

    /**
     * Messages personnalisés pour les erreurs de validation.
     */
    public function messages(): array
    {
        return [
            'libelle.string' => 'Le libellé doit être une chaîne de caractères.',
            'libelle.max' => 'Le libellé ne doit pas dépasser 255 caractères.',
            'heure_action.date' => 'La date et l\'heure de l\'action doivent être valides.',
            'utilisateur_id.integer' => 'L\'ID de l\'utilisateur doit être un entier.',
            'utilisateur_id.exists' => 'L\'utilisateur sélectionné n\'existe pas.',

        ];
    }
}
