<?php

// app/Http/Controllers/ClickController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListBeliTabel;

class ClickController extends Controller
{
    public function store(Request $request)
    {
        $click = new ListBeliTabel();
        $click->user_agent = $request->header('User-Agent');
        $click->ip_address = $request->ip();
        $click->voucher_id = $request->input('voucher_id');
        $click->total_buy = $request->input('total_buy');
        $click->save();

        return redirect()->back()->with('success', 'Click recorded successfully');
    }
}

