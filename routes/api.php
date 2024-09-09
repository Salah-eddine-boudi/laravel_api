<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProduitController;





// routes/api.php

Route::apiResource('produits', ProduitController::class);

