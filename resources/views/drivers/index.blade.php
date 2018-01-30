@if (Auth::check())
<div>Registruotas vartotojas: {{ Auth::user ()->name}}</div>
@endif
<table>
    <tr>
        <td>ID</td>
        <td>{{__('Name')}}</td>
        <td>{{trans ('radars.city')}}</td>
    </tr>

    @foreach($drivers as $driver)
        <tr>
            <td>{{ $driver->driverid }}</td>
            <td>{{ $driver->name }}</td>
            <td>{{ $driver->city }}</td>
            <td><a href="/driver/{{  $driver->driverid }}/edit">Atnaujinti</a></td>
            {{--<td><a href="/radar/{{  $radar->id }}/delete">Pasalinti</a></td>--}}

        </tr>
    @endforeach
    {{--<a href="/radar/create">Sukurti nauja</a>--}}
</table>