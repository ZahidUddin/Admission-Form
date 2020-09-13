<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfos extends Model
{
    // Table Name
    protected $table = 'user_info';
    // Primary Key
    public $primaryKey = 'id';

    protected $fillable = [
        'dept',
        'student_name',
        'father_name',
        'mother_name',
        'present_address',
        'permanent_address',
        'email',
        'phone',
        'dob',
        'gender',
        'survey',
        'image',
    ];

    public function academics(){
        return $this->hasMany(UserAcademics::class,'user_id','id');
    }

    public function program(){
        return $this->hasOne(Programs::class,'id','dept');
    }

    public function comments(){
        return $this->hasOne(Comments::class,'id','survey');
    }
}
