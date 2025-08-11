<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;


class ProductController extends Controller

{

private static function getProducts()
{
    // Initialize products in session if not exists
    if (!session()->has('products')) {
        session()->put('products', [
            ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=> 1000],
            ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=> 999],
            ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=> 35],
            ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=> 100]
        ]);
    }
    return session('products');
}

private static function saveProducts($products)
{
    session()->put('products', $products);
}


public function index(): View

{

$viewData = [];

$viewData["title"] = "Products - Online Store";

$viewData["subtitle"] = "List of products";

$viewData["products"] = self::getProducts();

return view('product.index')->with("viewData", $viewData);

}


public function show(string $id) : View|RedirectResponse

{

$viewData = [];

$products = self::getProducts();

// Check if the product ID is valid (numeric and within range)
if (!is_numeric($id) || $id < 1 || $id > count($products)) {
    return redirect()->route('home.index');
}

$product = $products[$id-1];

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


public function save(Request $request): RedirectResponse

{

$request->validate([

"name" => "required|max:255",

"description" => "required|max:500",

"price" => "required|numeric|min:0.01"

]);

// For now, we'll simulate saving by adding to the session array
// In a real application, this would save to the database
$products = self::getProducts();
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
