@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>
    
    @if (!empty($results))
        <div class="space-y-4">
            @foreach ($results as $result)
                <div class="bg-white shadow p-4 rounded">
                    <h2 class="text-lg font-bold">Diagnosa: {{ $result['diagnosis']->name }}</h2>
                    <p><strong>Penjelasan:</strong> {{ $result['diagnosis']->description }}</p>
                    <p><strong>Solusi:</strong> {{ $result['diagnosis']->solution }}</p>
                    <p><strong>Nilai Keyakinan:</strong> {{ $result['confidence'] }}%</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-red-500">Tidak ditemukan diagnosa yang sesuai dengan gejala yang dipilih.</p>
    @endif

    <a href="{{ route('diagnosis.index') }}" class="mt-4 inline-block px-4 py-2 bg-gray-500 text-white rounded">Kembali</a>
</div>
@endsection