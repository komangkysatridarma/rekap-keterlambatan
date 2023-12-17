@extends('layouts.main')

@section('container')

<form method="post" action="{{ route('rayons.store') }}">
    @csrf
    <div class="mb-6">
      <label for="rayon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">rayon</label>
      <input type="text" id="rayon" name="rayon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('rayon') is-invalid @enderror" value="{{ old('rayon') }}" required autofocus>

      @error('rayon')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    
    <div class="mb-6">
        <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih PS</label>
        <select id="user_id" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected disabled>Pilih PS</option>
            @foreach ($psUsers as $psUser)
                <option value="{{ $psUser->id }}" {{ old('user_id') == $psUser->id ? 'selected' : '' }}>{{ $psUser->name }}</option>
            @endforeach
        </select>
    
        @error('user_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <button type="submit" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create</button>
@endsection