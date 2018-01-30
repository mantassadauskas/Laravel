<table>
    <tr>
        <td>{{trans ('radars.date')}}</td>
        <td>{{trans('radars.number')}}</td>
        <td>{{__('Speed') }}</td>
    </tr>

    @foreach($radars as $radar)
    <tr>
        <td>{{ $radar->date }}</td>
        <td>{{ $radar->number }}</td>
        <td>{{ round(($radar->distance / $radar->time), ['metrics'->km/h],1) }}</td>
        <td><a href="/radar/{{  $radar->id }}/edit">Atnaujinti</a></td>
        <td><a href="/radar/{{  $radar->id }}/delete">Pasalinti</a></td>

    </tr>        
    @endforeach
    <a href="/radar/create">Sukurti nauja</a>
</table>