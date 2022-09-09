<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Declare Table
    public $table = 'specialist';

    // This Field Must Type Date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Declare Fillable
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function doctor()
    {
        // mereturn sebuah function
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
    }

}
