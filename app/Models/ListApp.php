<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListApp extends Model
{
    use HasFactory;

    protected $table = "list_app";
    protected $guarded = [];
}
