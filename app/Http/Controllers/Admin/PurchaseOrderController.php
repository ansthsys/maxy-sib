<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PurchaseOrderController extends Controller
{
    public function getProductList()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', ["products" => $products]);
    }

    public function getProductShow()
    {
        return view('admin.products.index');
    }

    public function getProductEdit()
    {
        return view('admin.products.index');
    }

    public function getProductDestroy()
    {
        return view('admin.products.index');
    }
}
