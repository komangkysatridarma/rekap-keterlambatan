@extends('layouts.main')

@section('container')

<form method="post" action="{{ route('students.update', $student['id']) }}">
    @method('patch')
    @csrf
    <div class="mb-6">
      <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nis</label>
      <input type="text" id="nis" name="nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nis') is-invalid @enderror" value="{{ old('nis', $student->nis) }}" required autofocus>

      @error('nis')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
      <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror" value="{{ old('name', $student->name) }}" required autofocus>

      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-4">
        <label for="rombel_id" class="block text-gray-700 text-sm font-bold mb-2">Rombel:</label>
        <select name="rombel_id" id="rombel_id" class="w-full border rounded-md p-2">
          <option selected disabled>Rombel</option>
            @foreach($rombels as $rombel)
                <option value="{{ $rombel->id }}">{{ $rombel->rombel }}</option>
            @endforeach
        </select>
    </div>

   <div class="mb-4">
    <label for="rayon_id" class="block text-gray-700 text-sm font-bold mb-2">Rayon:</label>
    <select name="rayon_id" id="rayon_id" class="w-full border rounded-md p-2">
      <option selected disabled>Rayon</option>
        @foreach($rayons as $rayon)
            <option value="{{ $rayon->id }}">{{ $rayon->rayon }}</option>
        @endforeach
    </select>
</div>

    <button type="submit" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>
@endsection