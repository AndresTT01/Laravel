<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sabor extends Model
{
    protected $fillable = ['Sabores'];
    public $timestamps = false;
    use HasFactory;

    public function jumexes()
    {
        return $this->belongsToMany(jumex::class);
    }

}