@extends('layouts.app')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Semua Inventory</h1>
  <table style="width:100%">
    <thead>
      <tr>
        <th>id_inventory</th>
        <th>nama</th>
        <th>harga</th>
        <th>stok</th>
        <th>edit</th>
        <th>hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($Inventory as $Inventory)
      <tr>
        <td style="width: 200px" >{{ $Inventory->id}}</td>
        <td style="width: 200px" >{{ $Inventory->nama}}</td>
        <td style="width: 200px" >{{ $Inventory->harga}}</td>
        <td style="width: 200px" >{{ $Inventory->stok}}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('posts.edit', $Inventory->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('posts', $Inventory->id ) }}">
            @csrf
            @method('DELETE')
            <td style="width: 100px"><button class="btn-red">Hapus</button></td>
          </form>
      </tr>
      @endforeach
    </tbody>
  </table>
  <td style="width: 100px"><button class="btn-blue"><a href="{{ route('posts.create', $Inventory->id) }}">Tambah</a></button></td>
</div>
@endsection
