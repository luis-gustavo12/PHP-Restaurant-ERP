<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{

    protected $table = 'images';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['user_id', 'item_id', 'category', 'upload_date', 'image', 'description'];

    use HasFactory;
}
