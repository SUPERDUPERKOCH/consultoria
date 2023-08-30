<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table      = 'alimentos';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        "nome_completo", "status"
    ];
}
