// Typed models for the Insult SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.
package entity

import "encoding/json"

// Adjective is the typed data model for the adjective entity.
type Adjective struct {
}

// AdjectiveLoadMatch mirrors the adjective fields as an all-optional match
// filter (Go analog of Partial<Adjective>).
type AdjectiveLoadMatch struct {
}

// Adjectiveformat is the typed data model for the adjectiveformat entity.
type Adjectiveformat struct {
}

// AdjectiveformatLoadMatch is the typed request payload for Adjectiveformat.LoadTyped.
type AdjectiveformatLoadMatch struct {
	Format string `json:"format"`
	Lang string `json:"lang"`
}

// Insult is the typed data model for the insult entity.
type Insult struct {
}

// InsultLoadMatch mirrors the insult fields as an all-optional match
// filter (Go analog of Partial<Insult>).
type InsultLoadMatch struct {
}

// Insultformat is the typed data model for the insultformat entity.
type Insultformat struct {
}

// InsultformatLoadMatch is the typed request payload for Insultformat.LoadTyped.
type InsultformatLoadMatch struct {
	Format string `json:"format"`
	Lang string `json:"lang"`
}

// asMap turns a typed request/data struct into the map[string]any the
// runtime op pipeline consumes, honouring the json tags above.
func asMap(v any) map[string]any {
	out := map[string]any{}
	b, err := json.Marshal(v)
	if err != nil {
		return out
	}
	_ = json.Unmarshal(b, &out)
	return out
}

// typedFrom decodes a runtime value (a map[string]any produced by the op
// pipeline) into a typed model T via a JSON round-trip. On any error it
// returns the zero value of T; the op's own (value, error) tuple carries the
// real error.
func typedFrom[T any](v any) T {
	var out T
	if v == nil {
		return out
	}
	b, err := json.Marshal(v)
	if err != nil {
		return out
	}
	_ = json.Unmarshal(b, &out)
	return out
}

// typedSliceFrom decodes a runtime list value ([]any of maps) into a typed
// slice []T via a JSON round-trip, for list ops.
func typedSliceFrom[T any](v any) []T {
	var out []T
	if v == nil {
		return out
	}
	b, err := json.Marshal(v)
	if err != nil {
		return out
	}
	_ = json.Unmarshal(b, &out)
	return out
}
