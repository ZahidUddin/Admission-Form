<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    // Table Name
    protected $table = 'programs';
    // Primary Key
    public $primaryKey = 'id';


    public function category(){ 
        return $this->hasOne(ProgramCategory::class,'id','category_id');
    }
    
}
