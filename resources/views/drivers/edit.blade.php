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

    <form action="/driver/{{ $driver->driverid }}/update" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="driverid" value="{{ $driver->driverid }}">
        <input type="string" name="name" value="{{ $driver->name }}">
        <input type="string" name="city" value="{{ $driver->city }}">

        <input type="submit" value="Atnaujinti">
    </form>
</div>