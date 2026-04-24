<?php

namespace App\Http\Controllers;

use App\Http\Requests\BailleurRequest;
use App\Repositories\Interfaces\BailleurRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class BailleurController extends Controller
{
    protected BailleurRepositoryInterface $bailleurRepository;

    public function __construct(BailleurRepositoryInterface $bailleurRepository)
    {
        $this->bailleurRepository = $bailleurRepository;
    }


    // ✅ Afficher la page  des  Bailleurs
    public final function index ()
    {

        try {

            $bailleurs = $this->bailleurRepository->liste();

            return view('bailleur.page',  compact('bailleurs'));


        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des Bailleurs.'], 500);
        }


    }


    public final function store(BailleurRequest $request): JsonResponse
    {
        try {

            $data = $request->validated();
            $bailleur = $this->bailleurRepository->ajouter($data);
            return response()->json([
                'message' => 'Bailleur créé avec succès.',

                'data' => $bailleur

            ], 201);

        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Bailleur.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $bailleur = $this->bailleurRepository->rechercher($id);

            if (!$bailleur) {
                return response()->json(['message' => 'Bailleur non trouvé.'], 404);
            }
            return response()->json($bailleur);

        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération de l Bailleur.'], 500);
        }
    }

    public final function update(BailleurRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();

            $bailleur = $this->bailleurRepository->modifier($id, $data);

            return response()->json([
                'message' => 'Bailleur mis à jour avec succès.',

                'data' => $bailleur
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Bailleur non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Bailleur.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->bailleurRepository->supprimer($id);
            return response()->json(['message' => 'Bailleur supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Bailleur non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Bailleur.'], 500);
        }
    }
}
