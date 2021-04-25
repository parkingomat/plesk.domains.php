<?php

function getDomainsFromHost($obj, $domains = [])
{
    $ip = $obj->ip;
    $host = $obj->host;
    $login = $obj->login;
    $password = $obj->password;
//    var_dump($obj, $host, $login, $password);
//    var_dump($obj);
//    die;

    $client = new \PleskX\Api\Client($ip);
    $client->setCredentials($login, $password);
//    $domains = getDomains($client, $host);
    $list = $client->webspace()->getAll();

    foreach ($list as $item) {
        $domains[$host][] = $item->name;
    }
//var_dump($list);
//    var_dump($domains);
    return $domains;
}