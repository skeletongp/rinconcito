<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::search(request('q'))->paginate(6);
        return view('pages.products.index')->with(['products' => $products]);
    }
    public function __construct() {
        $this->middleware(['role:admin'])->except('index','show');
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
        $filename = null;
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $filename=time() . '.' . request()->photo->getClientOriginalExtension();
            request()->photo->move(public_path('images'), $filename);
            $data['photo'] = '/images/' . $filename;
        }
        $data['utily']=$data['price']-$data['cost'];
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
        $dt = Carbon::now();
        $today = $dt->toDateString();
        $details=$product->details()->whereDate('created_at', '=', $today)->orderBY('created_at','desc')->paginate(3);
        return view('pages.products.show')
        ->with([
            'product'=>$product,
            'details'=>$details,
        ]);
    }


    public function edit(Product $product)
    {
        return view('pages.products.edit')
        ->with(['product'=>$product]);
    }


    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . request()->photo->getClientOriginalExtension();
            request()->photo->move(public_path('images'), $filename);
            $data['photo'] = '/images/' . $filename;
        }
        $data['utily']=$data['price']-$data['cost'];
        $product->update($data);
        $product->code=$this->createAcronym($data['name']).$product->id;
        $product->save();
        return redirect()->route('products.show', $product);
    }

  
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
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
    public function upstock(Request $request, Product $product)
    {
        $product->stock=$product->stock+$request->stock;
        $product->save();
        return redirect()->route('products.show', $product)
        ->with(['success'=> 'Añadidos '.$request->stock.' '.$product->name.'    al inventario']);
    }
}
