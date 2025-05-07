<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['email'])&&isset($_POST['email']))
{
    $con = mysqli_connect("localhost", "root", "");
    if ($con) 
    { 
        mysqli_select_db($con, "bazapai");

        $rez = mysqli_query($con, "SELECT * FROM users WHERE `e-mail` = '" . $_POST['email'] . "'"); // //
        $inreg = mysqli_fetch_array($rez); 
        if(isset($inreg))
            {
                $parola = md5($_POST['password']);
                if($inreg['password'] == $parola)
                {
                    echo "Parola corecta! <br>";
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $inreg['username'];
                    echo $_SESSION['username'];
                    echo "<script>window.location.href = 'profile.php';</script>";
                    exit();
                }
                else
                {
                    echo "Parola gresita! <br>";
                }
            }    
        else
            echo "Nu exista acest user cu adresa ". $_POST['email'];
    }
}

/*
fisierul secret cu parole
| Email                                           | Plain Password |
| ----------------------------------------------- | -------------- |
| [c@dp.ro](mailto:c@dp.ro)                       | a              |
| [alice@example.com](mailto:alice@example.com)   | rabbit2024     |
| [bob@example.com](mailto:bob@example.com)       | hunter42       |
| [carla@example.com](mailto:carla@example.com)   | blueSky        |
| [dan@example.com](mailto:dan@example.com)       | lucky777       |
| [eva@example.com](mailto:eva@example.com)       | flower!        |
| [franko@example.com](mailto:franko@example.com) | swordfish      |
| [gigi@example.com](mailto:gigi@example.com)     | AIpass2025     |
| [hanna@example.com](mailto:hanna@example.com)   | p\@ssword1     |
| [ionut@example.com](mailto:ionut@example.com)   | Romania123     |

*/

//$isLoggedIn = false; // For testing purposes, set to false to simulate a logged-out state

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true )
{
    //echo "sunt logat <br>";
    $con = mysqli_connect("localhost", "root", "");
                if ($con) 
                { 
                    mysqli_select_db($con, "bazapai");

                    $rez = mysqli_query($con, "SELECT * FROM userKarma WHERE username LIKE '" . $_SESSION['username'] . "'");
                    $inreg = mysqli_fetch_array($rez); 
                    $_SESSION['karma']=$inreg['karma'];
                }
}
else
{
    //echo "nu sunt logat <br>";
}

?>

