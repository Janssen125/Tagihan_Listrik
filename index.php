<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .kotak_form{

width: 570px;;

background: rgb(214, 203, 141);

/*meletakkan form ke tengah*/

margin: 80px auto;

padding: 40px 20px;

}
    </style>
</head>

<body>
    <div class="kotak_form">
    <header>
        <h3>Login</h3>
    </header>

    <form action="prosestambah.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Username: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>

			<p>
                <label for="password">Password: </label>
                <input type="password" name="password" placeholder="password" />
            </p>

        
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>
    </div>
    </body>
</html>