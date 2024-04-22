<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaire=Stagiaire::all();
        return $stagiaire;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stagiaire = new Stagiaire([
        'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'telephone' => $request->input('telephone'),
            'cv' => $request->input('cv'),
        ]);
        $stagiaire->save();
        return response()->json('Stagiaire créée !');  
        
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $stagiaire = Stagiaire::find($id);
        return response()->json($stagiaire);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $stagiaire = Stagiaire::find($id);
        $stagiaire->update($request->all());
        return response()->json('Stagiaire MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $stagiaire = Stagiaire::find($id);
        $stagiaire->delete();
        return response()->json('Stagiaire supprimée !');
    }
}
