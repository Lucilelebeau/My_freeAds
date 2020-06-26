<?php

namespace App\Http\Controllers;
use App\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $annonces = DB::table('annonces')
        ->inRandomOrder()
        ->limit(4)
        ->get();

        $membres = \App\User::get();
        $id = \App\User::get('id');
        return view('home', [
            'id' => $id,
            'annonces' => $annonces
         ]);
        //return view('home', compact('id'));

    }

    public function numberRow()
    {
        $countRow = DB::table('annonces')
        ->count()
        ->get();
        return $countRow;
    }
}
