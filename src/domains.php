<?php
namespace parkingomat\PleskDomainsPhp;

require('../vendor/autoload.php');

include('header_json.php');
include('getDomainsFromHost.php');


if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header_json(['GET'=> 'empty']);
}

use letjson\LetJson;

$data = [];
$objs = new LetJson("../../plesk.json");
$objs->each(function ($obj) {
//    var_dump($obj->host);
//    var_dump($_POST);
    if ($obj->host === $_GET['hostname']) {
        $data = getDomainsFromHost($obj, []);
        header_json($data);
    }
});

