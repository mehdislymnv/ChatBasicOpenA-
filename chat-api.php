<?php

if (@$_POST){
    $api_key = "your_openai_key";
    $prompt = $_POST["prompt"];

    $stop = array("Human:", "AI:");
    $data = array(
        "model"  => "gpt-3.5-turbo-instruct",
        "prompt" => $prompt,
        "temperature" => 0.9,
        "max_tokens"  => 256,
        "top_p" => 1,
        "frequency_penalty" => 0,
        "presence_penalty"  => 0.6,
        "stop" => $stop
    );
    $payload = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/completions");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key,
    ));

    $result = curl_exec($ch);
    curl_close($ch);

    $response = json_encode($result, true);
    print_r($response)  ;


}


