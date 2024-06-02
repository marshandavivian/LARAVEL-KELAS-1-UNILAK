@extends('layouts.master')

@section('title')
    Halaman Detail Cast
@endsection

@section('content')

<h1>{{$cast->nama}}</h1>
<h1>{{$cast->umur}}</h1>
<p>{{$cast->bio}}</p>

<a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>

@endsection