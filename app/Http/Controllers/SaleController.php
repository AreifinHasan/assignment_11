<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaleTransaction;
class SaleController extends Controller
{
    public function store(Request $request)
    {
        // Logic to store sale transactions
        SaleTransaction::create([
            'product_id' => $request->input('product_id'),
            'sale_amount' => $request->input('sale_amount'),
            'sale_date' => now(), // or the date from the form
            // Other fields
        ]);

        return redirect('/')->with('success', 'Sale recorded successfully.');
    }

    public function index()
    {
        // Logic to fetch sale transaction history
        $transactions = SaleTransaction::all();

        return view('transaction-history', ['transactions' => $transactions]);
    }
}
