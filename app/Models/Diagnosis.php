<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'solution'];
    protected $table ='diagnosa';

    /**
     * Relasi ke tabel rules.
     */
    public function aturan()
    {
        return $this->hasMany(Aturan::class);
    }
}