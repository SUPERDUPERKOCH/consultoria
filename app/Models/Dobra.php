<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'massa_magra',
        'created_at_f'
        
    ];

    public function getCreatedAtFAttribute(){
        return Carbon::parse($this->getAttributes()['created_at'])->format('d/m/Y H:i:s');
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id', 'id');
    }

    public function medida()
    {
        return $this->hasOne(Medida::class, 'aluno_id', 'aluno_id');
    }
    
    
    public function getBodyDensityAttribute()
    {
        $gender = $this->aluno->sexo; 

        if ($gender == 'M') {
            return 1.112 - (0.00043499 * $this->totalSkinfolds()) + (0.00000055 * pow($this->totalSkinfolds(), 2)) - (0.00028826 * $this->aluno->idade);
        } else {
            return 1.097 - (0.000423 * $this->totalSkinfolds()) + (0.00000056 * pow($this->totalSkinfolds(), 2)) - (0.0000016 * $this->aluno->idade);
        }
    }

    public function getMassaMagraAttribute()
    {
        $pesoTotal = $this->medida->peso;
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
