<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medida extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $table      = 'medidas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'aluno_id',
        'braco_esquerdo_relaxado',
        'braco_direito_relaxado',
        'braco_esquerdo_contraido',
        'braco_direito_contraido',
        'coxa_medial_esquerda',
        'coxa_medial_direita',
        'panturrilha_esquerda',
        'panturrilha_direita',
        'abdomen',
        'cintura',
        'ombro',
        'torax',
        'quadril',
        'peso'
    ];

    protected $appends = [

        'created_at_f'

    ];


    public function getCreatedAtFAttribute(){
        return Carbon::parse($this->getAttributes()['created_at'])->format('d/m/Y H:i:s');
    }
}
