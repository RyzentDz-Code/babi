<?php
$secret = '83415d06-ec4e-11e6-a41b-6c40088ab51e';
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-AppVersion: 3.27.0';
$headers[] = "X-Uniqueid: ac94e5d0e7f3f".rand(111,999);
$headers[] = 'X-Location: -6.405821,106.064193';

echo"
 ==========================
|     Auto Send Gopay      |
|     BERWISATA RIYA       |
| github   : RyzentDz-Code |
| Creator  : GOYIGOY       |
| Thank to : BPK           |
 ==========================

".PHP_EOL;
    echo "Masukan Nomer Yang Mau di TF".PHP_EOL;
// sleep for 2 seconds
    sleep(2);
    echo "[+-] Nomer HP : ";
    // sleep for 2 seconds
    sleep(2);
$number = trim(fgets(STDIN));
$secret = '57ea72df-810b-488d-b328-b288678037d2'; //TOKEN
$pin = "130902"; //PIN
$headers = array();
$header[] = 'Content-Type: application/json';
$header[] = 'X-AppVersion: 3.40.0';
$header[] = "X-Uniqueid: ac94e5d0e7f3f".rand(111,999);
$header[] = 'X-Location: -6.405821,106.064193';
$header[] ='Authorization: Bearer '.$secret;
$header[] = 'pin:'.$pin.'';

					echo "[+-] Process Transfer Rp. 1 ";
					$getqrid = curl('https://api.gojekapi.com/wallet/qr-code?phone_number=%2B'.$number.'', null, $header);
                    $jsqrid = json_decode($getqrid[0]);
                    $qrid = $jsqrid->data->qr_id;
                    
    $tf = curl('https://api.gojekapi.com/v2/fund/transfer', '{"amount":"1","description":"ZAL ","qr_id":"'.$qrid.'"}', $header);
    $jstf = json_decode($tf[0]);
    $tfref = $jstf->data;
if ($jstf && true === $jstf->success) {
    echo "[+-] Sukses Transfer Gopay Rp. 1 ";
    } else {
        echo "[+-] Gagal Transfer Gopay  ";
        }
    {

$detail = curl('https://api.gojekapi.com/wallet/profile/detailed', null, $header);
         $saldoo = json_decode($detail[0]);
                $saldo = $saldoo->data->balance;
                    echo "[+-] Sisa Saldo Gopay = $saldo ";
                    echo "[!] Gunakan dengan bijak mek!";
                    echo "[!] ANJG KIRIK ASU JEMBUT MMK WEDUS BABI!";
                    echo "[!] ANJG KIRIK ASU JEMBUT MMK WEDUS BABI!";
                    echo "[!] ANJG KIRIK ASU JEMBUT MMK WEDUS BABI!";
                    echo "[!] ANJG KIRIK ASU JEMBUT MMK WEDUS BABI!";
                    echo "[!] ANJG KIRIK ASU JEMBUT MMK WEDUS BABI!";
                    
    }
					
								function nama()
	{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	// $rand = json_decode($rnd_get, true);
	preg_match_all('+AH4(&bull; (.*?)<br/>&bull; )+AH4', $ex, $name);
	return $name[2][mt_rand(0, 14) ];
	}

function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
	}