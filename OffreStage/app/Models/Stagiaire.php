<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        
       
   'nom','prenom','email','password','telephone','cv'
    ];
    public function stagiaires()
{
    return $this->belongsToMany(Stagiaire::class);
}
}
