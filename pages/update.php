<?php
session_start();
if(isset($_SESSION['loggedin']))
{
    echo "drumuri bune colega <br>";
}


echo "<pre>";
print_r($_POST);
echo "</pre>";



echo "am facut ceva". "<br>";

if (isset($_POST['password'])&&isset($_POST['passwordC']))
{
    echo $_POST['nume']. "<br>";
}

if (isset($_GET['prenume']))
{
    echo $_GET['prenume'];
}

if(isset($_POST['update']))
{
    if (isset($_POST['password'])&&isset($_POST['passwordC']))
    {
        $con = mysqli_connect("localhost", "root", "");
        if ($con) 
        { 
            mysqli_select_db($con, "bazapai");
            $parola = md5($_POST['password']);
            $rez = mysqli_query($con, "SELECT * FROM users WHERE `username` = '" . $_SESSION['username'] . "'"); 
            $inreg = mysqli_fetch_array($rez);
            if(isset($inreg))
            {
                if($inreg['password'] == $parola)
                {
                        if(isset($_POST['nume']))
                        {        
                            $query="UPDATE `users` SET `name` = '".$_POST['nume']. "' WHERE `users`.`username` = '". $_SESSION['username'] . "';";                    
                            $rez = mysqli_query($con, $query); 
                            
                            if(!$rez)
                            {
                                echo "Eroare la actualizarea contului! <br>";
                            }
                        }
                        if(isset($_POST['prenume']))
                        {        
                            $query="UPDATE `users` SET `surname` = '".$_POST['prenume']. "' WHERE `users`.`username` = '". $_SESSION['username'] . "';";                    
                            $rez = mysqli_query($con, $query); 
                            
                            if(!$rez)
                            {
                                echo "Eroare la actualizarea contului! <br>";
                            }
                        }

                        if(isset($_POST['numeUtilizator']))
                        {        
                            $query="UPDATE `users` SET `username` = '".$_POST['numeUtilizator']. "' WHERE `users`.`username` = '". $_SESSION['username'] . "';";                    
                            $rez = mysqli_query($con, $query); 

                            $q2="UPDATE `userkarma` SET `username` = '".$_POST['numeUtilizator']. "' WHERE `userkarma`.`username` = '". $_SESSION['username'] . "';";                    
                            $_SESSION['username']=$_POST['numeUtilizator'];
                            if(!$rez)
                            {
                                echo "Eroare la actualizarea contului! <br>";
                            }
                        }

                        if(isset($_POST['email']))
                        {        
                            $query="UPDATE `users` SET `e-mail` = '".$_POST['email']. "' WHERE `users`.`username` = '". $_SESSION['username'] . "';";                    
                            $rez = mysqli_query($con, $query); 
                            
                            if(!$rez)
                            {
                                echo "Eroare la actualizarea contului! <br>";
                            }
                        }

                        if(isset($_POST['modelPreferat']))
                        {        
                            $query="UPDATE `users` SET `prefModel` = '".$_POST['modelPreferat']. "' WHERE `users`.`username` = '". $_SESSION['username'] . "';";                    
                            $rez = mysqli_query($con, $query); 
                            
                            if(!$rez)
                            {
                                echo "Eroare la actualizarea contului! <br>";
                            }
                        }
                        
                        if(isset($_POST['cheieAPI']))
                        {        
                            $query="SELECT * FROM api_keys WHERE `username` = '" . $_SESSION['username'] . "'";
                            $rez = mysqli_query($con, $query);
                            $inreg = mysqli_fetch_array($rez);
                            if(isset($inreg))
                            {
                                $query="UPDATE `api_keys` SET `key` = '".$_POST['cheieAPI']. "' WHERE `api_keys`.`username` = '". $_SESSION['username'] . "';";
                                $rez = mysqli_query($con, $query);
                            }

                            else
                            {
                                $query="INSERT INTO `api_keys` (`username`, `key`,`model`) VALUES ('".$_SESSION['username']. "', '".$_POST['cheieAPI']. "', '" . $_POST['modelPreferat']. ");";
                                $rez = mysqli_query($con, $query);
                            }
                        }

                }
                else
                {
                    echo "Parola gresita! <br>";
                }
            } 
        }
        else
        {
            echo "<br>Conexiunea NU a fost realizata!!<br>"; 
        }
    }
}

if(isset($_POST['delete']))
{
    if (isset($_POST['password'])&&isset($_POST['passwordC']))
    {
        $con = mysqli_connect("localhost", "root", "");
        if ($con) 
        { 
            mysqli_select_db($con, "bazapai");
            $parola = md5($_POST['password']);
            $rez = mysqli_query($con, "SELECT * FROM users WHERE `username` = '" . $_SESSION['username'] . "'"); 
            $inreg = mysqli_fetch_array($rez);
            if(isset($inreg))
            {
                if($inreg['password'] == $parola)
                {
                    echo "Parola corecta! <br>";
                    $rez = mysqli_query($con, "DELETE FROM users WHERE `username` = '" . $_SESSION['username'] . "'"); 
                    if($rez)
                    {
                        echo "<script>alert('Cont sters cu succes!');</script>";
                        session_unset();
                        session_destroy();
                        echo "<script>window.location.href = '../index.php';</script>";
                        exit();
                    }
                }
                else
                {
                    echo "Parola gresita! <br>";
                }
            } 
        }
        else
        {
            echo "<br>Conexiunea NU a fost realizata!!<br>"; 
        }
    }
}

exit();
?>