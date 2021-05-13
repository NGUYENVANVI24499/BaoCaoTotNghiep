<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class san_phams extends Model
{
    protected $table = "san_phams";
    public function Admin(){
    	return $this->belongsTo('App\Admin','id_admin','id');
    }
}
