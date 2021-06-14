<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    use HasFactory;
    protected $table='diary_user';

    protected $fillable = ['user_id',
                           'diary_id'];
}
