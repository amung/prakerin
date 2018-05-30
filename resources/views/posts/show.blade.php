@extends('layouts.app')

@section('title')
    {{ $posts->title }}
@endsection

@section('content')
    <h2>{{ $posts->title }}</h2>
    <br><br><br>
    <p>{!! $posts->body !!}</p>
    <br>
    <form action="{{ route('post.destroy', $posts->id) }}" method="POST">
        {{ csrf_field() }}
        <a href="{{ route('post.edit', $posts->id) }}">Edit </a>|
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete">
    </form>

@endsection