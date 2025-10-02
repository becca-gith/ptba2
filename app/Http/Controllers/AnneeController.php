<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnneeRequest;
use App\Repositories\Interfaces\AnneeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class AnneeController extends Controller
{
    protected AnneeRepositoryInterface $anneeRepository;

    public function __construct(AnneeRepositoryInterface $anneeRepository)
    {
        $this->anneeRepository = $anneeRepository;
    }


    // ✅ Afficher la page  des  Annees
    public final function index ()
    {

        try {
            
            $annees = $this->anneeRepository->listeAnnee();
            return view('annee.page',  compact('annees'));
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des annees.'], 500);
        }


    }


    public final function store(AnneeRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $annee = $this->anneeRepository->ajouter($data);
            return response()->json([
                'message' => 'Annee créé avec succès.',
                'data' => $annee
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Annee.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $annee = $this->anneeRepository->rechercher($id);

            if (!$annee) {
                return response()->json(['message' => 'Annee non trouvé.'], 404);
            }
            return response()->json($annee);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération de l annee.'], 500);
        }
    }

    public final function update(AnneeRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();
            $annee = $this->anneeRepository->modifier($id, $data);
            return response()->json([
                'message' => 'Annee mis à jour avec succès.',
                'data' => $annee
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Annee non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Annee.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->anneeRepository->supprimer($id);
            return response()->json(['message' => 'Annee supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Annee non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Annee.'], 500);
        }
    }
}
