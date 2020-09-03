<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['type'];
    protected $table = 'types';
    public $timestamps = false;
    
    /**
     * The artists that are defined by the type.
     */
    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }

    public function artist_type()
    {
        return $this->hasMany('App\ArtistType'::class);
    }


}
