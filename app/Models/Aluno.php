<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $table      = 'alunos';
    protected $primaryKey = 'id';

    protected $fillable = [
        "id",
        "nome",
        "email",
        "sexo",
        "idade",
        "altura",
        "peso",
        "tmb",
        "status"
    ];
}
