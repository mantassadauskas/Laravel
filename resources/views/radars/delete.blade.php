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


    <form action="/radar/{{ $radar->id }}/destroy" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $radar->id }}">
        <input type="string" name="date" value="{{ $radar->date }}" readonly="readonly">
        <input type="string" name="number" value="{{ $radar->number }}"readonly="readonly">
        <input type="string" name="time" value="{{ $radar->time }}"readonly="readonly">
        <input type="string" name="distance" value="{{ $radar->distance }}"readonly="readonly">
        <input type="submit" value="Istrinti si irasa">
    </form>
</div>