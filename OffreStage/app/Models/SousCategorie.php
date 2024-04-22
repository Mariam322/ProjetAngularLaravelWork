<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomscategorie','categorieID'
        ];
        public function categories()
        {
        return $this->belongsTo(Categorie::class,"categorieID");
        }
        public function offre()
{
return $this->hasMany(Offre::class,"souscategorieID");
}

}
