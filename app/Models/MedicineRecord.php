<?php

namespace IntelGUA\MedicalAssistant\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineRecord extends Model
{
    protected $table = 'medicine_records';

    protected $id = 'id';

    protected $fillable = [
        'record_id',
        'medicine_id',
        'suggested'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }

    public function record()
    {
        return $this->belongsTo(Record::class);
    }

}
