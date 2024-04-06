
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-Headers: Content-Type, Api-secret, account_no, load_response');


     function generateLiveToken(){
        // $consumer_key = "fdYk9DrxiJ7xbtqGX6nhiJqCe2RdnJRY";
        // $consumer_secret = "g7Q9aLBUAUadS3Hi";

        // $consumer_key = "DuCRrio8NWKvLDAQwtbafKFlTtAkOfaG";
        // $consumer_secret = "5Fd3P8j2FbltbCfA";
        
                $consumer_key = "hpSfnmTCuvIVwzzGG0lDx1lbwWW6lXG9";
                $consumer_secret = "hwWedsn9yG5uzAHh";

        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode($consumer_key.':'.$consumer_secret);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $curl_response = curl_exec($curl);

        return json_decode($curl_response); //->access_token;
    }


//  echo json_encode(['Status'=> true,'errno'=> 200, 'Desc'=>'Development Mode try again in a few'], JSON_PRETTY_PRINT);


$payPhone = "254743981331";
$CallBackURL = "https://api.boogiecoin.com/walletwebhook.php";
$MPESA_PAYBILL = "4061927";
$MPESA_PASSKEY = "10ed12bfb65322e10be6122b1d72bf08375fe139a2adedf469a68c4944768fb9";
$timestamp = '20'.date("ymdhis");

echo json_encode([generateLiveToken()], JSON_PRETTY_PRINT);