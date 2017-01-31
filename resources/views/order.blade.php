@extends('layout/main')

@section('content')
    <form action="order">
        <p>
        <input type="text" name="customer_name" class="form-control" />
        </p>
        <p>
            <input type="text" name="phone" class="form-control" />
        </p>
        <p>
            <input type="text" name="city" class="form-control" />
        </p>
        <p>
            <textarea class="form-control">Comment..</textarea>
        </p>
        <p>
            <input type="number" name="amount" />
        </p>
        <input type="hidden" value="{{$goods_id}}" name="product_id" />
        <input type="submit" value="Заказать" class="btn btn-success" />
    </form>
@endsection