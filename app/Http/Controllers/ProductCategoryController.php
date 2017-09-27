<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\models\Product;
class ProductCategoryController extends Controller
{
    public function index($id)
    {
        $products = Product::where('category','=',$id)->get();
        return view('productCategory.index',['products'=>$products]);
    }
}
