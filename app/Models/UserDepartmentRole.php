<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDepartmentRole extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_name',
        'role_name',
        'user_id'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
