<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class chi_tiet_hoa_dons extends Model
{
    
     protected $table ="chi_tiet_hoa_dons";
     

    public function hoa_dons(){
    	return $this->belongsTo('App\hoa_dons','id_hoa_don','id');
    }
    
    
}
