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

    <div style="padding: 50px;">
    </div>

    <div class="content">
        <div class="content_leader">
            <h2> Karma pozitiva</h2>

            <div class="pozitii" style="display: flex; align-items: stretch;">
                <div class="pozitie">
                    <h3>
                        Locu 1
                    </h3>
                    <div class="karmaDisplay">
                        &lt;user&gt; :
                        <img src="../images/sus.png" width="12px" height="12px" alt="sus">
                        14
                        <img src="../images/jos.png" width="12px" height="12px" alt="sus">
                    </div>
                    <br>
                    <img src="../images/user.png" width="120px" height="120px">
                </div>

                <div class="pozitie">
                    <h3>
                        Locu 2
                    </h3>
                    <div class="karmaDisplay">
                        &lt;user&gt; :
                        <img src="../images/sus.png" width="12px" height="12px" alt="sus">
                        14
                        <img src="../images/jos.png" width="12px" height="12px" alt="sus">
                    </div>
                    <br>
                    <img src="../images/user.png" width="120px" height="120px">
                </div>


                <div class="pozitie">
                    <h3>
                        Locu 3
                    </h3>
                    <div class="karmaDisplay">
                        &lt;user&gt; :
                        <img src="../images/sus.png" width="12px" height="12px" alt="sus">
                        14
                        <img src="../images/jos.png" width="12px" height="12px" alt="sus">
                    </div>
                    <br>
                    <img src="../images/user.png" width="120px" height="120px">
                </div>
            </div>



            <h2> Karma negativa</h2>

            <div class="pozitii">
                <div class="pozitie">
                    <h3>
                        Locu 1
                    </h3>
                    <div class="karmaDisplay">
                        &lt;user&gt; :
                        <img src="../images/sus.png" width="12px" height="12px" alt="sus">
                        14
                        <img src="../images/jos.png" width="12px" height="12px" alt="sus">
                    </div>
                    <br>
                    <img src="../images/user.png" width="120px" height="120px">
                </div>

                <div class="pozitie">
                    <h3>
                        Locu 2
                    </h3>
                    <div class="karmaDisplay">
                        &lt;user&gt; :
                        <img src="../images/sus.png" width="12px" height="12px" alt="sus">
                        14
                        <img src="../images/jos.png" width="12px" height="12px" alt="sus">
                    </div>
                    <br>
                    <img src="../images/user.png" width="120px" height="120px">
                </div>


                <div class="pozitie">
                    <h3>
                        Locu 3
                    </h3>
                    <div class="karmaDisplay">
                        &lt;user&gt; :
                        <img src="../images/sus.png" width="12px" height="12px" alt="sus">
                        14
                        <img src="../images/jos.png" width="12px" height="12px" alt="sus">
                    </div>
                    <br>
                    <img src="../images/user.png" width="120px" height="120px">
                </div>
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
                    <tr>
                        <td>
                            1.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>

                    <tr>

                        <td>
                            2.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>

                    </tr>
                    <tr>
                        <td>
                            3.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>
                    <tr>
                        <td>
                            10.
                        </td>
                        <td>
                            lorem_ipsum
                        </td>
                        <td>
                            undefined
                        </td>
                    </tr>


                </table>
                <div class="navigareTabel">
                    <img src="../images/sus.png" width="12px" height="12px" alt="sus" style="transform: rotate(90deg);">

                    <b>1 </b>
                    <p> 2 3 ... </p>
                    <img src="../images/sus.png" width="12px" height="12px" alt="sus"
                        style="transform: rotate(-90deg);">

                </div>


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