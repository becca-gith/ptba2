<?php

namespace App\Http\Controllers;

use App\Http\Requests\HorspipRequest;  // ← à créer (copie de PtbaRequest)
use App\Repositories\Interfaces\HorspipRepositoryInterface;  // ← à créer
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class HorspipController extends Controller
{
    protected HorspipRepositoryInterface $horspipRepository;

    public function __construct(HorspipRepositoryInterface $horspipRepository)
    {
        $this->horspipRepository = $horspipRepository;
    }

    // ✅ Afficher la page des Hors PIPs
    public function index(\Illuminate\Http\Request $request)
    {
        return view('horspip.page');
    }

    // ✅ Afficher la page de création de Hors PIP
    public function create(\Illuminate\Http\Request $request)
    {
        return view('horspip.ajouter');  // ← corrigé
    }

    public final function store(HorspipRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $horspip = $this->horspipRepository->ajouter($data);

            return response()->json([
                'message' => 'Hors PIP créé avec succès.',
                'data' => $horspip
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Hors PIP.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {
            $horspip = $this->horspipRepository->rechercher($id);

            if (!$horspip) {
                return response()->json(['message' => 'Hors PIP non trouvé.'], 404);
            }
            return response()->json($horspip);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du Hors PIP.'], 500);
        }
    }

    public final function update(HorspipRequest $request, $id): JsonResponse
    {
        try {
            $data = $request->validated();
            $horspip = $this->horspipRepository->modifier($id, $data);

            return response()->json([
                'message' => 'Hors PIP mis à jour avec succès.',
                'data' => $horspip
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Hors PIP non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Hors PIP.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->horspipRepository->supprimer($id);
            return response()->json(['message' => 'Hors PIP supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Hors PIP non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Hors PIP.'], 500);
        }
    }
}