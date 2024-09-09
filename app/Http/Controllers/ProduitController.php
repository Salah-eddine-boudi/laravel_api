<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        
        $produits = Produit::paginate(10);
    
        
        return view('produits.index', compact('produits'));
    }
    

    public function create()
    {
        return view('produits.create');
    }

    public function store(Request $request)
    {
        Produit::create($request->all());
        return redirect()->route('produits.index');
    }

    public function show(Produit $produit)
    {
        return view('produits.show', compact('produit'));
    }

    public function edit(Produit $produit)
    {
        return view('produits.edit', compact('produit'));
    }

    public function update(Request $request, Produit $produit)
    {
        $produit->update($request->all());
        return redirect()->route('produits.index');
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index');
    }
}
