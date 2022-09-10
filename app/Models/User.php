<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_lastname',
        'user_email',
        'user_password',
        'user_actived',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey='id';
    protected $table='users';
    public $timestamps=true;

    public function devices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Device');
    }
}
