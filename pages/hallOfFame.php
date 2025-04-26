<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/stiluri.css" title="Foaie de stiluri">
    <link rel="stylesheet" type="text/css" href="../css/stiluri_leader.css" title="Foaie de stiluri">
    <title>Leaderbord</title>
    <link rel="icon" type="image/svg+xml" href="../images/openai.svg">
    <meta property="og:url" content="https://andrei90.ro/index.php" />
    <meta property="og:type" content="GPT_wrapper" />
    <meta property="og:title" content="GPT_inatorul" />
    <meta property="og:description" content="Let me ask chatGPT for that" />
    <meta property="og:image" content="../images/preview.png" />
    <script type="text/javascript" src="../js/index.js"></script> 
    <script type="text/javascript" src="../js/variabile.js"></script>
    <script type="text/javascript" src="../js/md5.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>
</head>

<body>
    <div class="header">
        <div class="utilizator" id="utilizator">
            <span id="numeUtilizator"> &lt;user&gt; : </span>
            <span id="karma">  
                <img src="../images/sus.png" width="12px" height="12px" alt="sus">
                14
                <img src="../images/jos.png" width="12px" height="12px" alt="sus">
            </span>


            <br>
            <div class="imaginesilogin">
                <div class="imagineUser">
                    <img src="../images/user.png" width="120px" height="120px" style="float: right;">
                </div>
                <div class="login_log-out">
                    <button style="color: blue; background-color: rgb(199, 251, 255);" id="butonLogin">login</button>
                    <button  style="color: red; background-color: rgb(199, 251, 255);" id="butonLogout">log-out</button>
                </div>
            </div>
        </div>

        <div class="hamburger" style="float:right;" onclick="toggleLogin()">
            <img src="../images/burger-bar.png" width="50px" height="50px" alt="burger_menu">
        </div>

        <h1 class="titlul">Leaderbord</h1>

        <div class="linkuri_header">
            <div class="link_header">
                <a href="../index.php"> Acasa</a>
            </div>
            <div class="link_header">
                <a href="hallOfFame.php">Hall of Fame</a>
            </div>
            <div class="link_header">
                <a href="profile.php"> Profilul meu</a>
            </div>
        </div>

        <div id="br_header"  style="display: none; " class="br_header">
            <button class="link_header"  style="color: blue; background-color: rgb(199, 251, 255);" id="butonLogin1">login</button>
            <button class="link_header" style="color: red; background-color: rgb(199, 251, 255);" id="butonLogout1">log-out</button>
        </div>


    </div>

    <div style="padding: 10px;">
    </div>

    <div class="content">
        <div class="content_leader">
            <h2> Karma pozitiva</h2>

            <div class="pozitii" style="display: flex; align-items: stretch;">
            <?php
                $con = mysqli_connect("localhost", "root", "");
                if ($con) { 
                    mysqli_select_db($con, "bazapai");

                    $rez = mysqli_query($con, "SELECT * FROM userKarma ORDER BY karma DESC LIMIT 3");
                    $numar = 1;
                    while ($inreg = mysqli_fetch_array($rez)) { 
                        echo "<div class=\"pozitie\">";
                        echo "<h3>Locul " . $numar . "</h3>";
                        echo "<div class=\"karmaDisplay\">";
                        echo " " . htmlspecialchars($inreg['username']);
                        echo ": ";
                        echo "<img src=\"../images/sus.png\" width=\"12px\" height=\"12px\" alt=\"sus\">";
                        echo $inreg['karma'];
                        echo "</div>";   // <- închidere corectă
                        echo "<div class=\"avatar\">";
                        echo "<img src=\"https://robohash.org/" . urlencode($inreg['username']) . ".png\" width=\"120px\" height=\"120px\" alt=\"avatar\">";
                        echo "</div>";   // <- închidere corectă
                        echo "</div>"; // închidere pentru clasa "pozitie"
                        $numar++;
                    } 
                } else {
                    echo "<br>Conexiunea NU a fost realizata!!<br>"; 
                }
            ?>

            </div>



            <h2> Karma negativa</h2>

            <div class="pozitii" style="display: flex; align-items: stretch;">
                <?php
                    $con = mysqli_connect("localhost", "root", "");
                    if ($con) { 
                        mysqli_select_db($con, "bazapai");

                        $rez = mysqli_query($con, "SELECT * FROM userKarma ORDER BY karma ASC LIMIT 3");
                        $numar = 1;
                        while ($inreg = mysqli_fetch_array($rez)) { 
                            echo "<div class=\"pozitie\">";
                            echo "<h3>Locul " . $numar . "</h3>";
                            echo "<div class=\"karmaDisplay\">";
                            echo " " . htmlspecialchars($inreg['username']);
                            echo ": ";
                            echo $inreg['karma'];
                            echo "<img src=\"../images/jos.png\" width=\"12px\" height=\"12px\" alt=\"sus\">";
                            echo "</div>";   // <- închidere corectă
                            echo "<div class=\"avatar\">";
                            echo "<img src=\"https://robohash.org/" . urlencode($inreg['username']) . ".png\" width=\"120px\" height=\"120px\" alt=\"avatar\">";
                            echo "</div>";   // <- închidere corectă
                            echo "</div>"; // închidere pentru clasa "pozitie"
                            $numar++;
                        } 
                    } else {
                        echo "<br>Conexiunea NU a fost realizata!!<br>"; 
                    }
                ?>
            </div>
        </div>
        <br>
        <div class="content_leader">
            <div class="tabelul">

                <h2>
                    Top 10 utilizatori
                </h2>



                <table border=2 cellpadding=4>
                    <tr>
                        <td>
                            Nr crt
                        </td>
                        <td>
                            Username
                        </td>
                        <td>
                            Karma
                        </td>
                    </tr>
                    <?php
                        $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                        $rezultatePePagina = 10;
                        $offset = ($pagina - 1) * $rezultatePePagina;

                        $con = mysqli_connect("localhost", "root", "");
                        if ($con) { 
                            mysqli_select_db($con, "bazapai");

                            $rez = mysqli_query($con, "SELECT * FROM userKarma ORDER BY karma DESC LIMIT $rezultatePePagina OFFSET $offset");

                            $numar = 1;
                            while ($inreg = mysqli_fetch_array($rez)) { 
                                echo "<tr>";
                                echo "<td>" . $numar+($pagina-1)*$rezultatePePagina . "</td>";
                                echo "<td>";
                                echo " " . htmlspecialchars($inreg['username']);
                                echo "</td>";
                                echo "<td>";
                                echo $inreg['karma'];
                                echo "</td>";
                                echo "</tr>";
                                $numar++;
                            } 
                        } else {
                            echo "<br>Conexiunea NU a fost realizata!!<br>"; 
                        }
                    ?>
                </table>
                <?php
                    $rez = mysqli_query($con, "SELECT COUNT(*) as total FROM userKarma");
                    $inreg = mysqli_fetch_array($rez);
                    $totalUtilizatori = $inreg['total'];
                    $numarPagini = ceil($totalUtilizatori / $rezultatePePagina);

                    // Make sure pagina is set
                    if (!isset($pagina)) {
                        $pagina = 1;
                    }

                    // Calculate previous and next pages
                    $paginaAnterioara = max(1, $pagina - 1);
                    $paginaUrmatoare = min($numarPagini, $pagina + 1);

                    echo "<div class=\"navigareTabel\">";
                    
                    // Arrow to go to previous page
                    echo "<a href=\"?pagina=$paginaAnterioara\">";
                    echo "<img src=\"../images/sus.png\" width=\"12px\" height=\"12px\" alt=\"previous\" style=\"transform: rotate(-90deg);\">";
                    echo "</a>";

                    // Current page number
                    echo "<b> $pagina </b>";

                    // Arrow to go to next page
                    echo "<a href=\"?pagina=$paginaUrmatoare\">";
                    echo "<img src=\"../images/sus.png\" width=\"12px\" height=\"12px\" alt=\"next\" style=\"transform: rotate(90deg);\">";
                    echo "</a>";

                    echo "</div>";
                ?>

            </div>

        </div>
    </div>

    </div>

    <br>
    <div class="footer">
        <div class="linkuri_header">
            <div class="link_footer">
                <a href="contact.php"> Contact</a>
            </div>
            <div class="link_footer">
                <a href="contribuie.php"> Sponsorizeaza</a>
            </div>
            <div class="link_footer">
                <a href="site_map.php"> Harta Site-ului</a>
            </div>
        </div>
        <div class="drepturi">
            <p>Copyright&#169; AN</p>
        </div>

    </div>
</body>

</html>