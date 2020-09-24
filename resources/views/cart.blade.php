@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-content-center" style="margin:200px">
   <form class="w3-container w3-display-middle w3-card-4" method="get" id="payment-form" action="{{ route('make.payment') }}">
    @csrf 
    <h1>Forma paypal</h1>  
    <input style="width: 200px; height: 40px; border: 1px solid red;" placeholder="money" class="w3-input w3-border" name="amount" type="text"></p>      
    <button class="w3-btn w3-blue">Заплатить</button></p>
  </form> 
</div>

@endsection