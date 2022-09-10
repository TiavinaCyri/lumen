<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable= [
        'state_name',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey='id';
    protected $table='states';
    public $timestamps=true;

    public function devices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Device');
    }
}
