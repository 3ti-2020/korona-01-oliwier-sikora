
<html>
<head>
    
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    
        <div class="main">
            <?php
                $servername = "sql7.freemysqlhosting.net";
                $username = "sql7341557";
                $password = "i74cYNe8u5";
                $dbname = "sql7341557";

                $conn = new mysqli($servername, $username, $password, $dbname);


                $result1 = $conn->query("SELECT * FROM pracownicy");

                
                echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>imie</th>
                <th>zarobki</th>
                </tr>");

                while($row=$result1->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['imie']."</td>");
                    echo("<td>".$row['zarobki']."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                $result2 = $conn->query("SELECT * FROM filmy");

                
                echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>rezyser</th>
                <th>film</th>
                </tr>");

                while($row=$result2->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['rezyser']."</td>");
                    echo("<td>".$row['film']."</td>");
                    echo("</tr>");
                }
                echo("</table>");
                

            ?>


        </div>
        
    
</body>
</html>