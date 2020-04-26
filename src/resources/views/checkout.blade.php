@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color:#2c9bfc">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 class="text-center font-weight-bold" style="color:#fefefe;  font-size:1.2em; padding:24px 0px;">
           {{ Auth::user()->name }}さんご購入ありがとうございました</h1>

           <div class="card-body" stye="color:#fefefe">
               <p>ご登録頂いたメールアドレスへ決済情報をお送り致します。</p>
               <a href="{{ route('home') }}" style="color:#fefefe;">商品一覧へ</a>
           </div>
           </div>
       </div>
   </div>
</div>
@endsection