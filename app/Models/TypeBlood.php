<?php

namespace IntelGUA\MedicalAssistant\Models;

use Illuminate\Database\Eloquent\Model;

class TypeBlood extends Model
{
    protected $table = 'type_bloods';

    protected $id = 'id';

    protected $fillable = [
        'description'
    ];

    public function record()
    {
        return $this->hasOne(Record::class);
    }
}
