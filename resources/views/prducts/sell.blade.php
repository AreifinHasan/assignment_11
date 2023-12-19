<!--resources/views/products/sell.blade.php-->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sell Product</h1>
        <form action="{{ route('products.sell.store', $product->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="sale_amount">Sale Amount</label>
                <input type="text" name="sale_amount" id="sale_amount" class="form-control">
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sell Product</button>
        </form>
    </div>
@endsection
