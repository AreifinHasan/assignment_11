<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function index()
        {
            // Implement logic to fetch sales figures for today, yesterday, this month, last month
            // This logic could involve querying the database or any other data source

            // For example (assuming these variables hold the figures)
            $salesToday = 100;
            $salesYesterday = 150;
            $salesThisMonth = 3000;
            $salesLastMonth = 2800;

            return view('dashboard', [
                'salesToday' => $salesToday,
                'salesYesterday' => $salesYesterday,
                'salesThisMonth' => $salesThisMonth,
                'salesLastMonth' => $salesLastMonth,
            ]);
        }
}
