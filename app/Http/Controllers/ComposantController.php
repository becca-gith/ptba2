<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComposantRequest;
use App\Repositories\Interfaces\ComposantRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ComposantController extends Controller
{
    protected ComposantRepositoryInterface $composantRepository;

    public function __construct(ComposantRepositoryInterface $composantRepository)
    {
        $this->composantRepository = $composantRepository;
    }


    // ✅ Afficher la page  des  Composants
    public final function page ()
    {

        try {
            $composants = $this->composantRepository->liste();

            return view('admin.composant.index',  compact('composants'));
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des Composants.'], 500);
        }


    }


    public final function store(ComposantRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $composant = $this->__constructomposantRepository->ajouter($data);
            return response()->json([
                'message' => 'Composant créé avec succès.',
                'data' => $composant
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Composant.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $composant = $this->composantRepository->rechercher($id);

            if (!$composant) {
                return response()->json(['message' => 'Composant non trouvé.'], 404);
            }
            return response()->json($composant);

        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du composant.'], 500);
        }
    }

    public final function update(ComposantRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();
            $composant = $this->composantRepository->modifier($id, $data);
            return response()->json([

                'message' => 'Composant mis à jour avec succès.',

                'data' => $Composant
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Composant non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Composant.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->composantRepository->supprimer($id);
            return response()->json(['message' => 'Composant supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Composant non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Composant.'], 500);
        }
    }
}
