<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\web;

class web extends Model
{
    
	protected $table="news";
    protected $primaryKey = 'id';
    use HasFactory;
}
