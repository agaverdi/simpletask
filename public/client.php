<?php

require "../bootstrap.php";

// test requests
$userdata=[
    "firstname"=>"1test",
    "username"=>"1user",
    "email"=>"1@gmail.com"
];

/*getAllUsers();*/
/*getUser(1);*/
/*createUser($userdata);*/
/*deleteUser(4);*/
/*updateUser(1, $userdata);*/

function getAllUsers()
{
    echo "Getting all users...";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8000/user");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    var_dump($response);
}

function getUser($id)
{
    echo "Getting user with id#$id...";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8000/user/" . $id);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    var_dump($response);
}

function createUser($userdata)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8000/user" );
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($userdata));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    var_dump($statusCode);
}

function updateUser($id, $userdata)
{
    echo "Getting user with id#$id...";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8000/user/" . $id);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($userdata));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    var_dump($statusCode);
}

function deleteUser($id)
{
    echo "Getting user with id#$id...";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8000/user/" . $id);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    var_dump($statusCode);
}