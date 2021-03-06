<?php

namespace parkingomat\PleskDomainsPhp;

require('../vendor/autoload.php');

include('header_json.php');
include('getDomainsFromHost.php');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header_json(['GET' => 'empty']);
}

use letjson\LetJson;

try {

    apifunc([
        'https://php.letjson.com/let_json.php',
        'https://php.defjson.com/def_json.php',
        'https://php.eachfunc.com/each_func.php',
        'https://domain.phpfunc.com/get_domain_by_url.php',
        'https://domain.phpfunc.com/clean_url.php',
        'https://domain.phpfunc.com/clean_url_multiline.php',
    ], function () {
    $objs = new LetJson("../../plesk.json");

    if (empty($_GET['hostname'])) {
        $data = [];
        $objs->each(function ($obj) {
            global $data;
            $data[] = getDomainsFromHost($obj, []);
        });
        header_json($data);

    } else {

        $objs->each(function ($obj) {
            if ($obj->host === $_GET['hostname']) {
                $data = getDomainsFromHost($obj, []);
                header_json($data);
            }
        });
    }
    });

} catch (Exception $e) {
    // Set HTTP response status code to: 500 - Internal Server Error
    header_json([
        'message' => $e->getMessage(),
        'error' => true
    ]);
}

