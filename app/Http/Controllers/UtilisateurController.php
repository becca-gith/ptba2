<?php

namespace App\Http\Controllers;

use App\Http\Requests\UtilisateurRequest;
use App\Http\Requests\LoginRequest;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Types\TypeStatus;

use Illuminate\Support\Facades\Session;

class UtilisateurController extends Controller
{
    protected UtilisateurRepositoryInterface $utilisateurRepository;

    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository)
    {
        $this->utilisateurRepository = $utilisateurRepository;
    }


    // ✅ Afficher la page  des  Utilisateurs
    public final function index ()
    {

        try {
            $utilisateurs = $this->utilisateurRepository->listeUtilisateurs();
            return view('utilisateur.page',  compact('utilisateurs'));
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors du chargement des Utilisateurs.'], 500);
        }


    }


    public final function store(UtilisateurRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $utilisateur = $this->utilisateurRepository->ajouter($data);
            return response()->json([
                'message' => 'Utilisateur créé avec succès.',
                'data' => $utilisateur
            ], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la création du Utilisateur.'], 500);
        }
    }

    public final function show($id): JsonResponse
    {
        try {

            $utilisateur = $this->utilisateurRepository->rechercher($id);

            if (!$utilisateur) {
                return response()->json(['message' => 'Utilisateur non trouvé.'], 404);
            }
            return response()->json($utilisateur);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la récupération du Utilisateur.'], 500);
        }
    }

    public final function update(UtilisateurRequest $request,  $id): JsonResponse
    {
        try {
            $data = $request->validated();
            $utilisateur = $this->utilisateurRepository->modifier($id, $data);
            return response()->json([
                'message' => 'Utilisateur mis à jour avec succès.',
                'data' => $utilisateur
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Utilisateur non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la mise à jour du Utilisateur.'], 500);
        }
    }

    public final function destroy($id): JsonResponse
    {
        try {
            $this->utilisateurRepository->supprimer($id);
            return response()->json(['message' => 'Utilisateur supprimé avec succès.']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Utilisateur non trouvé.'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression du Utilisateur.'], 500);
        }
    }


public function login(LoginRequest $request)
{
    $credentials = $request->only('login_utilisateur', 'mot_passe');

    $result = $this->utilisateurRepository->authenticate($credentials);

    // Stockage en session uniquement si succès
    if ($result['success'] && isset($result['compte'])) {
        Session::put('LoginUser', $result['compte']);

        return response()->json([
            'success' => true,
            'message' => $result['message'],
            'compte'  => $result['compte'],
            'code'    => $result['code'] ?? 'LOGIN_SUCCESS',
        ]);
    }

    // Déterminer le code HTTP en fonction du code renvoyé par le repository
    $httpStatus = match($result['code'] ?? '') {
        'MISSING_FIELDS', 'EMPTY_FIELDS' => 422,
        'USER_NOT_FOUND', 'INVALID_PASSWORD' => 401,
        'ACCOUNT_DELETED', 'ACCOUNT_INACTIVE', 'ACCOUNT_BLOCKED' => 403,
        'SERVER_ERROR' => 500,
        default => 400,
    };

    return response()->json([
        'success' => false,
        'message' => $result['message'] ?? 'Une erreur est survenue.',
        'code'    => $result['code'] ?? 'UNKNOWN_ERROR',
    ], $httpStatus);
}


}
