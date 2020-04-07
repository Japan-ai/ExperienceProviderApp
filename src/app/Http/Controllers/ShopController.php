<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class ShopController extends Controller
{
  public function index() 
  {
    $stocks = Stock::Paginate(6);
    //$stocks変数も引き渡す
    return view('shop',compact('stocks'));
  }

  public function myCart()
  {
    $my_carts = Cart::all();
    return view('mycart',compact('my_carts'));
      
  }
}
