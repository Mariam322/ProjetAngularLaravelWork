<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
       'titre','DateDebut','DateFin','Description','type','lieux','etat','recruteurID','souscategorieID'
        ];
        public function offre()
{
    return $this->belongsToMany(Offre::class);
}
public function recruteur()
{
return $this->belongsTo(Recruteur::class,"recruteurID");
}
public function souscategories()
{
return $this->belongsTo(SousCategorie::class,"souscategorieID");
}
}
