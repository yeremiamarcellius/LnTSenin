<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function showSupplier(){
        $suppliers = Supplier::all();

        return view('showSupplier', compact('suppliers'));
    }
}
