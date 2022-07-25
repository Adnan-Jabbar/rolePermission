<?php

namespace App\Models;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function permisson()
    {
        return $this->belongsToMany(Permission::class, 'rols_permissions');
    }

    public function users()
    {
        $this->belongsToMany(User::class, 'users_roles');
    }
    
}
