<?php
    include 'connect.php';
    if(isset($_POST['delete'])){
        $id=$_POST['id'];
        $query = "DELETE FROM clanak WHERE id='$id' ";
        $result = mysqli_query($dbc, $query) or die('Error querying databese.');;
    };

    if(isset($_POST['update'])){
        $naslov=$_POST['naslov'];
        $kategorija=$_POST['kategorija'];
        $sazetak=$_POST['sazetak'];
        $sadrzaj=$_POST['sadrzaj'];
        $slika = $_FILES['slika']['name'];
        $datum=date('d.m.Y.'); //01.01.2022.
        if(isset($_POST['prikazi'])){
            //ako je arhiva 1 vijest se prikazuje
            $arhiva=1;
        }else{
            $arhiva=0;
        };
        $target_dir = 'img/'.$slika;
        move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);

        $id=$_POST['id'];
        $query = "UPDATE clanak SET naslov='$naslov', kategorija='$kategorija', sazetak='$sazetak', sadrzaj='$sadrzaj', slika='$slika', arhiva='$arhiva', datum='$datum' WHERE id='$id'";
        $result = mysqli_query($dbc, $query) or die('Error querying databese.');
        mysqli_close($dbc);
    };
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Administracija</title>
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
    <?php
    include 'connect.php';
    $query = "SELECT * FROM clanak";
    $result = mysqli_query($dbc, $query);
    while($row = mysqli_fetch_array($result)) {
        echo '
            <form action="administracija.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="'.$row['id'].'">
                <label for="naslov">Naslov</label><br>
                <input type="text" name="naslov" id="naslov" value="'.$row['naslov'].'"><br>
                <label for="kategorija">Kategorija</label><br>
                <select name="kategorija" id="kategorija" value="'.$row['kategorija'].'">
                    <option value="zabava">Zabava</option>
                    <option value="sport">Sport</option>
                    <option value="politika">Politika</option>
                    <option value="tehnologija">Tehnologija</option>
                </select><br>                
                <label for="sazetak">Sažetak</label><br>
                <textarea name="sazetak" id="sazetak">'.$row['sazetak'].'</textarea><br>
                <label for="sadrzaj">Sadržaj</label><br>
                <textarea name="sadrzaj" id="sadrzaj">'.$row['sadrzaj'].'</textarea><br>
                <label for="slika">Slika</label><br>
                <input type="file" name="slika" id="slika" value="'.$row['slika'].'"><br>
                <img src="img/'.$row['slika'] .'" class="img-adm"><br>
                ';
                if($row['arhiva']==1){
                    echo'
                   <label for="prikazi">Prikaži vijest</label><br>
                   <input type="checkbox" id="prikazi" name="prikazi" checked>
                    
                    ';
                }else{
                    echo'
                    <label for="prikazi">Prikaži vijest</label><br>
                    <input type="checkbox" id="prikazi" name="prikazi">
                    ';
                };

        echo'
        <button type="reset" value="ponisti">Poništi</button>
        <button type="submit" name="update" value="Prihvati">Izmjeni</button>
        <button type="submit" name="delete" value="Izbriši">Izbriši</button>
        </form>
        ';
    };
?>
        <footer>
            <p>KATARINA KVATERNJAK | katarina.kvaternjak@tvz.hr | 2021</p>
        </footer>
    </body>
</html>