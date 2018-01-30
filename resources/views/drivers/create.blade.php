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
    <form method="post" action="/driver">

        {{ csrf_field() }}

        <input type="string" name="name" placeholder="Iveskite varda">
        <input type="string" name="city" placeholder="Iveskite miesta">
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