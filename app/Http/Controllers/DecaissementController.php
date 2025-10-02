<?php

namespace App\Http\Controllers;

use App\Http\Requests\DecaissementRequest;
use App\Repositories\Interfaces\DecaissementRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class DecaissementController extends Controller
{
    protected DecaissementRepositoryInterface $decaissementRepository;

    public function __construct(DecaissementRepositoryInterface $decaissementRepository)
    {
        $this->decaissementRepository = $decaissementRepository;
    }


    // ✅ Afficher la page  des  Decaissements
    public final function page ()
    {

        try {
            $decaissements = $this->decaissementRepository->liste();
            return view('comptabilite.decaissement.page',  compact('decaissements'));
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des Decaissements.'], 500);
        }


    }


    public final function store(DecaissementRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $decaissement = $this->decaissementRepository->ajouter($data);
            return response()->json([
                'message' => 'Decaissement créé avec succès.',
                'data' => $decaissement
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Decaissement.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $decaissement = $this->decaissementRepository->rechercher($id);

            if (!$decaissement) {
                return response()->json(['message' => 'Decaissement non trouvé.'], 404);
            }
            return response()->json($decaissement);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du Decaissement.'], 500);
        }
    }

    public final function update(DecaissementRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();

            $decaissement = $this->decaissementRepository->modifier($id, $data);
            return response()->json([
                'message' => 'Decaissement mis à jour avec succès.',
                'data' => $decaissement
            ]);
            
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Decaissement non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Decaissement.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->decaissementRepository->supprimer($id);
            return response()->json(['message' => 'Decaissement supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Decaissement non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Decaissement.'], 500);
        }
    }
}
