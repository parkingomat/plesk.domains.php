<?php
namespace parkingomat\PleskDomainsPhp;

/**
 * @param array $data
 */
function header_json(array $data)
{
    header('Content-Type: application/json');
    $json = json_encode($data);
    if ($json === false) {
        // Avoid echo of empty string (which is invalid JSON), and
        // JSONify the error message instead:
        $json = json_encode(["jsonError" => json_last_error_msg()]);
        if ($json === false) {
            // This should not happen, but we go all the way now:
            $json = '{"jsonError":"unknown"}';
        }
        // Set HTTP response status code to: 500 - Internal Server Error
        http_response_code(500);
    }
    echo $json;
}

