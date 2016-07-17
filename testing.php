<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$data = [
    'username'=>'anewusername'.rand(0,990),
    'email'=>'afancyemail'.rand(0,900).'@dot.com',
    'password'=>'secret',
    'firstname'=>'myfirstname',
    'lastname'=>'mylastname',
    'created'=>date('Y-m-d H:i:s'),
    'updated'=>date('Y-m-d H:i:s')
];


try {
        $response = $client->post('http://blog.local:81/api/user',
        [
            'body' => json_encode($data),
        ]);

} catch (Exception $e)
{
    die("" . $e->getMessage());
}

echo $response->getBody();
