<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'category_name',
        'img_path'
    ];

    public $timestamps = false;

    public function light()
    {
        return $this->hasMany(Light::class);
    }
}
