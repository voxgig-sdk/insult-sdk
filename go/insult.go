package voxgiginsultsdk

import (
	"github.com/voxgig-sdk/insult-sdk/go/core"
	"github.com/voxgig-sdk/insult-sdk/go/entity"
	"github.com/voxgig-sdk/insult-sdk/go/feature"
	_ "github.com/voxgig-sdk/insult-sdk/go/utility"
)

// Type aliases preserve external API.
type InsultSDK = core.InsultSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type InsultEntity = core.InsultEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type InsultError = core.InsultError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewAdjectiveEntityFunc = func(client *core.InsultSDK, entopts map[string]any) core.InsultEntity {
		return entity.NewAdjectiveEntity(client, entopts)
	}
	core.NewAdjectiveformatEntityFunc = func(client *core.InsultSDK, entopts map[string]any) core.InsultEntity {
		return entity.NewAdjectiveformatEntity(client, entopts)
	}
	core.NewInsultEntityFunc = func(client *core.InsultSDK, entopts map[string]any) core.InsultEntity {
		return entity.NewInsultEntity(client, entopts)
	}
	core.NewInsultformatEntityFunc = func(client *core.InsultSDK, entopts map[string]any) core.InsultEntity {
		return entity.NewInsultformatEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewInsultSDK = core.NewInsultSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig

// No-arg convenience constructors. Go has no default-argument syntax,
// so these aliases let callers write `sdk.New()` / `sdk.Test()`
// instead of `sdk.NewInsultSDK(nil)` / `sdk.TestSDK(nil, nil)`
// for the common no-options case.
func New() *InsultSDK  { return NewInsultSDK(nil) }
func Test() *InsultSDK { return TestSDK(nil, nil) }
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
