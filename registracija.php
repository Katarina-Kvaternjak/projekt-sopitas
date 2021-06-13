<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Registracija</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Početna</a></li>
                    <li class="drop">
                        Kategorija
                        <ul class="dropdown">
                            <li><a href="kategorija.php?kategorija=zabava">Zabava</a></li>
                            <li><a href="kategorija.php?kategorija=tehnologija">Tehnologija</a></li>
                            <li><a href="kategorija.php?kategorija=sport">Sport</a></li>
                            <li><a href="kategorija.php?kategorija=politika">Politika</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php">Administracija</a></li>
                    <li><a href="unos.html">Unos</a></li>
                </ul>
            </nav>
        </header>
        <div id="wrap">
            <form name="reg" id="reg" action="registracija.php" method="post">
                <label for="ime">Ime</label><br>
                <input type="text" name="ime" id="ime" autofocus><br>
                <label for="prezime">Prezime</label><br>
                <input type="text" name="prezime" id="prezime"><br>
                <label for="user">Korisničko ime:</label><br>
                <input type="text" name="user" id="user"><br>
                <label for="pass">Lozinka</label><br>
                <input type="password" name="pass" id="pass"><br>
                <label for="pass1">Potvrdite lozinku</label><br>
                <input type="password" name="pass1" id="pass1"><br>
                <input type="submit" value="Registriraj se">
            </form>
            <?php
    include 'connect.php';
        if (isset($_POST['ime'],$_POST['prezime'],$_POST['user'],$_POST['pass'])){
            $ime=$_POST['ime'];
            $prezime=$_POST['prezime'];
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $pass_protect=password_hash($pass, CRYPT_BLOWFISH);
            $lvl=0;
    
            $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
            $stmt = mysqli_stmt_init($dbc);
            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, 's', $user);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
            };
            if(mysqli_stmt_num_rows($stmt) > 0){
                echo"Korisničko ime već postoji!";
            }else{
                $sql = "INSERT INTO korisnik (ime, prezime,korisnicko_ime, lozinka, razina)VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($dbc);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, 'ssssi', $ime, $prezime, $user, $pass_protect, $lvl);
                    mysqli_stmt_execute($stmt);
                };
            };
        };

?>
        </div>
        <footer>
            <p>Katarina Kvaternjak | katarina.kvaternjak@tvz.hr | 2021</p>
        </footer>
    </body>
</html>
<script>
    $(function() {
        $("form[name='reg']").validate({

            rules: {
                ime: {
                    required: true,
                },
                prezime: {
                    required: true,
                },
                user: {
                    required: true,
                    minlength:5,
                },
                pass: {
                    required: true,
                    minlength:5,
                },
                pass1: {
                    equalTo: "#pass",
                }
            },

            messages: {
                ime: {
                    required:"Morate unjeti ime",
                },
                prezime:{
                    required: "Morate unjeti prezime",
                },
                user:{
                    minlength: "Korisničko ime mora imati minimalno 5 znakova",
                },
                pass:{
                    required:"Morate postaviti lozinku",
                    minlength:"Lozinka mora imati bar 5 znakova",
                },
                pass1:{
                    equalTo: "Lozinke se ne podudaraju",
                },
            },

                submitHandler: function(form) {
                    form.submit();
            },
        });
    });
    </script>
