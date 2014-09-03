<?php
session_start();
$_SESSION['active_nav'] = 'main';
include 'header.php';
?>
    <div class="container">
        <div class="hero-unit">
            <h1>Witaj!</h1>
        </div>
    </div>
    <div class="container">
        <div class="margin-left-20">
            <div class="block1">
                <h2>Najnowsze technologie</h2>
                <p>Projektowanie witryn na najnowsze urządzenia. 
                </p>
                <p>
                    <img src="img/Responsive-Design-Multi-Device-Example.jpg" />
                </p>
            </div>
            <div class="block1">
                <h2>Optymalne rozwiązania</h2>
                <p> 
                    <img src="img/loadspeed-small.jpg" style="float:left; padding:2px;"/>
                    Szybkość wczytywania witryny jest jednym z decydujących 
                    czynników wpływających na pozycję strony w wyszukiwarkach oraz 
                    ogolne wrażenia odwiedzającego.
                    
                </p>
            </div>
            <div class="block1">
                <h2>Pełna pomoc techniczna</h2>
                <p>W cenę wykonania strony wliczona jest pomoc w wyborze 
                 domeny, serwera oraz instalacja strony na serwerze.</p>
                <p>Każda strona otrzymuje 6 miesięcy opieki technicznej.
                <a href="#">zamów stronę</a></p>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <p>© Exoweb 2014</p>
    </div>

</body>
</html>


<?php

