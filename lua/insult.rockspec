package = "voxgig-sdk-insult"
version = "0.0-1"
source = {
  url = "git://github.com/voxgig-sdk/insult-sdk.git"
}
description = {
  summary = "Insult SDK for Lua",
  license = "MIT"
}
dependencies = {
  "lua >= 5.3",
  "dkjson >= 2.5",
  "dkjson >= 2.5",
}
build = {
  type = "builtin",
  modules = {
    ["insult_sdk"] = "insult_sdk.lua",
    ["config"] = "config.lua",
    ["features"] = "features.lua",
  }
}
