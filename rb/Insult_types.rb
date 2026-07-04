# frozen_string_literal: true

# Typed models for the Insult SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# Adjective entity data model.
class Adjective
end

# Match filter for Adjective#load (any subset of Adjective fields).
class AdjectiveLoadMatch
end

# Adjectiveformat entity data model.
class Adjectiveformat
end

# Request payload for Adjectiveformat#load.
#
# @!attribute [rw] format
#   @return [String]
#
# @!attribute [rw] lang
#   @return [String]
AdjectiveformatLoadMatch = Struct.new(
  :format,
  :lang,
  keyword_init: true
)

# Insult entity data model.
class Insult
end

# Match filter for Insult#load (any subset of Insult fields).
class InsultLoadMatch
end

# Insultformat entity data model.
class Insultformat
end

# Request payload for Insultformat#load.
#
# @!attribute [rw] format
#   @return [String]
#
# @!attribute [rw] lang
#   @return [String]
InsultformatLoadMatch = Struct.new(
  :format,
  :lang,
  keyword_init: true
)

