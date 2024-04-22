<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SousCategorie;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scategories = SousCategorie::with('categories')->get();
        return $scategories;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $scategorie = new SousCategorie([
            'nomscategorie' => $request->input('nomscategorie'),
           
            'categorieID' => $request->input('categorieID'),
            ]);
            $scategorie->save();
            return response()->json('S/Categorie créée !');
    
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $scategorie = SousCategorie::find($id);
        return response()->json($scategorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $scategorie = SousCategorie::find($id);
        $scategorie->update($request->all());
        return response()->json('S/Catégorie MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scategorie = SousCategorie::find($id);
$scategorie->delete();
return response()->json('Scategorie supprimée !');
    }

    public function showSCategorieByCAT($idcat)
    {
        // Retrieve subcategories based on the provided category ID
        $subcategories = SousCategorie::where('categorieID', $idcat)->get();

        // Return the response (you can customize this based on your needs)
        return response()->json($subcategories);
    }

}
