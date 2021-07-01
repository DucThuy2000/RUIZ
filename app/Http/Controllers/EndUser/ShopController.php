<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Product;
use App\Product_category;
use Illuminate\Http\Request;
use Harimayco\Menu\Facades\Menu;

class ShopController extends Controller
{
    protected $pathView = "enduser.pages.";
    public function index(){
        $products = Product::where([
            ['status', 'active']
        ])->orderBy("id")->paginate(12);
        $categories = Product_category::where('status','active')->get();
        return view($this -> pathView . "shop",
        compact("products", "categories"));
    }

    public function showProductByCategory($slug){
        $categories = Product_category::where('status','active')->get();
        $category = Product_category::where("slug", $slug)->first();
        $products = $category -> products() -> paginate(12);

        return view($this -> pathView . "product_category",
        compact("products", "categories"));
    }
}
