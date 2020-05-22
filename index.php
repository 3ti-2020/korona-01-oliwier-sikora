
<html>

<head>
    <meta charset="utf-8">
    <title>Moja strona</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="header item">

                <img class="logo" src="logo.png" alt="ghiblilogo">
                

        </div>

        <div class="leftsidebar item">

            
            <ul>
                <li><a class="link" href='miyazaki.php'>Hayao Miyazaki (link)</a></li>
                <li><a class="link" href='takahata.php'>Isao Takahata (link)</a></li>
                <li><a class="link" href='#'>Toshio Suzuki</a></li>
                <li><a class="link" href="#">Goro Miyazaki</a></li>
                <li><a class="link" href="#">Joe Hisaishi</a></li>
                <li><a class="link" href="#">Yoshifumi Kondō</a></li>
                <li><a class="link" href="#">Hiroyuki Morita</a></li>
                <li><a class="link" href="#">Tomomi Mochizuki</a></li>
                <li><a class="link" href="#">Hiromasa Yonebayashi</a></li>
                <li><a class="link" href="#">Katsuya Kondō </a></li>
                <li><a class="link" href="#">Trochę historii...</a></li>
                <li><a class="link" href="#">Kluczowe nagrody</a></li>
            </ul>

        </div>

        <div class="main item">

            <img class="chihiro" src="sen.png" alt="sen">

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sikora";

            $conn = new mysqli($servername, $username, $password, $dbname);


            $result1 = $conn->query("SELECT * FROM ghibli order by data_premiery");

            
            echo("<table class='tabelka' border=1>");
            echo("<tr>
            <th>tytuł</th>
            <th>reżyser</th>
            <th>premiera</th>
            </tr>");

            while($row=$result1->fetch_assoc() ){
                echo("<tr>");
                echo("<td>".$row['tytul']."</td>");
                echo("<td>".$row['rezyser']."</td>");
                echo("<td>".$row['data_premiery']."</td>");
                echo("</tr>");
            }
            echo("</table>");

            

        ?>

           <img class="faceless" src="faceless.png" alt="">

        </div>

        <div class="footer item">
            <h3>Motyw</h3>
            <div class="ciemny"></div>
            <div class="jasny"></div>
            <div class="base"></div>
            <a href="http://www.ghibli.jp/">http://www.ghibli.jp/</a>
            <a href="https://en.wikipedia.org/wiki/Studio_Ghibli">https://en.wikipedia.org/wiki/Studio_Ghibli</a>
            <a href="https://myanimelist.net/anime/producer/21/Studio_Ghibli">https://myanimelist.net/anime/producer/21/Studio_Ghibli</a>
            <h4>Oliwier Sikora</h4>
        </div>



    </div>
    <script src="script.js"></script>
</body>
</html>