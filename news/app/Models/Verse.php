<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Verse;
class Verse extends Model
{
    use HasFactory;
    protected $table="verses";
}
