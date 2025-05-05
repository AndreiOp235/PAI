<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Connect to database
$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($con, "bazapai");

if (isset($_POST['hash']) && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $prompt_ts = $_POST['prompt_ts'];
    $selectie = $_POST['selectie'];
    $hash = $_POST['hash'];

    $interog = "INSERT INTO intrebari (ID1, username, text, model, hash)
                VALUES (NULL, '$username', '$prompt_ts', '$selectie', '$hash')";

    if (mysqli_query($con, $interog)) {
        echo "Insert successful!";
    } else {
        echo "Insert failed: " . mysqli_error($con);
    }
} else {
    echo "Missing data: hash or session username not set.";
}
?>
