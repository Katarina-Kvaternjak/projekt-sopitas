<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Naslov</title>
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
            <article>
                <?php
                if (isset($_POST['naslov'],$_POST['kategorija'],$_POST['sazetak'],$_POST['sadrzaj'],$_POST['slika'])){
                    $slika=$_POST['slika'];
                    $sadrzaj=$_POST['sadrzaj'];
                    $naslov=$_POST['naslov'];
                    echo"
                        <img src='$slika'>
                        <h1>$naslov</h1>
                        <p>$sadrzaj</p>
                    ";
                };
                ?>
            </article>
        </div>
        <footer>
            <p>Katarina Kvaternjak | katarina.kvaternjak@tvz.hr | 2021</p>
        </footer>
    </body>
</html>