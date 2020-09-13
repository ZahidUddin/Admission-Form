<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    // Table Name
    protected $table = 'comments';

    public $timestamps = false;
    // Primary Key
    public $primaryKey = 'id';

    protected $fillable = [
        'survey',
        
    ];

}
