@extends('layouts.app')

<title>@yield('title', 'MODIF P | GYA BITTI')</title>

@section('content')
<div class="container mt-5">
   
    <div class="card shadow-sm rounded">
        <div class="card-header bg-warning text-white">
            <h1 class="mb-0">Modifier le produit</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('produits.update', $produit->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom"><i class="fas fa-box"> Nom du produit</i></label>
                            <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ $produit->nom }}" required>
                            @error('nom')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="prix"><i class="fas fa-euro-sign">Prix</i> </label>
                            <input type="text" name="prix" id="prix" class="form-control @error('prix') is-invalid @enderror" value="{{ $produit->prix }}" required>
                            @error('prix')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <label for="quantite"><i class="fas fa-boxes">Quantité</i></label>
                        <input type="number" name="quantite" id="quantite" class="form-control @error('quantite') is-invalid @enderror" value="{{ $produit->quantite }}" required>
                        @error('quantite')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="description"><i class="fas fa-info-circle">Description</i></label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" required>{{ $produit->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-4 text-center">
                    <button type="submit" class="btn btn-warning btn-lg">
                        <i class="fas fa-save">Mettre à jour</i>
                    </button>
                    <a href="{{ route('produits.index') }}" class="btn btn-secondary btn-lg">
                        <i class="fas fa-arrow-left">Retour</i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
