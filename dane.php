
<html>
<head>
    
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    
        <div class="main">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sikora";

                $conn = new mysqli($servername, $username, $password, $dbname);


                $result1 = $conn->query("SELECT * FROM pracownicy");

                
                echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>imie</th>
                <th>nazwisko</th>
                <th>zarobki</th>
                </tr>");

                while($row=$result1->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['imie']."</td>");
                    echo("<td>".$row['nazwisko']."</td>");
                    echo("<td>".$row['zarobki']."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                $result2 = $conn->query("SELECT * FROM ghibli");

                
                echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>rezyser</th>
                <th>tytul</th>
                <th>data_premiery</th>
                </tr>");

                while($row=$result2->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['rezyser']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    echo("<td>".$row['data_premiery']."</td>");
                    echo("</tr>");
                }
                echo("</table>"); 
                

            ?>


        </div>
        
    
</body>
</html>