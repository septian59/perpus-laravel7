@extends('frontend.templates.default')

@section('content')
<h2>Koleksi Buku</h2>
<blockquote>
    <p class="flow-text">Koleksi Buku yang bisa kamu Baca dan Pinjam !</p>
</blockquote> 
<div class="row">
       @foreach ($books as $book)
       @include('frontend.templates.components.card-book', ['book' => $book])
       @endforeach
        
    </div>
    {{-- pagination --}}
    {{ $books->links('vendor.pagination.materialize') }}

    
@endsection