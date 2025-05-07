<!DOCTYPE html>
<html>
    <head>
        <?php include 'vfLogin.php'; ?> <!-- Include the login check script -->

        <script>
            window.loginGlobal = 
            <?= isset($_SESSION['loggedin']) ? 'true' : 'false' ?>;
        </script>

        <link rel="stylesheet" type="text/css" href="../css/stiluri.css" title="Foaie de stiluri"> 
        <link rel="stylesheet" type="text/css" href="../css/stiluri_contact.css" title="Foaie de stiluri"> 
        <title><?php echo isset($titluPagina) ? $titluPagina : 'headerFile'; ?></title>
        <link rel="icon" type="image/svg+xml" href="../images/openai.svg">

        <meta property="og:url" content="https://andrei90.ro/index.php" />
        <meta property="og:type" content="GPT_wrapper" />
        <meta property="og:title" content="GPT_inatorul" />
        <meta property="og:description" content="Let me ask chatGPT for that" />
        <meta property="og:image" content="../images/preview.png" />

        <script type="text/javascript" src="../js/md5.js"></script>
        <script type="text/javascript" src="../js/index.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="utilizator" id="utilizator">
                <span id="numeUtilizator"> 
                    <?php echo $_SESSION['username']; ?>
                </span>
                <span id="karma">  
                    <img src="../images/sus.png" width="12px" height="12px" alt="sus">
                    <?php echo $_SESSION['karma']; ?>
                    <img src="../images/jos.png" width="12px" height="12px" alt="jos">
                </span>

                <br>
                <div class="imaginesilogin">
                    <div class="imagineUser">
                        <?php
                            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['username']))
                                echo "<img src=\"https://robohash.org/" . urlencode($_SESSION['username']) . ".png\" width=\"120px\" height=\"120px\" alt=\"avatar\" id=\"profilePIC\">";
                            else
                                echo "<img src=\"../images/user.png\" width=\"120px\" height=\"120px\" alt=\"avatar\" id=\"profilePIC\">";
                        ?>
                    </div>
                    <div class="login_log-out">
                        <form action="logout.php" method="post">
                            <button type="submit" name="logout" style="color: red; background-color: rgb(199, 251, 255);" id="butonLogout">log-out</button>
                        </form>
                        <form action="profile.php">
                            <button style="color: blue; background-color: rgb(199, 251, 255);" id="butonLogin">login</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="hamburger" style="float:right;" onclick="toggleLogin()">
                <img src="../images/burger-bar.png" width="50px" height="50px" alt="burger_menu">
            </div>

            <h1 class="titlul">
                <?php echo isset($titluPagina) ? $titluPagina : 'headerFile'; ?>
            </h1>

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

            <div id="br_header" style="display: none;" class="br_header">
                <button class="link_header" style="color: blue; background-color: rgb(199, 251, 255);" id="butonLogin1">login</button>
                <button class="link_header" style="color: red; background-color: rgb(199, 251, 255);" id="butonLogout1">log-out</button>
            </div>
        </div>
    </body>
</html>
