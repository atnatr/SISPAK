<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aturan;
use App\Models\Diagnosis;

class DiagnosaController extends Controller
{
    public function index()
    {
        $title = 'Sistem Diagnosa Kesulitan Belajar';
        $rules = Aturan::all();
        return view('index', compact('rules', 'title'));
    }

    public function diagnosa(Request $request)
    {
        $title = 'Hasil Diagnosa';
        $input = $request->input('symptoms', []);
        $diagnoses = Diagnosis::with('aturan')->get();

        $results = []; // Untuk menyimpan hasil diagnosa dengan nilai keyakinan

        foreach ($diagnoses as $diagnosis) {
            $total_bobot = $diagnosis->aturan->sum('bobot'); // Total bobot aturan
            $matched_bobot = $diagnosis->aturan->whereIn('symptom', $input)->sum('bobot'); // Bobot gejala yang cocok
            
            if ($total_bobot > 0) {
                $confidence = ($matched_bobot / $total_bobot) * 100; // Persentase keyakinan
                $results[] = [
                    'diagnosis' => $diagnosis,
                    'confidence' => round($confidence, 2), // Nilai keyakinan dalam %
                ];
            }
        }

        // Urutkan hasil berdasarkan nilai keyakinan tertinggi
        usort($results, fn($a, $b) => $b['confidence'] <=> $a['confidence']);

        return view('hasil', compact('results', 'input', 'title'));
    }

}