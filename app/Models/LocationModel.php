<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    protected $table = 'location';
    protected $guarded = [];
    protected $primaryKey = 'id';
    use HasFactory;
}
