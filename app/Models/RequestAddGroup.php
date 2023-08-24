<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAddGroup extends Model
{
    use HasFactory;
    protected $table = 'request_add_groups';

    public $fillable = [
        'user_id',
        'grupo_id',
        'status'
    ];
}
