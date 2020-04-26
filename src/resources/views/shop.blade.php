@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color:#2c9bfc">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#fefefe; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <form action="/home" method="GET">
             <input type="text" name="keyword">
             <input type="submit" value="商品検索">
           </form>
           <div class="">
               <div class="d-flex flex-row flex-wrap">       
                @foreach($stocks as $stock)
                  <div class="col-xs-6 col-sm-4 col-md-4 ">
                    <div class="mycart_box">
                      {{$stock->name}} <br>
                      {{$stock->fee}}円<br>
                      <img src="/image/{{$stock->imgpath}}" alt="" class="incart" >
                      <br>
                      {{$stock->detail}} <br>
                      <form action="mycart" method="post">
                        @csrf
                        <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                        <input type="submit" value="カートに追加" style="background-color:rgb(250, 176, 17); border-color:rgb(250, 176, 17); color:#fefefe;">
                      </form>
                    </div>
                  </div>
                @endforeach                    
              </div>
              <div class="text-center" style="width: 200px;margin: 20px auto;">
              {{  $stocks->links()}} 
              </div>
           </div>
       </div>
   </div>
</div>
@endsection