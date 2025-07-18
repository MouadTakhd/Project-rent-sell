<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Vente;

class InvoiceController extends Controller
{
    public function invoice($reservation_id)
    {
        $reservation = Reservation::find($reservation_id);

        return view('invoice', compact('reservation'));
    }
    public function invoiceVente($vente_id)
    {
        $vente = Vente::with(['user', 'car'])->findOrFail($vente_id);

        return view('invoiceVente', compact('vente'));
    }
}
