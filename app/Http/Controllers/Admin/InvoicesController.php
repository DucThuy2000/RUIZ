<?php

namespace App\Http\Controllers\Admin;

use App\Invoices as MainModel; //Alias (bí danh) 'use' để gọi đến namespace App\Bank với bí danh là MainModel
use App\Helper\Functions;
use App\Http\Controllers\AdminController;
use App\InvoicesDetail;
use App\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class InvoicesController extends AdminController
{
    protected $pathView = "admin.page.invoices.";

    protected $resize = [
        'thumbnail' => ['width' => 800],
        'standard' => ['width' => 100],
    ];

    protected $fieldForm = [];

    protected $removeRedundant = ["_token", "tag_id"];

    protected $fieldList = [
        ['label' => 'Code', 'name' => 'name', 'type' => 'id'],
        ['label' => 'Created By', 'name' => 'created_by', 'type' => 'otherModel'],
        ['label' => 'Product Amount', 'name' => 'price_total', 'type' => 'numberFormat'],
        ['label' => 'Total Price', 'name' => 'price_total', 'type' => 'numberFormat'],
        ['label' => 'Created Date', 'name' => 'created_at', 'type' => 'dateFormat'],
    ];

    public function __construct(){
        //Get name of Controller
        $getControllerName = (new \ReflectionClass($this))->getShortName();
        $shortController = Functions::getModelName($getControllerName);
        $this -> folderUpload = $shortController;
        $this -> controllerName = $shortController;
        view()->share("shortController", $shortController);
        view()->share("folderUpload", $this -> folderUpload);
        view()->share("controllerName",$this -> controllerName);
        view()->share("fieldForm", $this -> fieldForm);
        view()->share("fieldList", $this -> fieldList);
        $this -> model = new MainModel();
    }

    public function create() {
        $data['partners'] = Partner::all();
        return view($this -> pathView . "form")->with($data);;
    }

    public function invoiceDetail(Request $request, $id){
        $data['order'] = Order::find($id);

        //Get giá coupon
        $data['order_coupon'] = Coupon::where("id", $data['order'] -> coupon_id) -> pluck("price") -> first();

        //Get order details qua relationship đã tạo ở order model
        $data['order_details'] = $data['order'] -> orderDetails;

        //Get order address qua relationship đã tạo ở order model
        $data['order_address'] = $data['order'] -> orderAddress;

        //Get user qua relationship đã tạo ở order model
        $data['user'] = $data['order'] -> user;

        return view($this -> pathView . "viewOrderDetail")->with($data);
    }

    public function delete($id) {
        $record = $this -> model -> find($id);
        // Xóa địa chỉ sau khi xóa đơn hàng
        $orderAddress = OrderAddress::where("id", $record -> address_id)->first();
        $orderAddress -> delete();

        //Xóa các sản phẩm trong đơn hàng
        $orderDetails = OrderDetail::where("order_id", $record -> id)->get();

        foreach ($orderDetails as $item){
            $item -> delete();
        }

        //Xoá đơn hàng
        $record -> delete();

        if($record){
            return response() -> json([
                "code" => 200,
                "message" => "Delete success"
            ],200);
        }
        else{
            return response() -> json([
                "code" => 500,
                "message" => "Cant delete this record"
            ], 500);
        }
    }
}
