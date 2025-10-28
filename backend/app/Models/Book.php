<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'author_id', 'publisher_id'];
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
    
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}