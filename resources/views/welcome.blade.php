@extends('template')
@section('content')
    <a href="{{ route('create') }}">create"></a>
    <a href="{{ route('jurnals') }}">create jurnal</a>
    @foreach ($post as $x)
        <p>title:{{ $x->title }}</p>
        <p>content: {{ $x->content }}</p>
        <img src="{{ asset($x->image) }}" alt="">
    @endforeach
@endsection
