<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Utilizzo il model
use App\Models\Railroad;

class PageController extends Controller
{
    public function index()
    {
        // Ritorno l'intera tabella
        $railroads = Railroad::all();

        return view('homepage', compact('railroads'));
    }
}
