@extends('layout/aplikasi')

@section('konten')
<form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="mb-3">
    <h1>Judul: {{ $post->title }}</h1>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" name="slug" id="slug" value="{{ $post->slug }}">
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
  <div class="mb-3" style="width: 100%;">
    <label for="body" class="form-label">Isi Berita</label>
    <textarea class="form-control" name="body" id="body" rows="10" style="width: 100%;">{{ $post->body }}</textarea>
  </div>
</div>

  <div class="md:flex md:items-center">
    <div class="mb-3">
      <button class="btn btn-primary" type="submit">Edit</button>
      <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</form>
@endsection
