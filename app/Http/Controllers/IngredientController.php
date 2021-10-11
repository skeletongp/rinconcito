<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Product;
use Illuminate\Http\Request;

class IngredientController extends Controller
{

    public function index()
    {
        $ingredients=Ingredient::get();
        return view('pages.ingredients.index')
        ->with(['ingredients'=>$ingredients]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Ingredient $ingredient)
    {
        //
    }


    public function edit(Ingredient $ingredient)
    {
        //
    }


    public function update(Request $request, Ingredient $ingredient)
    {
        //
    }


    public function destroy(Ingredient $ingredient)
    {
        //
    }

    public function ingredients($product)
    {
        $product=Product::find($product);
            $ingredients = Ingredient::get(['name', 'id']);
            return view('pages.products.add-ingredients')
            ->with([
                'product' => $product,
                'ingredients' => $ingredients,
            ]);
    }
    public function remove(Product $product, Ingredient $ingredient)
    {
       dd($product, $ingredient);
    }
}
