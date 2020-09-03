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
        return $this->belongsToMany('App\Type');
    }
    
    public function artist_types()
    {
        return $this->hasMany('App\ArtistType'::class);
    }


}
