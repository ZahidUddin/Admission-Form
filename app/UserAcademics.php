<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAcademics extends Model
{
    // Table Name
    protected $table = 'user_academics';
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
