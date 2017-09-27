<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\models\Product_Category;
use App\models\Sub_category;
use App\models\Product;
class ProductController extends Controller
{
    //index page
    public function index()
    {
        $categories = Product_Category::all();
        foreach($categories as $category)
        {
            $sub_categories = Sub_category::where('category','=',$category->id)->get();
            $category->sub_categories = $sub_categories;
        }
        return view('product.index',['productCategories'=>$categories]);
    }
    public function detail($id)
    {
        $product = Product::where('id','=',$id)->first();
        return view('product.detail',['product'=>$product]);
    }
}
