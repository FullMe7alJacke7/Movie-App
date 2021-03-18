@extends('layouts.app')

@section('content')
    <form action="{{ url("tags") }}" method="POST" class="pl-8">
        @csrf
        <label class="text-yellow-600 px-3 text-lg">Tag Name</label>
        <div>
            <input type="text" name="name">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-auto rounded-full">
            Submit
        </button>
    </form>
@endsection
