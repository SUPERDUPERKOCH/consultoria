<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dobra extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $table      = 'dobras';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'aluno_id',
        'subescapular',
        'tricipital',
        'peitoral',
        'axilar_media',
        'abdominal',
        'coxa',
        'supra_iliaca',
    ];

    protected $appends=[

        'body_density',
        'body_fat_percentage',
        'massa_magra'
        
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id', 'id');
    }
    
    public function getBodyDensityAttribute()
    {
        $gender = $this->aluno->sexo; // Aqui assumo que o campo se chama 'genero'

        if ($gender == 'M') {
            return 1.112 - (0.00043499 * $this->totalSkinfolds()) + (0.00000055 * pow($this->totalSkinfolds(), 2)) - (0.00028826 * $this->aluno->idade);
        } else {
            return 1.097 - (0.000423 * $this->totalSkinfolds()) + (0.00000056 * pow($this->totalSkinfolds(), 2)) - (0.0000016 * $this->aluno->idade);
        }
    }

    public function getMassaMagraAttribute()
    {
        $pesoTotal = $this->aluno->peso;
        $massaGordura = $pesoTotal * ($this->body_fat_percentage / 100);
        return $pesoTotal - $massaGordura;
    }   

    public function getBodyFatPercentageAttribute()
    {
        return (495 / $this->body_density) - 450;
    }

    private function totalSkinfolds()
    {
        return $this->subescapular + $this->tricipital + $this->peitoral + $this->axilar_media + $this->abdominal + $this->coxa + $this->supra_iliaca;
    }
}
