@extends('layouts.main')

@section('container')

<form method="post" action="{{ route('lates.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label for="student_id" class="block text-gray-700 text-sm font-bold mb-2">Students:</label>
        <select name="student_id" id="student_id" class="w-full border rounded-md p-2">
          <option selected disabled>Siswa</option>
            @foreach($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-6">
      <label for="date_time_late" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
      <input type="datetime-local" id="date_time_late" name="date_time_late" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('date_time_late') is-invalid @enderror" value="{{ old('date_time_late') }}" required autofocus>

    @error('date_time_late')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-6">
      <label for="information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">information</label>
      <input type="text" id="information" name="information" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('information') is-invalid @enderror" value="{{ old('information') }}" required autofocus>

    @error('information')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-6">
      <label for="bukti" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">bukti</label>
      <input type="file" id="bukti" name="bukti" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('bukti') is-invalid @enderror" value="{{ old('bukti') }}" required autofocus>

    @error('bukti')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <!-- Tambahkan ini di dalam form create -->


    <button type="submit" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create</button>
@endsection