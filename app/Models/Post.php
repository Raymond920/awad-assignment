<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    // protected $table = 'posts';

    // Specify which columns can be mass-assigned
    protected $fillable = ['img_file', 'title', 'content', 'author_name', 'user_id'];

    // Define relationships if necessary
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public $timestamps = false;
}
