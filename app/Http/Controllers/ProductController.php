<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function welcome()
    {
        return view(
            "welcome",
            [
                "aProduct_offering" => Product::offerings()->limit(3)->get(),
                "aProduct_new" => Product::newProducts()->limit(4)->get(),
            ]
        );
    }

    public function detail(Product $product)
    {
        return view("product.detail", compact("product"));
    }
}
