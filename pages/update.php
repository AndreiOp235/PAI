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

if(isset($_POST['delete']))
{
    echo "babuinus deleteus";
}

exit();
?>