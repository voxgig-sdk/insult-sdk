<?php
declare(strict_types=1);

// Insult SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class InsultFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new InsultBaseFeature();
            case "test":
                return new InsultTestFeature();
            default:
                return new InsultBaseFeature();
        }
    }
}
