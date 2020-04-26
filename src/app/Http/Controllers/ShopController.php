<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Mail;
use App\Mail\Thanks;

class ShopController extends Controller
{
public function index(Request $request)
{
  if($request->has('keyword')) {
    $stocks = Stock::where ('name','like','%'.$request->get('keyword').'%')->paginate(6);
  } else { 
    $stocks = Stock::paginate(6);
  }
  return view('shop', ['stocks'=>$stocks]);
}

public function myCart(Cart $cart)
{
  $data = $cart->showCart();
  return view('mycart',$data);
}

public function addMycart(Request $request,Cart $cart)
{
  //カートへ追加する処理
  $stock_id=$request->stock_id;
  $message = $cart->addCart($stock_id);

  //追加後の情報を取得
  $data = $cart->showCart();

  return view('mycart',$data)->with('message',$message);
  }

public function deleteCart(Request $request,Cart $cart)
{
  //カートテーブルから該当の商品かつログインユーザーのidと一致するレコードを削除
  $stock_id=$request->stock_id;
  $message = $cart->deleteCart($stock_id);
  //追加後の情報を取得
  $data = $cart->showCart();

  return view('mycart',$data)->with('message',$message);
  }

  public function checkout(Request $request,Cart $cart)
  {
      $user = Auth::user();
      $mail_data['user']=$user->name; 
      $mail_data['checkout_items']=$cart->checkoutCart(); 
      Mail::to($user->email)->send(new Thanks($mail_data));
      return view('checkout');

  }
}