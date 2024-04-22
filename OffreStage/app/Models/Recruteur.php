<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    use HasFactory;
    protected $fillable = [
        
       
        'nom','prenom','email','password'
         ];
         public function offre()
{
return $this->hasMany(Offre::class ,"OffreID");
}
     }
