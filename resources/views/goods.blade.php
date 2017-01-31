@extends('layout/main')

@section('content')
    @foreach($goods as $good)
        <p>
            <a href="goods/{{$good->id}}">
            {{$good->name}}
            </a>
        </p>
    @endforeach
@endsection