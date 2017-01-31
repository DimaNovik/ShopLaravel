@extends('layout/main')

@section('content')
        <p>
            {{$good->name}}
        </p>
        <p>
            {{$good->description}}
        </p>
        <p>
            {{$good->price}}
        </p>
        <form action="order/{{$good->id}}">

            <input type="submit" value="Заказать" class="btn btn-success" />
        </form>
        <p>
            <a href="#">Назад</a>
        </p>
@endsection