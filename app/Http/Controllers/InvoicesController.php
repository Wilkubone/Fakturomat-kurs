<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index() {
            $invoices = Invoice::all();
            return view('invoices.index', ['invoices' => $invoices]);
        }
            public function create() {
            return view('invoices.create');
        }

        public function store(Request $request) {
           $invoice = new Invoice();

           $invoice->number = $request->number;
           $invoice->date = $request->date;
           $invoice->total = $request->total;

           $invoice->save();

           return redirect()->route('invoices.index');
        }

}
