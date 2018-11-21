<?php

namespace IntelGUA\MedicalAssistant\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicines';

    protected $id = 'id';

    protected $fillable = [
        'description',
        'observation'
    ];

    public function record_medicines()
    {
        return $this->hasMany(MedicineRecord::class);
    }
}
