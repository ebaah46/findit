<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Service extends Model
{


    protected $fillable = [
        'name',
        'location',
        'type',
        'user_id',
        'category_id',
        'price',
        'phone',
        'experience',
        'no_of_clients',
        'business_name',
        'tin_no',
        'email',
        'address',
        'website',
        'business_description',
        'service_availability',
        'service_description',
        'picture',
        'social_media'
    ];

    public function name(){
        return $this->name;
    }
    /*
     * User and Service relationship definition
    */
    public function user(){
        return $this->belongsTo('App\User');
    }
    /*
     *
     * Service and Category relationship definition
    */
    public function category(){
        return $this->hasOne('App\Category');
    }
}
