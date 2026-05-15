<?php
declare(strict_types=1);

// Insult SDK utility: feature_add

class InsultFeatureAdd
{
    public static function call(InsultContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
