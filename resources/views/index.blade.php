@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Diagnosa Kesulitan Belajar</h1>
    <form action="{{ route('diagnosis.diagnose') }}" method="POST" class="bg-white shadow p-4 rounded">
        @csrf
        <div>
            <h2 class="text-lg font-bold mb-2">Pilih Gejala:</h2>
            @foreach ($rules as $rule)
                <label class="block mb-2">
                    <input type="checkbox" name="symptoms[]" value="{{ $rule->symptom }}" class="mr-2">
                    {{ $rule->symptom }}
                </label>
            @endforeach
        </div>
        <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Diagnosa</button>
    </form>
</div>
@endsection
