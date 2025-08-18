<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use App\Models\Product;


class ProductController extends Controller

{


private static function saveProducts($products)
{
    session()->put('products', $products);
}


public function index(): View

{

$viewData = [];

$viewData["title"] = "Products - Online Store";

$viewData["subtitle"] = "List of products";

$viewData["products"] = Product::all();

return view('product.index')->with("viewData", $viewData);

}


public function show(string $id) : View|RedirectResponse

{

$viewData = [];

$product = Product::findOrFail($id);

$viewData["title"] = $product["name"]." - Online Store";

$viewData["subtitle"] = $product["name"]." - Product information";

$viewData["product"] = $product;

return view('product.show')->with("viewData", $viewData);

}
public function create(): View

{

$viewData = []; //to be sent to the view

$viewData["title"] = "Create product";


return view('product.create')->with("viewData",$viewData);

}


public function save(Request $request): \Illuminate\Http\RedirectResponse

{

$request->validate([

"name" => "required",

"price" => "required"

]);

Product::create($request->only(["name","price"]));


// For now, we'll simulate saving by adding to the session array
// In a real application, this would save to the database
//$products = self::getProducts();
$products = session()->get('products', []);
$newId = count($products) + 1;
$newProduct = [
    "id" => (string)$newId,
    "name" => $request->input('name'),
    "description" => $request->input('description'),
    "price" => (float)$request->input('price')
];

// Add the new product to the array and save to session
$products[] = $newProduct;
self::saveProducts($products);

// Redirect to success page
return redirect()->route('product.success');

}

public function success(): View

{

$viewData = [];

$viewData["title"] = "Product Created - Online Store";

return view('product.success')->with("viewData", $viewData);

}

}
