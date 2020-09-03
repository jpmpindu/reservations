<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['firstname', 'lastname'];
    protected $table = 'artists';
    public $timestamps = false;
    
    /**
     * The types that belong to the artist.
     */
    public function types()
    {
        return $this->belongsToMany('App\Type', 'artist_types');
    }

    // public function herb_forms() {
    //     //DD herb_has_forms c'est le nom de la table pivot
    //     return $this->belongsToMany(HerbForm::class, 'herb_has_forms')->withTimestamps();
    // }
    
    public function artist_types()
    {
        return $this->hasMany('App\ArtistType'::class);
    }


}
