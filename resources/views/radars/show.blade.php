<table>
    <tr>
        <td>Data</td>
        <td>Numeris</td>
        <td>Greitis</td>
    </tr>

        <tr>
            <td>{{ $radar->date }}</td>
            <td>{{ $radar->number }}</td>
            <td>{{ $radar->distance / $radar->time }}</td>
{{--            <td><a href="{{ Route::get('radars.edit', ['radar' => $radar->id]) }}">Atnaujinti</a></td>--}}
        </tr>
</table>