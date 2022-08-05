@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Categories</h1>
  </div>

<div class="col-lg-8">
  {{-- <label for="">{{ $category }}</label> --}}
  <form method="PUT" action="/dashboard/categories/{{ $category->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Category</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama', $category->nama) }}">
      @error('nama')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $category->slug) }}">
        @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      </div>
    
    <button type="submit" class="btn btn-primary">Update Post</button>
  </form>
</div>

<script>
    const nama = document.querySelector('#nama')
    const slug = document.querySelector('#slug')
    nama.addEventListener('change', function() {
      console.log('nama', nama)
      var value = ''
      var str = nama.value
      var res = str.replaceAll(" ", "-")
      slug.value = res
    });
</script>

@endsection