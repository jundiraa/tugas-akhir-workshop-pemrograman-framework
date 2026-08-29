@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary"><< Kembali</a>
        <h1>{{ $post->title }}</h1>
        <p>by {{ $post->author->name }}</p>
        <p style="white-space: pre-line;">{{ $post->body }}</p>
    </div>
@endsection
