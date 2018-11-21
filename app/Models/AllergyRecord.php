<?php

namespace IntelGUA\MedicalAssistant\Models;

use Illuminate\Database\Eloquent\Model;

class AllergyRecord extends Model
{
    protected $table = 'allergy_records';

    protected $id = 'id';

    protected $fillable = [
        'record_id',
        'allergy_id'
    ];

    public function allergy()
    {
        return $this->belongsTo(Allergy::class);
    }

    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
