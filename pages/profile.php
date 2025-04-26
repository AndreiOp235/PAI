<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="../css/stiluri.css" title="Foaie de stiluri"> 
        <link rel="stylesheet" type="text/css" href="../css/stiluriProfil.css" title="Foaie de stiluri">
        <link rel="icon" type="image/svg+xml" href="../images/openai.svg">
        <title>Profil</title>
        <meta property="og:url"                content="https://andrei90.ro/index.php" />
        <meta property="og:type"               content="GPT_wrapper" />
        <meta property="og:title"              content="GPT_inatorul" />
        <meta property="og:description"        content="Let me ask chatGPT for that" />
        <meta property="og:image"              content="../images/preview.png" />
        <script type="text/javascript" src="../js/variabile.js"></script>
        <script type="text/javascript" src="../js/md5.js"></script>
        <script type="text/javascript" src="../js/profil.js"></script>
    </head>
    <body>
        <div class="header">
    
            <h1 class="titlul">Profil</h1>
    
            <div class="linkuri_header">
                <div class="link_header">
                    <a href="../index.php"> Acasa</a>
                </div>
                <div class="link_header">
                    <a href="../pages/hallOfFame.php">Hall of Fame</a>
                </div>
                <div class="link_header">
                    <a href="../pages/profile.php"> Profilul meu</a>
                </div>
            </div>
    
    
        </div>

        
        <div class="div_profil">
            <div class="nelogat" id="nelogat" style="display: none;">
                <p>Loghează-te pentru a-ți accesa profilul</p>
        
                <form action="/login.php" method="post" >
                    <label for="email">E-mail:</label>
                    <input type="email" id="emailL" name="email" required maxlength="255">
                    <br>
        
                    <label for="password">Parola:</label>
                    <input type="password" id="passwordL" name="password" required minlength="1" maxlength="255">
                    <br>
        
                    <button type="submit">Login</button>
                </form>
                <p id="errorMsgL" style="color: red; display: none;"></p>

            </div>

        </div>
        


        <br>
        <div class="div_profil" >
            <div class="logat" id="logat" style="display: none;">
                <div style="float:center">
                    &lt;user&gt; Karma:
                <img src="../images/sus.png" width="12px" height="12px" alt="sus"> 
                undefined
                <img src="../images/jos.png" width="12px" height="12px" alt="sus">
        
                <br>
                <img src="../images/user.png"  width="120px" height="120px">
                </div>
                
                <form action="update.php method="post" class="formularProfil">
                    <div class="linieFormular">
                        <label> Nume </label>
                        <input type="text" id="nume" name="nume" maxlength="255">
                    </div>
                    
                    <br>
                    <label> Prenume </label>
                    <input type="text" id="prenume" name="prenume" maxlength="255">
                    <br>
                    <label> Nume utilizator </label>
                    <input type="text" id="numeUtilizator" name="numeUtilizator" maxlength="255">
                    <br>
                    <label> E-mail </label>
                    <input type="text" id="email" name="email" maxlength="255">
                    <br>
                    <label> Parola </label>
                    <input type="password" id="password" name="password" required minlength="1" maxlength="255">
                    <br>
                    <label> Confirma parola </label>
                    <input type="password" id="passwordC" name="passwordC" minlength="1" maxlength="255">
                    <br>
                    <label> Model preferat </label>
                    <select id="modelPreferat" name="modelPreferat">
                        <option value="chatGPT">chatGPT</option>
                        <option value="claude">Claude AI</option>
                        <option value="mistral">Mistral AI</option>
                        <option value="deepseek">Deepseek CCP</option>
                    </select>
                    <label> Cheie API model preferat </label>
                    <input type="text" id="cheieAPI" name="cheieAPI" maxlength="255">
                    <br>
        
                    <button style="color: green;">update</button>
                    <button style="color: red;">sterge cont</button>
                    <br>
                    <input type="text" disabled value="my profile">
                    <a href=""> Copie text</a>         
                </form>
                <p id="errorMsg" style="color: red; display: none;"></p>
                <div class="legaleza">
                    <p> Atentie schimbarea valorilor specifice contului va necesita o confirmare pe e-mail</p>
                    <p> Conform politicilor site-ului vom retine adresa de e-mail, karma si numele de utilizator pentru o perioda de maxim 2 ani</p>
                    <p> Pentru a sterge contul va trebui sa confirmi prin e-mail</p>
                    <p> Utilizarea site-ului implica supunerea termenilor si condtiilor site-ului si ale altor entitati 3rd party complet neasociate</p>
                </div>
                
            </div>
        </div>
        <br>
        <br>
        
        
        <div class="footer">
            <div class="linkuri_header">
                <div class="link_footer">
                    <a href="../pages/contact.php"> Contact</a>
                </div>
                <div class="link_footer">
                    <a href="../pages/contribuie.php"> Sponsorizeaza</a>
                </div>
                <div class="link_footer">
                    <a href="../pages/site_map.php"> Harta Site-ului</a>
                </div> 
                <div class="link_footer">
                    <a href="../pages/lorem_ipsum.php"> Termeni si Conditii</a>
                </div> 
            </div>       
            <div class="drepturi">
                <p>Copyright&#169; AN</p>
            </div>
    
        </div>
    
    </body>

    
</html>