<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aturan;

class AturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aturan::insert([
            ['diagnosis_id' => 1, 'symptom' => 'Tulisan tangan sulit dibaca'],
            ['diagnosis_id' => 1, 'symptom' => 'Kesalahan ejaan berulang'],
            ['diagnosis_id' => 1, 'symptom' => 'Tulisan tidak konsisten dalam ukuran atau spasi'],
            ['diagnosis_id' => 1, 'symptom' => 'Sulit menyalin tulisan dari papan atau buku'],
            ['diagnosis_id' => 1, 'symptom' => 'Kesulitan dengan struktur kalimat dalam tulisan'],
            ['diagnosis_id' => 1, 'symptom' => 'Kesulitan menulis dengan cepat'],
            ['diagnosis_id' => 1, 'symptom' => 'Kesulitan dalam menyusun ide secara tertulis'],
            ['diagnosis_id' => 1, 'symptom' => 'Kesulitan menulis huruf atau angka secara teratur'],
            ['diagnosis_id' => 1, 'symptom' => 'Sering menulis huruf atau angka terbalik'],
        ]);

        // Gejala untuk Disleksia
        Aturan::insert([
            ['diagnosis_id' => 2, 'symptom' => 'Kesulitan membaca dengan lancar'],
            ['diagnosis_id' => 2, 'symptom' => 'Membaca huruf atau angka terbalik'],
            ['diagnosis_id' => 2, 'symptom' => 'Sulit memahami teks yang dibaca'],
            ['diagnosis_id' => 2, 'symptom' => 'Kesulitan dengan pengucapan kata-kata yang panjang'],
            ['diagnosis_id' => 2, 'symptom' => 'Membaca dengan lambat'],
            ['diagnosis_id' => 2, 'symptom' => 'Sulit membedakan huruf mirip (b/d, p/q)'],
            ['diagnosis_id' => 2, 'symptom' => 'Kesulitan mengikuti urutan cerita atau teks'],
            ['diagnosis_id' => 2, 'symptom' => 'Terlalu lama dalam memahami instruksi tertulis'],
            ['diagnosis_id' => 2, 'symptom' => 'Mudah merasa bingung atau frustrasi saat membaca'],
            ['diagnosis_id' => 2, 'symptom' => 'Sulit mengingat kata-kata baru yang telah dibaca'],
        ]);

        // Gejala untuk Diskalkulia
        Aturan::insert([
            ['diagnosis_id' => 3, 'symptom' => 'Kesulitan memahami operasi dasar matematika'],
            ['diagnosis_id' => 3, 'symptom' => 'Sulit menghafal fakta matematika'],
            ['diagnosis_id' => 3, 'symptom' => 'Kebingungan dengan simbol angka'],
            ['diagnosis_id' => 3, 'symptom' => 'Kesulitan memahami konsep waktu (jam, menit, detik)'],
            ['diagnosis_id' => 3, 'symptom' => 'Kesulitan dalam menghitung angka dalam urutan'],
            ['diagnosis_id' => 3, 'symptom' => 'Kesulitan dalam memahami konsep pengukuran (panjang, berat, volume)'],
            ['diagnosis_id' => 3, 'symptom' => 'Kesulitan dengan pembagian dan perkalian'],
            ['diagnosis_id' => 3, 'symptom' => 'Kesulitan dalam mengingat urutan langkah dalam operasi matematika'],
            ['diagnosis_id' => 3, 'symptom' => 'Terlalu lama dalam menyelesaikan soal matematika sederhana'],
            ['diagnosis_id' => 3, 'symptom' => 'Mudah bingung dengan angka negatif atau pecahan'],
        ]);
    }
}
