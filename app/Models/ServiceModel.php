<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    protected $table = 'service';
    protected $guarded = [];
    protected $primaryKey = 'id';
    use HasFactory;
}
