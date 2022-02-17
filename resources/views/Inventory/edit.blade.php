@extends('layouts.app')

@section('title', 'Post Edit')

@section('content')
<div class="wrapper">
<h1>Edit Post</h1>
@if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif

@if ($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form method="POST" action="{{ url('posts', $Inventory->id ) }}">
    @csrf
    @method('PUT')
    <input name="nama" value="{{ $Inventory->nama }}" type="text" placeholder="nama..."> 
    <input name="harga" value="{{ $Inventory->harga }}" type="text" placeholder="harga...">
    <input name="stok" value="{{ $Inventory->stok }}" type="text" placeholder="stok...">
    <button class="btn-blue">Submit</button>
  </form>
  <br>
  <a href="{{ route('posts.index') }}" class="btn-red" style="width: 100%">Kembali ke Halaman Utama</a>
  </div>
@endsection