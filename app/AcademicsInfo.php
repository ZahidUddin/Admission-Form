<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicsInfo extends Model
{
    // Table Name
    protected $table = 'academics_info';
    // Primary Key
    public $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'academic_id',
        'information',
    ];

    public function academic(){ 
        return $this->hasOne(Academics::class,'id','academic_id');
    }
}
