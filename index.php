<!DOCTYPE html>
<html>

<head>
    <?php
    include 'pages/vfLogin.php';
    ?><!-- Include the login check script -->

    <script>
        window.loginGlobal = <?= $isLoggedIn ? 'true' : 'false' ?>;
    </script>

    <?php
    include 'pages/logout.php';
    ?>


    <link href="https://fonts.googleapis.com/css?family=Schoolbell&v1" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="css/stiluri.css" title="Foaie de stiluri">
    <title>Intreaba chatu</title>
    <link rel="icon" type="image/svg+xml" href="images/openai.svg">
    <meta property="og:url"                content="https://andrei90.ro/index.php" />
    <meta property="og:type"               content="GPT_wrapper" />
    <meta property="og:title"              content="GPT_inatorul" />
    <meta property="og:description"        content="Let me ask chatGPT for that" />
    <meta property="og:image"              content="images/preview.png" />
    <script type="text/javascript" src="js/index.js"></script> 
    <script type="text/javascript" src="js/md5.js"></script> 

</head>

<body>
    <div class="header">
        <div class="utilizator" id="utilizator">
            <span id="numeUtilizator"> 
                <?php
                    echo $_SESSION['username'];
                ?>
            </span>
            <span id="karma">  
                <img src="images/sus.png" width="12px" height="12px" alt="sus">
                <?php
                    echo $_SESSION['karma'];
                ?>
                <img src="images/jos.png" width="12px" height="12px" alt="sus">
            </span>


            <br>
            <div class="imaginesilogin">
                <div class="imagineUser">
                    <?php
                        echo "<img src=\"https://robohash.org/" . urlencode($_SESSION['username']) . ".png\" width=\"120px\" height=\"120px\" alt=\"avatar\" id=\"profilePIC\">";
                    ?>
                    </div>
                <div class="login_log-out">
                    <form action="" method ="post">
                        <button type=submit name="logout" style="color: red; background-color: rgb(199, 251, 255);" id="butonLogout">log-out</button>
                    </form>
                    <form action="pages/profile.php">
                        <button style="color: blue; background-color: rgb(199, 251, 255);" id="butonLogin">login</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="hamburger" style="float:right;" onclick="toggleLogin()">
            <img src="images/burger-bar.png" width="50px" height="50px" alt="burger_menu">
        </div>

        <h1 class="titlul">GPT_inatorul</h1>

        <div class="linkuri_header">
            <div class="link_header">
                <a href="index.php"> Acasa</a>
            </div>
            <div class="link_header">
                <a href="pages/hallOfFame.php">Hall of Fame</a>
            </div>
            <div class="link_header">
                <a href="pages/profile.php"> Profilul meu</a>
            </div>
        </div>

        <div id="br_header"  style="display: none; " class="br_header">
            <button class="link_header"  style="color: blue; background-color: rgb(199, 251, 255);" id="butonLogin1">login</button>
            <button class="link_header" style="color: red; background-color: rgb(199, 251, 255);" id="butonLogout1">log-out</button>
        </div>


    </div>


    <br>

    <div class="content">
        <form action="index.php" method="get" class="formular">
            <label id="aboveText" for="prompt_text" class="intro_prompt">Introduceti un mesaj:</label>
                <textarea name="prompt_ts" class="prompt" id="arieText">Prompt</textarea>
            <br>
            <label for="selectie" class="intro_selectie">Selecteaza un model:</label>
            <select class="selectie" name="selectie" id="selectie">
                <option value="gpt3">GPT-3</option>
                <option value="chatGPT">chatGPT</option>
                <option value="Claude AI">Claude AI</option>
                <option value="Mistral AI">Mistral AI</option>
                <option value="Deepseek CCP">Deepseek CCP</option>
            </select>
            <div class="butoane">
                <button class="Q" id="Q">Intreaba</button>
                <button class="A" id="A">rapsuns</button>
            </div>
            <br>
            <div class="copiere">
                <textarea class="linkuletz" disabled id="copyLink">https://link</textarea>
                <button class="copie_text" id="copie_text" onclick="generareLink()" type="button">Copie text</button>
            </div>
        </form> 
        <p class="wink"> Lasa-ma sa intreb chatu` pentru tine</p>

    </div>

    


    <div class="footer">
        <div class="linkuri_header">
            <div class="link_footer">
                <a href="pages/contact.php"> Contact</a>
            </div>
            <div class="link_footer">
                <a href="pages/contribuie.php"> Sponsorizeaza</a>
            </div>
            <div class="link_footer">
                <a href="pages/lorem_ipsum.php"> Termene si Condtii</a>
            </div> 
            <div class="link_footer">
                <a href="pages/site_map.php"> Harta Site-ului</a>
            </div> 
        </div>       
        <div class="drepturi">
            <p>Copyright&#169; 
            <?php
                $year = date("Y");
                echo $year;
            ?>
            </p>
        </div>

    </div>
</body>

</html>