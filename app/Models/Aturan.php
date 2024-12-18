<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;

    protected $fillable = ['diagnosis_id', 'symptom'];
    protected $table = 'aturan';

    /**
     * Relasi ke tabel diagnosis.
     */
    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class);
    }
}