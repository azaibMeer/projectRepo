<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use Illuminate\Database\Eloquent\SoftDeletes;
class News extends Model
{
    use HasFactory, SoftDeletes;
	protected $table="news";
	 protected $primaryKey = 'news_id';
    use HasFactory;
}
