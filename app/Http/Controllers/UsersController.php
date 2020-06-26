<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Annonce;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
   /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$annonces = Annonce::paginate(10);
        //return view('home', compact('annonces'));
		return view('home');
	}

	/**
	 * Show the form for creating a new resource.
	 * envoie le formulaire pour la création d'un new user
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(User $user)
	{
		//var_dump($user->id);
		return view('edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, User $user)
	{
		$user->update($request->all());
		return view('home');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(User $user)
	{
		echo "blabla";
		$user->delete();
		return  redirect('/');
	}

	public function rand()
    {
        $annonces = DB::table('annonces')
        ->orderBy('ville')
        ->get();
        return view('home', compact('annonces'));
    }
}
