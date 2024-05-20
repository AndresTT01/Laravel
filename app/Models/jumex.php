<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jumex extends Model
{
    
    protected $fillable = ['Nombre', 'Precio', 'Categoria'];
    public $timestamps = false;
    use HasFactory;

    public function sabores()
    {
        return $this->belongsToMany(sabor::class);
    }
}
