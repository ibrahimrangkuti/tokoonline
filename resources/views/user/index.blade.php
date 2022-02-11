@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('profile') }}" method="POST">
            @csrf
            <div class="form-input mt-3">
                <label for="name">Nama : </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="form-input mt-3">
                <label for="email">Email : </label>
                <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
            </div>
            <div class="form-input mt-3">
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{ Auth::user()->alamat }}</textarea>
            </div>
            <div class="form-input mt-3">
                <label for="nohp">No. HP : </label>
                <input type="number" class="form-control" name="nohp" id="nohp" value="{{ Auth::user()->nohp }}">
            </div>
            <button type="submit" class="btn btn-success mt-3 float-end">Simpan</button>
        </form>
    </div>
</div>
@endsection
