<?php
declare(strict_types=1);

// Insult SDK utility: result_headers

class InsultResultHeaders
{
    public static function call(InsultContext $ctx): ?InsultResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
