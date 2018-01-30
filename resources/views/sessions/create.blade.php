<h1>Registracija</h1>

<div style="width: 500px;">

    <form method="post" action="/register" >
        {{ csrf_field() }}


        <input type="string" name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="password" name="password_confirmation" placeholder="password_confirmation" required>

        <input type="submit" value="Registruotis">
    </form>


    <div class="alert">
        <ul>

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>


</div>