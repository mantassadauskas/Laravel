<h1>Hello World</h1>
<table style="border: 3px solid;">
    <tr>
        <td>Data</td>
        <td>Numeris</td>
        <td>Atstumas</td>
    </tr>
    <tr>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="/tasks/{{ $task->id }}">
                        {{ $task->name}}
                    </a>
                </li>
            @endforeach
        </ul>
        {{--<td>{{$name}}</td>--}}
        {{--<td>{{$name}}</td>--}}
        {{--<td>{{$age}}</td>--}}
    </tr>
</table>