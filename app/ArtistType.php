<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistType extends Model
{
        protected $fillable = [
        'artist_id', 'type_id',
    ];

    protected $table = 'artist_types';
    public $timestamps = false;
    
    /**
     * Get the show of the performance (artist in a type of collaboration for a show)
     */
    public function show()
    {
        return $this->belongsToMany('App\Show');
    }

    /**
     * Get the artist for that association.
     */
    public function artists()
    {
        return $this->belongsTo('App\Artist');
    }
    
    /**
     * Get the type for that association.
     */
    public function types()
    {
        return $this->belongsTo('App\Type');
    }

    


}
