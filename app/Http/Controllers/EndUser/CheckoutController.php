<?php

namespace App\Http\Controllers\EndUser;

use App\District;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderAddress;
use App\OrderDetail;
use App\Province;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    protected $pathView = "enduser.pages.Checkout.";

    public function checkLoginToCheckOut(){
        if( !Auth::guard("customer")->check() ){
            return redirect() -> route("auth.login");
        }
        else{
            $data["wishlist"] = session() -> get("wishList");
            $data["carts"] = session()->get("cart");
            $data["provinces"] = Province::orderBy("_name", "ASC")->get();

            //dd($data["provinces"]);
            return view($this -> pathView . "checkout")->with($data);
        }
    }

    public function getDistrict(){
        if($_POST["province_id"]){
            $province_id = $_POST["province_id"];
            $districts = District::where("_province_id", $province_id)->get();

            return response() -> json([
                "code" => 200,
                "data" => $districts,
            ],200);
        }
    }

    public function getWard(){

        if($_POST["district_id"]){
            $district_id = $_POST["district_id"];
            $wards = Ward::where("_district_id", $district_id)->get();

            return response() -> json([
                "code" => 200,
                "data" => $wards,
            ],200);
        }
    }

    public function confirmCheckout(Request $request){
        $user_id = Auth::guard("customer")->user()->id;
        $data = $request -> all();
        //dd($request -> all());

        //Store data into order, order_detail table
        $order_address = new OrderAddress();
        $order_address -> user_id = $user_id;

        $order = new Order();
        $order -> user_id = $user_id;

        foreach ($data as $key => $value){
            if($key == "pay_method" || $key == "note"){
                $order -> $key = $value;
            }else{
                if($key == "province"){
                    $province_name = Province::find($value);
                    $value = $province_name -> _name;
                }
                if($key == "district"){
                    $district_name = District::find($value);
                    $value = $district_name -> _name;
                }
                if($key == "ward"){
                    $ward_name = Ward::find($value);
                    $value = $ward_name -> _name;
                }
                $order_address -> $key = $value;
            }

        }

        $order_address -> save();

        //Save address id after store order_address into database
        $order -> address_id = $order_address -> id;

        //Save total price of an order
        $cart_detail = session() -> get("cart");
        $price = 0;
        foreach ($cart_detail as $product_id){
            $price += $product_id['subtotal'] * $product_id['quantity'];
            $order -> price_total = $price;
        }
        $order -> save();

        //Store data into order_detail table
        foreach ($cart_detail as $product_id){
            $order_detail = new OrderDetail();
            $order_detail -> user_id = $user_id;
            $order_detail -> order_id = $order -> id;
            $order_detail -> product_id = $product_id['id'];
            $order_detail -> product_name = $product_id['name'];
            $order_detail -> product_picture = $product_id['picture'];
            $order_detail -> product_price = $product_id['subtotal'];
            $order_detail -> product_quantity = $product_id['quantity'];
            $order_detail -> price_total = $product_id['subtotal'] * $product_id['quantity'];
            $order_detail -> save();
        }

        return response() -> json([
            'code' => 200
        ],200);

    }

    public function checkoutSuccess(){
        session() -> forget("cart");
        $data['carts'] = session() -> get("cart");
        return view($this -> pathView ."doneCheckout")->with($data);
    }


}
