<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_name',
        'user_id'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
