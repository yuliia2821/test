@extends ('main')
@section('content')
    <br>
    user name {{$maxBids->name}} <br> <br>
    events without bids:
    @foreach($withoutBids as $event)
       - {{$event->caption}}<br>
    @endforeach
    <br> <br>
    events with bids count >3:
    @foreach($bidsCount3 as $event)
        {{$event->caption}}<br>
    @endforeach
    <br> <br>
    events with bids count max: {{$maxBidEvent->caption}}




@endsection