<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres=Offre::with('recruteur')->get();
        return $offres;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offre = new Offre([
            'titre' => $request->input('nomcategorie'),
            'DateDebut' => $request->input('DateDebut'),
            'DateFin' => $request->input('DateFin'),
            'Description' => $request->input('Description'),
            'type' => $request->input('type'),
            'lieux' => $request->input('lieux'),
            'etat' => $request->input('etat'),
            'recruteurID' => $request->input('recruteurID'),
            'souscategorieID' => $request->input('souscategorieID'),
            ]);
            $offre->save();
            return response()->json($offre, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $offre = Offre::find($id);
        return response()->json($offre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $offre = Offre::find($id);
        $offre->update($request->all());
        return response()->json('Offre MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offre = Offre::find($id);
        $offre->delete();
        return response()->json('offre supprimée !');
    }
    public function showoffrebysscategorie($idscat)
    {
        // Retrieve subcategories based on the provided category ID
        $offres = Offre::where('souscategorieID', $idscat)->get();

        // Return the response (you can customize this based on your needs)
        return response()->json($offres);
    }
}
