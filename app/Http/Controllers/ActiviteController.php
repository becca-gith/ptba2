<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActiviteRequest;
use App\Repositories\Interfaces\ActiviteRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ActiviteController extends Controller
{
    protected ActiviteRepositoryInterface $activiteRepository;

    public function __construct(ActiviteRepositoryInterface $activiteRepository)
    {
        $this->activiteRepository = $activiteRepository;
    }


    // ✅ Afficher la page  des  Activites
    public final function index ()
    {

        try {
            $activites = $this->activiteRepository->liste();
            return view('admin.activite.index',  compact('activites'));
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des activites.'], 500);
        }


    }


    public final function store(ActiviteRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $activite = $this->activiteRepository->ajouter($data);
            return response()->json([
                'message' => 'Activite créé avec succès.',
                'data' => $activite
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Activite.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $activite = $this->activiteRepository->rechercher($id);

            if (!$activite) {
                return response()->json(['message' => 'Activite non trouvé.'], 404);
            }
            return response()->json($activite);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du Activite.'], 500);
        }
    }

    public final function update(ActiviteRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();
            $activite = $this->activiteRepository->modifier($id, $data);
            return response()->json([
                'message' => 'Activite mis à jour avec succès.',
                'data' => $activite
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Activite non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour d activite.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->activiteRepository->supprimer($id);
            return response()->json(['message' => 'Activite supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Activite non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Activite.'], 500);
        }
    }
}
