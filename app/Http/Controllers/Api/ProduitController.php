<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; // Import de Symfony Response

class ProduitController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;
        $produits = Produit::paginate($perPage);
        return response()->json($produits, Response::HTTP_OK); // Utilisation de Symfony Response
    }

    public function show($id)
    {
        $produit = Produit::find($id);
        if ($produit) {
            return response()->json($produit, Response::HTTP_OK);
        }
        return response()->json(['message' => 'Produit non trouvé'], Response::HTTP_NOT_FOUND);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'prix' => 'required|numeric',
        'quantite' => 'required|integer',
    ]);

    $produit = Produit::create($validatedData);

    return response()->json([
        'message' => 'Produit créé avec succès',
        'produit' => $produit
    ], 201);
}

    public function update(Request $request, $id)
{
    $produit = Produit::find($id);

    if ($produit) {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
            'quantite' => 'required|integer',
        ]);

        $produit->update([
            'nom' => $validatedData['nom'], 
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'], 
            'quantite' => $validatedData['quantite']
        ]);

        // Retourner une réponse JSON
        return response()->json([
            'message' => 'Produit mis à jour avec succès',
            'produit' => $produit
        ], 200);
    }

    return response()->json(['message' => 'Produit non trouvé'], 404);
}


    public function destroy($id)
    {
        $produit = Produit::find($id);
        if ($produit) {
            $produit->delete();
            return response()->json(['message' => 'Produit supprimé avec succès'], Response::HTTP_OK);
        }

        return response()->json(['message' => 'Produit non trouvé'], Response::HTTP_NOT_FOUND);
    }
}
