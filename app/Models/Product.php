<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable =['image','title','description','price'];

    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
