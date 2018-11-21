<?php

namespace IntelGUA\MedicalAssistant\Models;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    protected $table = 'allergies';

    protected $id = 'id';

    protected $fillable = [
        'description',
        'observation'
    ];

    public function record_allergies()
    {
        return $this->hasMany(AllergyRecord::class);
    }
}
