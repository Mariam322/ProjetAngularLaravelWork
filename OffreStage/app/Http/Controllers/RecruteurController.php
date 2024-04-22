<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $recruteur=Recruteur::all();
        return $recruteur;
       
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $recruteur = new Recruteur([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            ]);
            $recruteur->save();
            return response()->json($recruteur, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $recruteur = Recruteur::find($id);
        return response()->json($recruteur);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $recruteur = Recruteur::find($id);
        $recruteur->update($request->all());
        return response()->json('Recruteur MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $recruteur = Recruteur::find($id);
        $recruteur->delete();
        return response()->json('Recruteur supprimée !');
    }
}
