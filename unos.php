<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Unos</title>
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
        <h1>Članak je uspješno unesen u bazu!</h1>
    <?php
        include 'connect.php';

            $naslov=$_POST['naslov'];
            $kategorija=$_POST['kategorija'];
            $sazetak=$_POST['sazetak'];
            $sadrzaj=$_POST['sadrzaj'];
            $slika = $_FILES['slika']['name'];
            $datum=date('Y-m-d'); //01.01.2022.
            if(isset($_POST['prikazi'])){
                //ako je arhiva 1 vijest se prikazuje
                $arhiva=1;
            }else{
                $arhiva=0;
            };
            $target_dir = 'img/'.$slika;
            move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);
            $query = "INSERT INTO clanak (naslov, kategorija, sazetak, sadrzaj, slika, arhiva, datum) VALUES ('$naslov', '$kategorija', '$sazetak', '$sadrzaj', '$slika', '$arhiva', '$datum')";
            $result = mysqli_query($dbc, $query) or die('Error querying databese.');
            mysqli_close($dbc);
    ?>
        </div>
        <footer>
            <p>Katarina Kvaternjak | katarina.kvaternjak@tvz.hr | 2021</p>
        </footer>
    </body>
</html>
