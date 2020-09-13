<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{
    // Table Name
    protected $table = 'program_category';
    // Primary Key
    public $primaryKey = 'id';

    public function programs(){
        return $this->hasMany(Programs::class,'category_id','id');
    }
}
