<?php
session_start();
$_SESSION['active_nav'] = 'main';
include 'header.php';
?>
    <div class="container">
        <div class="hero-unit">
             <img src="img/network.png" alt="network" width="100px"
                 style="float:left; margin-right:20px"/>
            <h1>Witaj!</h1>
            <p>Exoweb oferuje projektowanie stron oraz aplikacji 
                internetowych. 
            </p>
           
           
        </div>
    </div>
    <div class="container">
        <div class="margin-left-20">
            <div class="block1">
                <h2>Technologie responsywne</h2>
                <p>
                    Exoweb wykorzystuje najnowsze technologie oraz testuje swoje 
                    produkty na różnych systemach i wyświetlaczach i przeglądarkach.
                </p>
                <!--img src="img/Responsive-Design-Multi-Device-480.jpg" 
                     alt="Responsive-Design-Multi-Device" style="max-width:240px;" /-->
            </div>
            <div class="block1">
                <h2>Optymalne rozwiązania</h2>
                <p> 
                    <!--img src="img/loadspeed-small.jpg" alt="technologie-responsywne" style="padding:5px; float:right" -->
                    Szybkość wczytywania witryny jest jednym z decydujących 
                    czynników wpływających na pozycję strony w wyszukiwarkach  
                    oraz ogólne wrażenia odwiedzającego. Co więcej to właśnie 
                    pierwsze sekundy bardzo często decydują, czy internauta 
                    pozostanie na stronie.
                </p>
            </div>
            <div class="block1">
                <h2>Pełna pomoc techniczna</h2>
                <p>W cenę wykonania strony wliczona jest pomoc w wyborze 
                 domeny, serwera oraz instalacja strony na serwerze.</p>
                <p>Każdy produkt otrzymuje gwarancję. <a href="#">zobacz więcej</a></p>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container">
        <hr>
        <p>
            © Exoweb 2014
            <!--<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fexoweb.pl%2Ftest%2F" target="_blank">
                <img src="img/w3c-valid.jpg" alt="w3c-valid" style="vertical-align:middle; margin-left:30px;"/>
            </a>-->
        </p>
    </div>
</body>
</html>

