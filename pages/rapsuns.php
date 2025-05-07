<?php
// Check if both numbers are received via POST
if (isset($_POST['prompt']) && isset($_POST['hash']))
{
    // Validate and sanitize the input
    $con= mysqli_connect("localhost", "root", "");
    if ($con) 
    { 
        mysqli_select_db($con, "bazapai");
        $rez = mysqli_query($con, "SELECT * FROM intrebari WHERE hash LIKE '" . $_POST['hash'] . "'");
        $inreg = mysqli_fetch_array($rez); 
        $gazda = $inreg['username'];
        $text = $inreg['text'];
        if($text != $_POST['prompt'])
        {
            echo "Textul nu corespunde!";
            exit;
        }

        if(isset($gazda) && $gazda != '') 
            {
                $rez = mysqli_query($con, "SELECT * FROM api_keys WHERE username LIKE '" . $gazda . "'");
                $inreg = mysqli_fetch_array($rez);
                $API_key = $inreg['keye'];
                $model = $inreg['model'];
        
                $prompt = $_POST['prompt'];

                if(isset($_POST['client']) && $_POST['client'] != '')
                {
                    $minumminus = "UPDATE userkarma SET karma = karma - 1 WHERE username LIKE '" . $_POST['client'] . "'; ";
                    $rez = mysqli_query($con, $minumminus);
                } 
                $plusplus="UPDATE userkarma SET karma = karma + 1 WHERE username LIKE '". $gazda ."'; ";
                $rez = mysqli_query($con, $plusplus);

                //GPT code
                header('Content-Type: application/json');

                // Prepare OpenAI API call
                $ch = curl_init();

                $data = [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'user', 'content' => "For the following question give a short answer:  " . $_POST['prompt']]
                    ],
                    'temperature' => 0.7
                ];

                curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $API_key
                ]);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

                $response = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                // DEBUG TEMPORAR — doar pentru depanare
                if ($response === false) {
                    echo json_encode(['error' => 'cURL failed',
                    'details' => curl_error($ch)
                ]);
                    exit;
                }

                $responseData = json_decode($response, true);

                // Verificare dacă a decodat cu succes
                if (!isset($responseData['choices'][0]['message']['content'])) {
                    echo json_encode([
                        'error' => 'Invalid response from OpenAI',
                        'raw' => $response
                    ]);
                    exit;
                }

                $reply = $responseData['choices'][0]['message']['content'];
                echo json_encode(['response' => $reply]);
                exit();
            }
    }

    echo "am incercat sa fac un raspuns";
} else {
    echo "Invalid input.";
}
?>
