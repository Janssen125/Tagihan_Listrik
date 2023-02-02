<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        .kotak_form {
            width: 30em;
            background: rgb(255,255,255,0.3);
            padding: 5em 2em;
            text-align:left;
            margin-top:8em;
            /* color:white; */
            z-index:3;
            position:relative;
            border-radius:2em;
        }
        h1{
            text-align:center;
        }
        input[type=submit]{
            padding:1em 2em;
            width:50%;
        }
        table{
            width:100%;
        }
        input{
            border-radius:1em;
            border:0;
            padding:1em;
            width:90%;
            background-color:rgb(255,255,255,0.6);
        }
        td{
            padding-bottom:1em;
        }
        img{
            filter:brightness(50%);
            background-repeat:no-repeat;
            background-size:cover;
            z-index:0;
            position:absolute;
            width:100%;
            height:100%;
            margin-top:-8em;
        }
        body{
            padding:0;
            margin:0;
        }
        .link{
            text-align:center;
            padding:0 10em;
        }
    </style>
</head>

<body>
    <img src="assets/image/background.png" alt="Background">
    <center>
    <div class="kotak_form">
        <header>
            <h1>Login</h1>
        </header>
        <form action="proseslogin.php" method="POST">
            <fieldset>
            <table>
                <tr>
                    <td>
                        <b>
                        Nama Lengkap
                        </b>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="nama" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                        Password
                        </b>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="password" name="password" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan=3>
                        <center>
                            <input type="submit" name="submit">
                        </center>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
        <span class="link">Belum Ada Akun? <a href="register/">Register</a><span>
    </div>
    </center>
</body>

</html>