<?php

namespace App\Http\Controllers;

use App\Http\Requests\PtbaRequest;
use App\Repositories\Interfaces\PtbaRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PtbaController extends Controller
{
    protected PtbaRepositoryInterface $ptbaRepository;

    public function __construct(PtbaRepositoryInterface $ptbaRepository)
    {
        $this->ptbaRepository = $ptbaRepository;
    }


    // ✅ Afficher la page  des  Ptbas
    public function index(\Illuminate\Http\Request $request)
    {

            // Sinon → vue
            return view('ptba.page');


    }


    // ✅ Afficher la page   de creation de ptba
    public function create(\Illuminate\Http\Request $request)
    {

        // Sinon → vue
        return view('ptba.ajouter');


    }




    public final function store(PtbaRequest $request): JsonResponse
    {
        try {

            $data = $request->validated();



            $ptba = $this->ptbaRepository->ajouter($data);

            return response()->json([
                'message' => 'Ptba créé avec succès.',
                'data' => $ptba
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Ptba.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $ptba = $this->ptbaRepository->rechercher($id);

            if (!$ptba) {
                return response()->json(['message' => 'Ptba non trouvé.'], 404);
            }
            return response()->json($ptba);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du Ptba.'], 500);
        }
    }

    public final function update(PtbaRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();

            $ptba = $this->ptbaRepository->modifier($id, $data);
            return response()->json([
                'message' => 'Ptba mis à jour avec succès.',
                'data' => $ptba
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Ptba non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Ptba.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->ptbaRepository->supprimer($id);
            return response()->json(['message' => 'Ptba supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Ptba non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Ptba.'], 500);
        }
    }
}
