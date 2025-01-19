<?php
header('Content-Type: application/json');

function cUrlPost($data, $url) {
	$jsonData = json_encode($data);

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Content-Type: application/json',
			'Accept: application/json'
	]);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	$response = curl_exec($ch);

	if (curl_errno($ch)) {
			$error_msg = 'Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch);
			curl_close($ch);
			return ['success' => false, 'message' => $error_msg];
	}

	curl_close($ch);

	return ['success' => true, 'response' => json_decode($response, true)];
}


$input = file_get_contents('php://input');
$data = json_decode($input, true);


$response = cUrlPost($data['inviteCode'], "https://hereur.app/api/v1/pm");
print_r($response);




// 응답을 JSON 형식으로 출력
echo json_encode($response);


?>