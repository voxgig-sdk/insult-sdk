<?php
declare(strict_types=1);

// Typed models for the Insult SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.
//
// These are documentation-grade value objects (PHP 8 typed properties),
// registered on the composer classmap autoload. The SDK boundary exchanges
// assoc-arrays; these classes name the shapes for tooling and typed callers.

/** Adjective entity data model. */
class Adjective
{
}

/** Request payload for Adjective#load. */
class AdjectiveLoadMatch
{
}

/** Adjectiveformat entity data model. */
class Adjectiveformat
{
}

/** Request payload for Adjectiveformat#load. */
class AdjectiveformatLoadMatch
{
    public string $format;
    public ?string $lang = null;
}

/** Insult entity data model. */
class Insult
{
}

/** Request payload for Insult#load. */
class InsultLoadMatch
{
}

/** Insultformat entity data model. */
class Insultformat
{
}

/** Request payload for Insultformat#load. */
class InsultformatLoadMatch
{
    public string $format;
    public ?string $lang = null;
}

