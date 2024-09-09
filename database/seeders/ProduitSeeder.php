<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            ['nom' => 'Smartphone X', 'description' => 'Un smartphone de dernière génération avec écran AMOLED.', 'prix' => 699.99, 'quantite' => 50],
            ['nom' => 'Casque Audio Pro', 'description' => 'Casque audio professionnel avec réduction de bruit active.', 'prix' => 149.99, 'quantite' => 150],
            ['nom' => 'Ordinateur Portable Ultra', 'description' => 'Ordinateur portable léger avec écran 15 pouces et processeur i7.', 'prix' => 999.99, 'quantite' => 30],
            ['nom' => 'Montre Connectée', 'description' => 'Montre connectée avec suivi de fitness et notifications.', 'prix' => 199.99, 'quantite' => 75],
            ['nom' => 'Tablette 10 pouces', 'description' => 'Tablette avec écran de 10 pouces, idéale pour les loisirs et le travail.', 'prix' => 249.99, 'quantite' => 60],
            ['nom' => 'Imprimante Laser', 'description' => 'Imprimante laser monochrome avec une vitesse d\'impression rapide.', 'prix' => 129.99, 'quantite' => 40],
            ['nom' => 'Disque Dur Externe 1TB', 'description' => 'Disque dur externe avec une capacité de stockage de 1 To.', 'prix' => 89.99, 'quantite' => 100],
            ['nom' => 'Clavier Mécanique', 'description' => 'Clavier mécanique avec rétroéclairage RGB et touches programmables.', 'prix' => 89.99, 'quantite' => 80],
            ['nom' => 'Souris Gaming', 'description' => 'Souris gaming avec capteur haute précision et boutons personnalisables.', 'prix' => 59.99, 'quantite' => 120],
            ['nom' => 'Webcam Full HD', 'description' => 'Webcam Full HD avec micro intégré pour les appels vidéo de haute qualité.', 'prix' => 49.99, 'quantite' => 90],
        ]);
    }
}
