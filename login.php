<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Login</title>
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
            <form name="login" id="login" action="login.php" method="post">
                <label for="username">Korisničko ime:</label><br>
                <input type="text" name="username" id="username" autofocus><br>
                <label for="pass">Lozinka:</label><br>
                <input type="password" name="pass" id="pass"><br>              
                <input type="submit" value="Login">
            </form>
            <?php
    include 'connect.php';
    if (isset($_POST['username'],$_POST['pass'])){
        $user=$_POST['username'];
        $pass=$_POST['pass']; 
        
        $t=0;
        $query="SELECT korisnicko_ime, lozinka, razina, ime FROM korisnik WHERE korisnicko_ime=?";
        $stmt=mysqli_stmt_init($dbc);  
        if (mysqli_stmt_prepare($stmt,$query)){
            mysqli_stmt_bind_param($stmt,'s',$user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            mysqli_stmt_bind_result($stmt,$a,$b,$c,$d);
            while(mysqli_stmt_fetch($stmt)){       
                if (password_verify($pass, $b)){
                    if($c==1){
                        //1 je admin
                        header("Location:administracija.php");
                    }else if($c==0){
                        echo 'Žao nam je '.$d.', ali nemate administratorska prava';
                    };
               }else {
                    echo"Unjeli ste krivu lozinku!";
               };
            };
            if (mysqli_stmt_num_rows($stmt)==null) echo"<a href='registracija.php'>Registrirajte se!</a>";
        };
    };
?>
        </div>
        <footer>
            <p>Katarina Kvaternjak | katarina.kvaternjak@tvz.hr | 2021</p>
        </footer>
    </body>
</html>
