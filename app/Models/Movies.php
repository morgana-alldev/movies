<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $primaryKey = 'id';
    
    protected $fillable = ['name', 'status', 'rating', 'description', 'image'];

    public function artists(){
        return $this->belongsToMany(Artists::class);
    }
}
