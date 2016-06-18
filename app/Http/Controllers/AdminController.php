<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorTracking;

use App\Http\Requests;

class AdminController extends Controller
{
    public function visitors()
    {
        $visitors = VisitorTracking::all();
        return view('admin.show_visitor_tracking', compact('visitors'));
    }
}
