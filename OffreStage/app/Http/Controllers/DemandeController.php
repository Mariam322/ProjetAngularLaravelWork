<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes = Demande::with('OffreID','StagiaireID')->get()->toArray();
        return( $demandes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $demandes = new Demande([
         
            'OffreID' => $request->input('OffreID'),
            'StagiaireID' => $request->input('StagiaireID'),
            ]);
            $demandes->save();
            return response()->json('demande créée !');
    
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $demandes = Demande::find($id);
        return response()->json($demandes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $demandes = Demande::find($id);
        $demandes->update($request->all());
        return response()->json('demande MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $demandes = Demande::find($id);
        $demandes->delete();
        return response()->json('demande supprimée !');
    }
}
