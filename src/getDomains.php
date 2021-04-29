<?php
namespace parkingomat\PleskDomainsPhp;

/**
 * @param $client
 * @param $host
 * @return array
 */
function getDomains($client, $host)
{
    $list = $client->webspace()->getAll();
    $domains = [];
    foreach ($list as $item) {
        $domains[$item->name] = $host;
    }
//var_dump($list);
//    var_dump($domains);
    return $domains;
}