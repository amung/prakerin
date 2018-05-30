@extends('layouts.app')

@section('title')
    Halaman Create
@endsection

@section('content')
    <h1>Halaman Create Post</h1>
    
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('post.store') }}" method="POST">
        {{ csrf_field() }}
        Title:<br>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        <br><br>
        Body:<br>
        <textarea name="body" id="" cols="30" rows="10">{{ old('title') }}</textarea>
        <br><br>
        <input type="submit" value="Post">
    </form>
@endsection