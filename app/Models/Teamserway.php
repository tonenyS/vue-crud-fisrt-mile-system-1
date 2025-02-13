<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Teamserway extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'nameSerway'
    ];

    public function building()
    {
        return $this->belongsTo('App\Models\Constarution', 'desingBy_id', 'id');
    }
}