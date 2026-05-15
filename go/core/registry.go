package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewAdjectiveEntityFunc func(client *InsultSDK, entopts map[string]any) InsultEntity

var NewAdjectiveformatEntityFunc func(client *InsultSDK, entopts map[string]any) InsultEntity

var NewInsultEntityFunc func(client *InsultSDK, entopts map[string]any) InsultEntity

var NewInsultformatEntityFunc func(client *InsultSDK, entopts map[string]any) InsultEntity

