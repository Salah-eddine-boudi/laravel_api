@extends('layouts.app')

<title>@yield('title', 'INSCRIPTION | GYA BITTI')</title>

@section('content')
<div class="container mt-5">
  
    <div class="card shadow-sm rounded"> 
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h1 class="mb-0"><i class="fas fa-box">Ajouter un produit</i> </h1> 
            <a href="{{ route('produits.index') }}" class="btn btn-light">
                <i class="fas fa-arrow-left"> Retour</i> 
            </a>
        </div>
        <div class="card-body"> 
            <form action="{{ route('produits.store') }}" method="POST"> 
                @csrf 
                <div class="row"> 
                    <div class="col-md-6 mb-4"> 
                        <div class="form-group"> 
                            <label for="nom"><i class="fas fa-tag">Nom du produit</i> </label>
                            <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" 
                                   value="{{ old('nom') }}" placeholder="Entrez le nom du produit" required> 
                            @error('nom')
                                <div class="invalid-feedback">
                                    {{ $message }} 
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-4"> 
                        <div class="form-group">
                            <label for="prix"><i class="fas fa-dollar-sign">Prix</i> </label> 
                            <input type="number" name="prix" id="prix" class="form-control @error('prix') is-invalid @enderror" 
                                   value="{{ old('prix') }}" placeholder="Entrez le prix du produit" step="0.01" required> 
                            @error('prix')
                                <div class="invalid-feedback">
                                    {{ $message }} 
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4"> 
                    <div class="form-group">
                        <label for="quantite"><i class="fas fa-boxes">Quantité</i> </label>
                        <input type="number" name="quantite" id="quantite" class="form-control @error('quantite') is-invalid @enderror" 
                               value="{{ old('quantite') }}" placeholder="Entrez la quantité disponible" required>
                        @error('quantite')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-4"> 
                    <label for="description"><i class="fas fa-info-circle">Description</i> </label> 
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" 
                              placeholder="Entrez la description du produit" rows="4">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
                <div class="form-group text-center mt-4"> 
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="fas fa-plus-circle">Ajouter</i> 
                    </button> 
                    <a href="{{ route('produits.index') }}" class="btn btn-secondary btn-lg ml-3">
                        <i class="fas fa-arrow-left">Retour</i> 
                    </a> 
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
