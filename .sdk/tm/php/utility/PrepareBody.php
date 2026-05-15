<?php
declare(strict_types=1);

// Insult SDK utility: prepare_body

class InsultPrepareBody
{
    public static function call(InsultContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
