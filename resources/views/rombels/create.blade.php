@extends('layouts.main')

@section('container')

<form method="post" action="{{ route('rombels.store') }}">
    @csrf
    <div class="mb-6">
      <label for="rombel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">rombel</label>
      <input type="text" id="rombel" name="rombel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('rombel') is-invalid @enderror" value="{{ old('rombel') }}" required autofocus>

    @error('rombel')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create</button>
@endsection