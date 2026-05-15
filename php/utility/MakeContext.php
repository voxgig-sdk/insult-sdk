<?php
declare(strict_types=1);

// Insult SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class InsultMakeContext
{
    public static function call(array $ctxmap, ?InsultContext $basectx): InsultContext
    {
        return new InsultContext($ctxmap, $basectx);
    }
}
