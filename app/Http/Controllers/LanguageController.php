<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function es()
    {
        session(['locale' => 'es']);

        return redirect('/');
    }

    public function en()
    {
        session(['locale' => 'en']);

        return redirect('/');
    }
}
