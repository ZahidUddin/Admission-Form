<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academics extends Model
{
    // Table Name
    protected $table = 'academics';

    public $timestamps = false;
    // Primary Key
    public $primaryKey = 'id';

    protected $fillable = [
        'name',
        
    ];
}
