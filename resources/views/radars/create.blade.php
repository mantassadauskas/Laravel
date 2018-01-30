<style>
    input {
        width: 500px;
        height: 50px;
        font-size: 24px;
        margin: 15px;
        text-align: center;
    }
</style>

<div style="width: 500px;">
    <form method="post" action="/radar">
        {{--action="{{ route('radars.store') }}"--}}
        {{--method="post">--}}
        {{ csrf_field() }}

        <input type="date" name="date" placeholder="Iveskite data">
        <input type="string" name="number" placeholder="Iveskite numeri">
        <input type="number" name="time" placeholder="Iveskite laika">
        <input type="number" name="distance" placeholder="Iveskite atstuma">
        <input type="submit" value="Pridėti">
    </form>


    <div class="alert">
        <ul>

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

</div>