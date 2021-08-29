 <?php

$header=array( 
"accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8",
"accept-language: en-GB,en-US;q=0.9,en;q=0.8",
"cookie: SBID=918593000",
"referer: https://getsatoshi.online/",
"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36"
);

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://luckyfaucet.net/user/faucet/index");
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANFER, 1);
 curl_setopt($ch, CURLOPT_HTTP_HEADER, $shader);
 curl_setopt($ch, CURLOPT_VERYFYPEER, 0);
 $Hhasil = curl_exec($ch);
 print_r($hasil);