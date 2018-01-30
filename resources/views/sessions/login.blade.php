<h1>Prisijungimas</h1>

<div style="width: 500px;">

    <form method="post" action="/" >
        {{ csrf_field() }}


        <input type="string" name="name" placeholder="name" required>
        <input type="password" name="password" placeholder="password" required>

        <input type="submit" value="Prisijungti">
    </form>


    <div class="alert">
        <ul>

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>


</div>