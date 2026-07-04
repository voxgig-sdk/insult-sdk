# Typed models for the Insult SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.

from __future__ import annotations

from dataclasses import dataclass
from typing import Optional, Any


@dataclass
class Adjective:
    pass


@dataclass
class AdjectiveLoadMatch:
    pass


@dataclass
class Adjectiveformat:
    pass


@dataclass
class AdjectiveformatLoadMatch:
    format: str
    lang: str


@dataclass
class Insult:
    pass


@dataclass
class InsultLoadMatch:
    pass


@dataclass
class Insultformat:
    pass


@dataclass
class InsultformatLoadMatch:
    format: str
    lang: str

