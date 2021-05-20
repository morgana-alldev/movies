<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    use HasFactory;

    protected $table = 'artists';

    protected $primaryKey = 'id';
    
    protected $fillable = ['name', 'title'];

    public function movies(){
        return $this->belongsToMany(Movies::class);
    }
}
