<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CountryModel extends Model
{
    protected $table = 'country';
    protected $guarded = [];
    protected $primaryKey = 'id';

    use HasFactory;
}
