@extends ('layout')


@section ('content')

    <h1>Create form</h1>

    <form method="post" action="/posts">
        {{ csrf_field() }}
        <input name="title" type="text">
        <input name="textarea" type="text">
        <button>Press me</button>


    </form>

    <div class="alert">
        <ul>

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>
@endsection