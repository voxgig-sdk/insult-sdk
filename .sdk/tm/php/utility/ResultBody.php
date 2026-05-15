<?php
declare(strict_types=1);

// Insult SDK utility: result_body

class InsultResultBody
{
    public static function call(InsultContext $ctx): ?InsultResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
