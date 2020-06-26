<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::paginate(10);
        return view('annonce', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$id = Auth::user()->id;
        return view('createAnnonce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $annonce = $request->user()->annonce()->create([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'ville' => $request->input('ville'),
            'departement' => $request->input('departement'),
            'url_img1' => $request->input('url_img1'),
            'url_img2' => $request->input('url_img2'),
            'url_img3' => $request->input('url_img3'),
            'prix' => $request->input('prix'),
            ]);
            return redirect()->route('annonces.show', [$annonce]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        return view('showAnnonce', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        return view('editAnnonce', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        $annonce->update($request->all());
		return back()->with('info', 'Annonce modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
        return back()->with('info', 'Annonce supprimée');
    }

    public function showMembreAnnonce(User $id)
    {
        $annonces = DB::table('annonces')
            ->where('id_membre', Auth::user()->id)
            ->orderBy('updated_at', 'desc')
            ->get();
        //$annonces = Annonce::paginate(5);
        return view('showAnnonceMembre', compact('annonces'));
    }

    public function orderByRecente()
    {
        $annonces = DB::table('annonces')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('annonce', compact('annonces'));
    }

    public function orderByTitre()
    {
        $annonces = DB::table('annonces')
        ->orderBy('titre')
        ->get();
        return view('annonce', compact('annonces'));
    }

    public function orderByPrix()
    {
        $annonces = DB::table('annonces')
        ->orderBy('prix', 'asc')
        ->get();
        return view('annonce', compact('annonces'));
    }

    public function orderByVille()
    {
        $annonces = DB::table('annonces')
        ->orderBy('ville')
        ->get();
        return view('annonce', compact('annonces'));
    }

    
}
