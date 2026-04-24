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
    public final function index ()
    {


            $composants = $this->composantRepository->liste();
            return view('composant.page',  compact('composants'));



    }


    public final function store(ComposantRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $composant = $this->composantRepository->ajouter($data);
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

            $Composant = $this->composantRepository->rechercher($id);

            if (!$Composant) {
                return response()->json(['message' => 'Composant non trouvé.'], 404);
            }
            return response()->json($Composant);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du Composant.'], 500);
        }
    }

    public final function update(ComposantRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();
            $composant = $this->composantRepository->modifier($id, $data);
            return response()->json([
                'message' => 'Composant mis à jour avec succès.',
                'data' => $composant
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Composant non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour d Composant.'], 500);
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
