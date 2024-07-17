@extends('template')
@section('content')
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="judul">

        <button type="submit">save</button>
    </form>
@endsection
