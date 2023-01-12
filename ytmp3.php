<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://youtube-mp36.p.rapidapi.com/dl?id=UxxajLWwzqY",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: youtube-mp36.p.rapidapi.com",
		"X-RapidAPI-Key: 41619b6a7dmshf124b3ab111324dp192026jsn86e436d1f9d0"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
