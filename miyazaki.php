<html>
    <head>
        <link rel="stylesheet" href="miyazakiphp.css">
    </head>
    <body>
        <div class="container">
            <div class="main item">
               <p>Jeden z najsłynniejszych twórców filmów animowanych w Japonii, nazywany "Japońskim Disneyem". Znakomity mangaka, reżyser i animator. Urodził się 5 stycznia 1941 roku w Tokio (Japonia). 
                    Drugi spośród czterech braci - Arity, Yutaki i Shirou. Podczas drugiej wojny światowej rodzina Miyazakich posiadała fabrykę Miyazaki Koukuuki, która między innymi produkowała stery dla słynnych myśliwców Zero.
                    W roku 1947 rozpoczyna naukę w szkole podstawowej w Utsunomiya. W tym samym roku jego matka zapada na gruźlicę. Choroba ciągnie się przez dziewięć lat, aż do 1955 roku.
                    W latach 1953-1955 kończy szkołę podstawową Eifuku i dostaje się do szkoły średniej Omiya. Kończy ją i w latach 1956-1958 rozpoczyna naukę w wyższej szkole średniej Toyotama. 
                    Tam ogląda pierwszy japoński film anime w kolorze - "Pandę i magicznego węża". Postanawia zostać mangaką, mimo iż ma tylko doświadczenie w rysowaniu okrętów i samolotów. 
                    Po ukończeniu tej szkoły dostaje się na studia na Uniwersytecie Gakushuin w Tokio. Studiuje tam ekonomię i politologię, jednocześnie działając w szkolnym klubie rozwoju literatury dziecięcej, który był jemu najbliższy względem pracy nad komiksami. 
                    W roku 1963 roku kończy studia i rozpoczyna trzymiesięczny okres próbny w Toei Animation. Otrzymuje pracę przy projekcie "Wanwan chushingura", a potem w pierwszej wypuszczonej przez Toei serii TV "Okami shônen Ken". 
                    Wkrótce po rozpoczęciu pracy w Toei wybucha protest związków zawodowych, zaś Hayao staje na czele demonstrujących animatorów.
                    W roku 1964 roku zostaje sekretarzem związków w Toei Animation, zaczyna także romansować z Akemi Ôtą (również animatorką w Touei). Pod koniec roku 1965 Isao Takahata (późniejszy bliski współpracownik Miyazakiego) rozpoczyna prace nad "Taiyou no ouji Horusu no daibouken", Hayao dołącza do projektu jako animator i scenograf. 
                    Tego samego roku żeni się z Akemi Ôtą. Następnie małżeństwo Miyazakich bierze udział nad powstaniem filmu "Kot w butach" jako animatorzy. 
                    W roku 1970 Miyazaki opuszcza Toei Animation i przenosi się do studia A Pro, w którym pracuje Isao Takahata. Rok później wyjeżdża do Szwecji z Yutaką Fujioką, aby zapewnić wytwórni prawa do adaptacji znanej powieści Astrid Lindgren "Pippi Pończoszanka", niestety negocjacje kończą się fiaskiem. 
                    W 1973 roku on i Takahata opuszczają A Pro, przenosząc się do Zuiyo Pictures. W tym samym roku wyjeżdża do Szwajcarii, gdzie szuka inspiracji do pracy nad serialem "Heidi". 
                    W 1975 roku podróżuje po Włoszech i w Argentynie, zbierając materiały do prac nad serialem "Haha wo tazunete sanzenri". W 1980 roku zostaje głównym instruktorem nowych animatorów w Telecom. 
                    W roku 1983 pojawia się projekt jednego z najsłynniejszych i najlepszych filmów Miyazakiego - "Nausicaä z Doliny Wiatru". W roku 1985 w Musashino powstaje sławne Studio Ghibli, stworzone przez niego, Isao Takahatę i Toru Harę. Rok później wyjeżdża do Walii, aby szukać inspiracji do filmu "Laputa – podniebny zamek".
                    W następnych latach powstają kolejne znane animacje Miyazakiego: "Mój sąsiad Totoro", "Podniebna poczta Kiki", "Szkarłatny pilot", "Księżniczka Mononoke", "Ruchomy zamek Hauru" i "Ponyo". 
                    Największym hitem kinowym Miyazakiego okazuje się "Spirited Away: W krainie bogów", za którego otrzymuje Złotego Niedźwiedzia na festiwalu w Berlinie</p>
           
                    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sikora";

            $conn = new mysqli($servername, $username, $password, $dbname);


            $result1 = $conn->query("SELECT * FROM ghibli where rezyser='Hayao_Miyazaki' order by data_premiery");

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
                <img src="miyazaki.jpg" alt="miyazaki">
                <h1>Hayao Miyazaki</h1>
                <h2>Kluczowe nagrody</h2>
                <table>
                    <tr>
                        <th>Nagroda</th>
                        <th>Rok</th>
                    </tr>
                    <tr>
                        <td>Złoty niedźwiedź(Spirited Away)</td>
                        <td>2002</td>
                    </tr>
                    <tr>
                        <td>Annie(Spirited Away)</td>
                        <td>2003</td>
                    </tr>
                    <tr>
                        <td>Oscar(Spirited Away)</td>
                        <td>2003</td>
                    </tr>
                    <tr>
                        <td>Złoty lew(całokształt)</td>
                        <td>2005</td>
                    </tr>
                    <tr>
                        <td>Nagroda specjalna MFF(Ponyo)</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <td>Annie(The Wind Rises)</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <td>Oscar honorowy(całokształt)</td>
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