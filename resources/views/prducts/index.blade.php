<!--resources/views/sale-transactions/index.blade.php-->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sales Transaction History</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Sale Amount</th>
                    <th>Sale Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($saleTransactions as $saleTransaction)
                    <tr>
                        <td>{{ $saleTransaction->id }}</td>
                        <td>{{ $saleTransaction->product->name }}</td>
                        <td>{{ $saleTransaction->sale_amount }}</td>
                        <td>{{ $saleTransaction->sale_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
