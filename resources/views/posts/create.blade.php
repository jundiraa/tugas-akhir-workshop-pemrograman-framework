@extends('layout/aplikasi')

@section('konten')
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="md:flex md:items-center mb-6">
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" required>
    </div>
  </div>

  <div class="md:flex md:items-center mb-6">
    <div class="mb-3" style="width: 100%;">
      <text for="body" class="form-label">Isi Berita</label>
      <textarea name="body" id="body" class="form-control" rows="10" style="width: 100%;" placeholder="Tulis isi berita di sini..." required></textarea>
    </div>
  </div>

  <div class="md:flex md:items-center">
    <div class="mb-3">
      <button class="btn btn-primary" type="submit">Create</button>
      <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
  </div>
</form>
@endsection
