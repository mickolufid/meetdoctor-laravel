<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Declare Table
    public $table = 'role';

    // This Field Must Type Date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Declare Fillable
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function role_user()
    {
        // mereturn sebuah function
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\RoleUser', 'role_id');
    }

    public function permission_role()
    {
        // mereturn sebuah function
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }
}
