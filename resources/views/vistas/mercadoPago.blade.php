@extends('layouts.app')

@section('title')
    <h1>Single Sms</h1>
@endsection

@section('content')

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
    
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
            <input type="number" name="" id="">
            <input type="submit" value="enviar!" name="" id="">
            
            

            </form>   
        </div>
    </div>
    <br>
    <p>
        <a href="https://www.apple.com/mx/ios/app-store/" target="_blank">
            <img src="http://www.dynamicsolutions.com.mx/Twinchat/wp-content/uploads/2019/06/2000px-Available_on_the_App_Store_black_SVG.svg.png" style="width: 50%;" alt="">
        </a>
    </p>
    
    <a href="{{ url('/pagos') }}" target="_blank">Recarga con mercado pago</a>
    
@endsection