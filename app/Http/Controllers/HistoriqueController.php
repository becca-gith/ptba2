<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoriqueRequest;
use App\Repositories\Interfaces\HistoriqueRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class HistoriqueController extends Controller
{
    protected HistoriqueRepositoryInterface $HistoriqueRepository;

    public function __construct(HistoriqueRepositoryInterface $historiqueRepository)
    {
        $this->historiqueRepository = $historiqueRepository;
    }


    // ✅ Afficher la page  des  Historiques
    public final function index ()
    {

        try {

            $historiques = $this->historiqueRepository->liste();

            return view('historique.page',  compact('historiques'));


        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des Historiques.'], 500);
        }


    }


    public final function store(HistoriqueRequest $request): JsonResponse
    {
        try {

            $data = $request->validated();
            $historique = $this->historiqueRepository->ajouter($data);
            return response()->json([
                'message' => 'Historique créé avec succès.',

                'data' => $historique

            ], 201);

        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Historique.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $historique = $this->historiqueRepository->rechercher($id);

            if (!$historique) {
                return response()->json(['message' => 'Historique non trouvé.'], 404);
            }
            return response()->json($historique);

        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération de l Historique.'], 500);
        }
    }

    public final function update(HistoriqueRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();

            $historique = $this->historiqueRepository->modifier($id, $data);

            return response()->json([
                'message' => 'Historique mis à jour avec succès.',

                'data' => $historique
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Historique non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Historique.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->historiqueRepository->supprimer($id);
            return response()->json(['message' => 'Historique supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Historique non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Historique.'], 500);
        }
    }
}
