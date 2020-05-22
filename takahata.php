<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="miyazakiphp.css">
    </head>
    <body>
        <div class="container">
            <div class="main item">

               <p>Isao Takahata, od wielu lat przyjaciel Hayao Miyazakiego, jest jednym z ważniejszych ludzi w studiu Ghibli. 
                  Ukończył najbardziej prestiżową uczelnię w Japonii, Uniwersytet Tokijski i wstąpił do nowo utworzonego studia animacji Toei Doga w 1959 roku. 
                  Właśnie tam poznał i zaprzyjaźnił się z Miyazakim. Obaj byli na początku animatorami. Pierwszy film Isao nosił tytuł: "Horus, książę Słońca" nakręcony został w 1968 roku i wciąż jest zaliczany do wielkich dzieł animatografii japońskiej. 
                  Kiedy Tokuma zaproponowała Miyazakiemu ekranizację jego "Nauzyki z Doliny Wiatru", Hayao zgodził się jedynie pod warunkiem, że producentem będzie Takahata. 
                  Isao był również producentem "Laputy". Po powstaniu studia Ghibli, wyreżyserował przejmujący "Grobowiec świetlików", który uznany został za wybitne dzieło antywojenne, ale przede wszystkim za wstrząsający obraz cierpienia niewinnych istot, jakimi są dzieci, których szczęśliwe i pełne marzeń życie zostaje nagle zniszczone przez koszmar wojennej rzeczywistości. 
                  Po tym filmie Takahata wyreżyserował również "Wojnę Tanuki" a także "Moich sąsiadów, państwa Yamada". W wywiadzie z 1992 Takahata stwierdził, że wysoko ceni francuską sztukę filmową, m.in. twórcę animacji Paula Grimault, którego twórczość miała wpływ na jego decyzję o rozpoczęciu pracy przy filmach animowanych; ceni także Fredericka Backa i Jurija Norsztejna. 
                  W 2015 został oficerem francuskiego Orderu Sztuki i Literatury.</p>
           
                  <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sikora";

            $conn = new mysqli($servername, $username, $password, $dbname);


            $result1 = $conn->query("SELECT * FROM ghibli where rezyser='Isao_Takahata' order by data_premiery");

            echo("<h3>Filmografia</h3>");
            echo("<table class='tabelka'>");
            echo("<tr class='trtab'>
            <th class='thtab'>tytuł</th>
            <th class='thtab'>premiera</th>
            </tr>");

            while($row=$result1->fetch_assoc() ){
                echo("<tr class='trtab'>");
                echo("<td class='tdtab'>".$row['tytul']."</td>");
                echo("<td class='tdtab'>".$row['data_premiery']."</td>");
                echo("</tr>");
            }
            echo("</table>");

            

        ?>

                </div>
    
            <div class="side item">
                <img src="takahata.jpg" alt="takahata">
                <h1>Isao Takahata</h1>
                <h2>Kluczowe nagrody</h2>
                <table>
                    <tr>
                        <th>Nagroda</th>
                        <th>Rok</th>
                    </tr>
                    <tr>
                        <td>Błękitna wstęga(Grave of the Fireflies)</td>
                        <td>1989</td>
                    </tr>
                    <tr>
                        <td>Nagroda JAF(Pom Poko)</td>
                        <td>1995</td>
                    </tr>
                    
                    <tr>
                        <td>Leopard of Honor</td>
                        <td>2009</td>
                    </tr>
                    
                    <tr>
                        <td>IOMA(The Tale of Princess Kaguya)</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <td>Liczne japońskie nagrody</td>
                        <td>---</td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>