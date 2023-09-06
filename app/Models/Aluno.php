<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $appends = [

        'updated_at_f'

    ];


    public function getUpdatedAtFAttribute(){
        return Carbon::parse($this->getAttributes()['updated_at'])->format('d/m/Y H:i:s');
    }
}
