<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diagnosis;

class DiagnosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Diagnosis::insert([
            [
                'name' => 'Disgrafia',
                'description' => 'Kesulitan dalam menulis, termasuk ejaan, tata bahasa, atau komposisi tulisan.',
                'solution' => 'Latihan menulis dengan pendampingan khusus.',
            ],
            [
                'name' => 'Disleksia',
                'description' => 'Kesulitan dalam membaca dan memahami teks.',
                'solution' => 'Latihan membaca intensif dengan bimbingan.',
            ],
            [
                'name' => 'Diskalkulia',
                'description' => 'Kesulitan dalam memahami konsep matematika dan angka.',
                'solution' => 'Pendekatan visual dan latihan matematika dasar.',
            ],
        ]);
    }
}