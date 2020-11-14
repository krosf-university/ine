<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome()
    {
        return view(
            'welcome',
            [
                'aProduct_offering' => Product::Offerings()->limit(3)->get(),
                'aProduct_new' => Product::NewProducts()->limit(4)->get(),
            ]
        );
    }
}
