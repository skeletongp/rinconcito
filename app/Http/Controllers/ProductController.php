<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::search(request('q'))->paginate(6);
        return view('pages.products.index')->with(['products' => $products]);
    }


    public function create()
    {
        return view('pages.products.create');
    }
    public function createAcronym($string)
    {
        $output = null;
        $token  = strtok($string, ' ');
        while ($token !== false) {
            $output .= $token[0];
            $token = strtok(' ');
        }
        return $output;
    }

    public function store(Request $request)
    {
        $filename = time() . '.' . request()->photo->getClientOriginalExtension();
        request()->photo->move(public_path('images'), $filename);
        $data = $request->all();
        $data['photo'] = 'images/' . $filename;
        $product = Product::create($data);
        $product->code = $this->createAcronym($product->name) . $product->id;
        $product->save();
        if ($product->type == 'COMIDA') {
            redirect()->route('ingredients.ingredients', $product);
        }
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }

  
    public function destroy(Product $product)
    {
        //
    }
    public function add_ingredients(Request $request, Product $product)
    {   
        $ingredient_id=$request->ingredient_id;
        $ing=$product->ingredients()->where('ingredient_id','=',$ingredient_id)->first();
        
        if ($ing) {
         $product->ingredients()->updateExistingPivot($ingredient_id, ['cant'=>$request->cant]) ;  
         return redirect(request()->header('Referer'));
        }
        $product->ingredients()->attach($ingredient_id, ['cant'=>$request->cant]);
        return redirect(request()->header('Referer'));
    }
}
