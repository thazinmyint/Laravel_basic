<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productPage($product_id,$shop_id){
        return 'this is product page for product id '.$product_id." for shop id ".$shop_id;
    }

    function productList(){
        $product_lists=['bag','cow','car','boy','ko'];
        return view('product',[
            'products'=>$product_lists
        ]);

    }

    function productDetail($product_id){
        return 'this is product for product id: '. $product_id;
    }
}
