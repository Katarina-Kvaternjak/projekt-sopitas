<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    <?php
        echo"<title>".$_GET['kategorija']."</title>";
    ?>
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
            <section>
                <?php
                    $kategorija=$_GET['kategorija'];
                    $query = "SELECT * FROM clanak WHERE arhiva=1 AND kategorija='$kategorija'";
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