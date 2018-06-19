@extends('main')
@section('content')

<form method="post" action="{{route('createBids')}}">
   {{csrf_field()}}
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="number" name="price" placeholder="price">
    <select name="id_event">
        @foreach($events as $event)
            <option value="{{$event->id}}">
                {{$event->caption}}
            </option>
            @endforeach
    </select>
    <button type="submit">
Buy
    </button>
</form>

    @endsection