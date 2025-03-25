<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
class HomeController extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::where('is_active', true)->get();
        return Inertia::render('Welcome', [
            'services' => $services
        ]);
    }

    public function reservation() {
        return Inertia::render('reservation');
    }
    
    public function reservationStore(Request $request) {
        dd($request->all());
    }

}


