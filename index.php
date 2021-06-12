<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Fejk Njuz</title>
    </head>
    <body>
    <?php
        include 'connect.php';
    ?>
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
            <section class="zabava">
                <h1 class="title">Zabava</h1>
                <?php
                    $query = "SELECT * FROM clanak WHERE arhiva=1 AND kategorija='zabava' ORDER BY datum DESC LIMIT 3";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)) {
                    echo "
                        <article>
                            <img class='slika' src='img/".$row['slika']."'>
                            <h1 class='naslov'><a href='clanak.php?id=".$row['id']."'>".$row['naslov']."</a></h1>
                            <p class='datum'>".$row['datum']."</p>
                        </article>";
                    }
                ?>
            </section>
            <section class="tehnologija">
                <h1 class="title">Tehnologija</h1>
                <?php
                    $query = "SELECT * FROM clanak WHERE arhiva=1 AND kategorija='tehnologija' ORDER BY datum DESC LIMIT 3";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)) {
                    echo "
                        <article>
                            <img class='slika' src='img/".$row['slika']."'>
                            <h1 class='naslov'><a href='clanak.php?id=".$row['id']."'>".$row['naslov']."</a></h1>
                            <p class='datum'>".$row['datum']."</p>
                        </article>";
                    }
                ?>
            </section>
        </div>
        <footer>
            <p>Katarina Kvaternjak | katarina.kvaternjak@tvz.hr | 2021</p>
        </footer>
    </body>
</html>