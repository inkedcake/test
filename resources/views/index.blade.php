
<html>

<head>
    <title>test</title>
</head>

<body>
<form name="carrier" action="{{ action('\App\Http\Controllers\CarriersController@find') }}" method="post">
    @csrf
    Current Address: <input name="zip_from" placeholder="116" value="">, Destination: <input name="zip_to" placeholder="145" value="">&nbsp;&nbsp;&nbsp;
    <input name="go" type="submit" value=">>">
</form>
</body>
<hr>
use for demo:<br>
current address:123-0874,&nbsp;destination:175-0084<br>
or<br>
current address:144-0055,&nbsp;destination:124-0021<hr>
<style type="text/css">
    td{
        border: 1px dotted;
        padding:5px;
    }
    #map{
        width:100%;
        height:300px;
    }

</style>
@if(!empty($availableCarriers))
    <div>
        Moving Distance: 16,4 km [ <a href="{{$googleMap}}" target="_blank">view on map</a> ]
    </div>
<table>
    <tr>
        <td>id</td>
        <td>Carrier Name</td>
        <td>Carrier Phone #</td>
    </tr>
    @foreach($availableCarriers as $carrier)
    <tr>
        <td>{{ $carrier->id }}</td>
        <td>{{ $carrier->name }}</td>
        <td>{{ $carrier->phone }}</td>
    </tr>
    @endforeach
</table>
@endif
</html>
