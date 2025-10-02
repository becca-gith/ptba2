<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntreeRequest;
use App\Repositories\Interfaces\EntreeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class EntreeController extends Controller
{
    protected EntreeRepositoryInterface $entreeRepository;

    public function __construct(EntreeRepositoryInterface $entreeRepository)
    {
        $this->entreeRepository = $entreeRepository;
    }


    // ✅ Afficher la page  des  Entrees
    public final function page ()
    {

        try {
            $entrees = $this->entreeRepository->liste();
            return view('admin.entree.index',  compact('entrees'));
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des Entrees.'], 500);
        }


    }


    public final function store(EntreeRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $entree = $this->entreeRepository->ajouter($data);
            return response()->json([
                'message' => 'Entree créé avec succès.',
                'data' => $entree
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Entree.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $entree = $this->entreeRepository->rechercher($id);

            if (!$entree) {
                return response()->json(['message' => 'Entree non trouvé.'], 404);
            }
            return response()->json($entree);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du Entree.'], 500);
        }
    }

    public final function update(EntreeRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();
            
            $entree = $this->entreeRepository->modifier($id, $data);
            return response()->json([
                'message' => 'Entree mis à jour avec succès.',
                'data' => $entree
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Entree non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Entree.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->entreeRepository->supprimer($id);
            return response()->json(['message' => 'Entree supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Entree non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Entree.'], 500);
        }
    }
}
