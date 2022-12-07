<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Light extends Model
{
    use HasFactory;

    protected $table = 'lights';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        'product_description',
        'category_id',
        'file_path'
    ];

    public $timestamps = false;


    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
