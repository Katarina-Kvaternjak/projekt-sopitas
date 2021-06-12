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
                </ul>
            </nav>
        </header>
        <div id="wrap">
            <article class="clanak">
                <?php
                    include 'connect.php';
                    $a=$_GET['id'];
                    $query = "SELECT * FROM clanak WHERE id='$a'";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)) {
                        echo"
                        <img src='img/".$row['slika']."'>
                        <h1>".$row['naslov']."</h1>
                        <p class='datum'>".$row['datum']."</p>
                        <p>".$row['sazetak']."</p>
                        <p>".$row['sadrzaj']."</p>
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