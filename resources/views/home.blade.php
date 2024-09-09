@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Titre principal -->
    <h1 class="mb-4 text-center">Bienvenue sur la page d'accueil</h1>

    <!-- Carte d'introduction -->
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h2 class="card-title">À propos de ce projet</h2>
            <p class="card-text">
                Ce projet est une application web de gestion de produits, développée en utilisant le framework Laravel.
                Il permet aux utilisateurs de gérer facilement les informations sur les produits. 
                Les fonctionnalités principales incluent la création, la mise à jour, la suppression, et la visualisation des enregistrements des produits.
            </p>
        </div>
    </div>

    <!-- Fonctionnalités du projet -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Gestion des Produits</h3>
                    <p class="card-text">
                        Ajoutez, modifiez et supprimez des produits. Chaque produit peut être mis à jour avec des détails tels que le nom, la description, le prix, et la quantité en stock.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Postman</h3>
                    <p class="card-text">
                        Est utilisé pour tester et documenter l'API REST. Il permet de faire des requêtes HTTP pour vérifier que les endpoints fonctionnent comme prévu et facilite la gestion des environnements de test.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">SOAP</h3>
                    <p class="card-text">
                        (Simple Object Access Protocol) est un protocole pour l'échange structuré de données dans les services web. Il utilise XML pour les messages et est connu pour sa rigueur et sa formalité. Bien que ce projet utilise principalement REST, il est utile de connaître SOAP pour des contextes où la sécurité et la fiabilité sont cruciales.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Carte API REST -->
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h2 class="card-title">API REST</h2>
            <p class="card-text">
                Ce projet inclut une API REST pour la gestion des produits. L'API permet aux clients d'effectuer des opérations CRUD (Créer, Lire, Mettre à jour, Supprimer) sur les produits via des requêtes HTTP.
                Les points de terminaison de l'API sont sécurisés et permettent l'accès aux données des produits depuis des applications externes ou des clients tiers.
            </p>
        </div>
    </div>

    <!-- Technologies Utilisées -->
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Technologies Utilisées</h2>
            <p class="card-text">
                Ce projet utilise les technologies suivantes :
            </p>
            <ul>
                <li><strong>Laravel:</strong> Pour la structure et le développement backend, y compris la gestion des API REST.</li>
                <li><strong>Bootstrap:</strong> Pour la création d'une interface utilisateur responsive et moderne.</li>
                <li><strong>MySQL:</strong> Comme système de gestion de base de données pour stocker les informations sur les produits.</li>
                <li><strong>JavaScript & jQuery:</strong> Pour améliorer l'interactivité de l'application.</li>
                <li><strong>Postman:</strong> Pour tester et documenter l'API REST.</li>
            </ul>
        </div>
    </div>

    <!-- Bouton d'exploration des produits -->
    <div class="text-center mt-4">
        <a href="{{ route('produits.index') }}" class="btn btn-primary">
            <i class="fas fa-box"></i> Explorer les Produits
        </a>
    </div>
</div>
@endsection
