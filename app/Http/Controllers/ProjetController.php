<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetRequest;
use App\Repositories\Interfaces\ProjetRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class ProjetController extends Controller
{
    protected ProjetRepositoryInterface $projetRepository;

    public function __construct(ProjetRepositoryInterface $projetRepository)
    {
        $this->projetRepository = $projetRepository;
    }


    // ✅ Afficher la page  des  Projets
    public final function index ()
    {

        try {

            $projets = $this->projetRepository->liste();

            return view('projet.page',  compact('projets'));


        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des Projets.'], 500);
        }


    }


    public final function store(ProjetRequest $request): JsonResponse
    {
        try {

            $data = $request->validated();
            $projet = $this->projetRepository->ajouter($data);
            return response()->json([
                'message' => 'Projet créé avec succès.',

                'data' => $projet

            ], 201);

        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Projet.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $projet = $this->projetRepository->rechercher($id);

            if (!$projet) {
                return response()->json(['message' => 'Projet non trouvé.'], 404);
            }
            return response()->json($projet);

        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération de l Projet.'], 500);
        }
    }

    public final function update(ProjetRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();

            $projet = $this->projetRepository->modifier($id, $data);

            return response()->json([
                'message' => 'Projet mis à jour avec succès.',

                'data' => $projet
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Projet non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Projet.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->projetRepository->supprimer($id);
            return response()->json(['message' => 'Projet supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Projet non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Projet.'], 500);
        }
    }
}
