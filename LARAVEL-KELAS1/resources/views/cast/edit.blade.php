@extends('layouts.master')

@section('title')
    Halaman Edit Cast
@endsection

@section('content')
<form method="POST" action="/cast/{{$cast->id}}">
    {{-- VALIDATION --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- FORM INPUT --}}
    @csrf
    @method("put")
    <div class="form-group">
      <label>Cast Name</label>
      <input type="text" value="{{$cast->nama}}" class="form-control" name="nama">
    </div>
    <div class="form-group">
       <label>Cast Age</label>
       <input type="text" value="{{$cast->umur}}" class="form-control" name="umur">
      </div>
    <div class="form-group">
      <label>Cast Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection