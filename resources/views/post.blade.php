@extends('layouts.main')

@section('container')




    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                    {{-- <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->nama }}</a> </p>  --}}
                    {{-- <p> Genre : <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->username}}</a> </P>  --}}
                        {{-- <h5> Akan Tayang Pada <span class="badge bg-warning text-dark">{{ $post->tanggal }}</span></h5>
                        <h5><span class="badge bg-warning text-dark">{{ $post->jam_mulai }} - {{ $post->jam_selesai }}</span></h5> --}}
          
                    @if ($post->image)
                    <div style="max-height: 700px; overflow:hidden">
                        <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->username }}" class="img-fluid">

                    </div>
                    
                    {{-- @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama }}" alt="{{ $post->category->nama }}" class="img-fluid">
                    @endif
                    @if ($post->harga_diskon)
                          <h5>Harga Tiket</h5>
                          <h4><span class="badge bg-secondary text-decoration-line-through">Rp.{{ $post->harga }}</span></h4>
                          <h3><span class="badge bg-success">Rp.{{ $post->harga_diskon }}</span></h3> --}}
                          

                          {{-- @else
                          <h5>Harga Tiket</h5>
                          <h4><span class="badge bg-secondary text-decoration-none">Rp.{{ $post->harga }}</span></h4>

                          @endif      --}}

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                    




                    <a href="/posts" class="d-block mt-3">Kembali Ke Post</a>
            </div>
        </div>
    </div>

    @endif
@endsection