<?php

namespace IntelGUA\MedicalAssistant\Models;

use Illuminate\Database\Eloquent\Model;

class DiseaseRecord extends Model
{
    protected $table = 'disease_records';

    protected $id = 'id';

    protected $fillable = [
        'record_id',
        'disease_id'
    ];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }

    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
