<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'id_membre', 'titre', 'description', 'ville', 'departement', 'url_img1', 'url_img2', 'url_img3', 'prix',
    ];

    public function user() {
        $this->hasOne(User::class, 'id_membre');
    }
}
