<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class hoa_dons extends Model
{
    
     protected $table ="hoa_dons";
     

    public function chi_tiet_hoa_dons(){
    	return $this->hasMany('App\chi_tiet_hoa_dons','id_hoa_don','id');
    }
}
