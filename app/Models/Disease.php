<?php

namespace IntelGUA\MedicalAssistant\Models;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $table = 'diseases';

    protected $id = 'id';

    protected $fillable = [
        'description',
        'observation'
    ];

    public function record_diseases()
    {
        return $this->hasMany(DiseaseRecord::class);
    }
}
