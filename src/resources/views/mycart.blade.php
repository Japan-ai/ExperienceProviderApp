@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color:#2c9bfc">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 class="text-center font-weight-bold" style="color:#fefefe;  font-size:1.2em; padding:24px 0px;">
           {{ Auth::user()->name }}さんのカートの中身</h1>

           <div class="card-body">
               <p class="text-center">{{ $message ?? ''}}</p><br>
               
                   @foreach($my_carts as $my_cart)
                       <div class="mycart_box">
                           {{$my_cart->stock->name}} <br>                                
                           {{ number_format($my_cart->stock->fee)}}円 <br>
                           <img src="/image/{{$my_cart->stock->imgpath}}" alt="" class="incart" >
                           <br>
                           <form action="/cartdelete" method="post">
                               @csrf
                               <input type="hidden" name="delete" value="delete">
                               <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                               <input type="hidden" name="stock_id" value="{{ $my_cart->stock->id }}">
                               <input type="submit" value="カートから削除する">
                           </form>
                       </div>
                   @endforeach

                   <div class="text-center p-2">
                       個数：{{$count}}個<br>
                       <p style="font-size:1.2em; font-weight:bold;">合計金額:{{number_format($sum)}}円</p>  
                   </div>  
                   <form action="/checkout" method="POST">
                       @csrf
                       <button type="submit" class="btn btn-lg text-center buy-btn" style="background-color:rgb(250, 176, 17); color:#fefefe;">購入する</button>
                   </form>
       
               <a href="/"style="color:#fefefe">商品一覧へ戻る</a>
           </div>
           </div>
       </div>
   </div>
</div>
@endsection