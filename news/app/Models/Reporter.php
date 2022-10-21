<?php

namespace App\Models;
use App\Models\Reporter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reporter extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="reporter";
     protected $primaryKey = 'reporter_id';
}
