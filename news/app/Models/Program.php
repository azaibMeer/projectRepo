<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Program;
use Illuminate\Database\Eloquent\SoftDeletes;


class Program extends Model
{
    use HasFactory, SoftDeletes;
	protected $table="programs";
    use HasFactory;
}
