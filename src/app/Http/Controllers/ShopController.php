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
    //$stocks変数も引渡す
    return view('shop',compact('stocks'));
  }

public function myCart(Cart $cart)
{
  $my_carts = $cart->showCart();
  return view('mycart',compact('my_carts'));
}

public function addMycart(Request $request,Cart $cart)
{
  //カートへ追加する処理
  $stock_id=$request->stock_id;
  $message = $cart->addCart($stock_id);

  //追加後の情報を取得
  $my_carts = $cart->showCart();

  return view('mycart',compact('my_carts' , 'message'));
  }
}