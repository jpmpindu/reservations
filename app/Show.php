<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
   	    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'title',
        'description',
        'poster_url',
        'location_id',
        'bookable',
        'price',
    ];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shows';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    
    /**
     * Get the main location of the show
     */
    public function location()
    {
        return $this->belongsTo('App\Location');
    }

}
