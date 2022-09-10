<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceAction extends Model
{
    use HasFactory;

    protected $fillable= [
        'datc_name',
        'datc_description',
        'datc_date',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey='id';
    protected $table='device_actions';
    public $timestamps=true;

    public function devices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Device');
    }

}
