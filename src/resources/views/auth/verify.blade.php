@extends('layouts.app')

@section('content')
<div class="container" style="background-color:#2c9bfc">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メールアドレスを変更') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('メールアドレスにリンクを送信しました') }}
                        </div>
                    @endif

                    {{ __('メールアドレスのリンクを確認して下さい') }}
                    {{ __('メールが届かない場合はこちら') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('変更する') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
