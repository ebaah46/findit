<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name','description'
    ];
    /*
     * Category and Service relationship definition
     */

    public function service(){
        return $this->belongsTo('App\Service');
    }
}
