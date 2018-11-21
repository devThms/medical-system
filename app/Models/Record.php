<?php

namespace IntelGUA\MedicalAssistant\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';

    protected $id = 'id';

    protected $fillable = [
        'patient_id',
        'typeblood_id',
        'weight',
        'observation'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function typeblood()
    {
        return $this->belongsTo(TypeBlood::class);
    }

    public function medicine_records()
    {
        return $this->hasMany(MedicineRecord::class);
    }

}
