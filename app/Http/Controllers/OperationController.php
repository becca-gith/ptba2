<?php

namespace App\Http\Controllers\Comptabilite;

use App\Http\Requests\OperationRequest;
use App\Repositories\Interfaces\OperationRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class OperationController extends Controller
{
    protected OperationRepositoryInterface $operationRepository;

    public function __construct(OperationRepositoryInterface $operationRepository)
    {
        $this->operationRepository = $operationRepository;
    }


    // ✅ Afficher la page  des  Operations
    public final function index ()
    {

        try {
            $operations = $this->operationRepository->liste();
            return view('admin.operation.index',  compact('operations'));

        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des Operations.'], 500);
        }


    }


    public final function store(OperationRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $operation = $this->operationRepository->ajouter($data);
            return response()->json([
                'message' => 'Operation créé avec succès.',
                'data' => $Operation
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Operation.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $operation = $this->operationRepository->rechercher($id);

            if (!$operation) {
                return response()->json(['message' => 'Operation non trouvé.'], 404);
            }
            return response()->json($operation);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du Operation.'], 500);
        }
    }

    public final function update(OperationRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();
            $operation = $this->operationRepository->modifier($id, $data);
            return response()->json([
                'message' => 'Operation mis à jour avec succès.',
                'data' => $Operation
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Operation non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Operation.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->operationRepository->supprimer($id);
            return response()->json(['message' => 'Operation supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Operation non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Operation.'], 500);
        }
    }
}
