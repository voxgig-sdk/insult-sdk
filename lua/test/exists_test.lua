-- ProjectName SDK exists test

local sdk = require("insult_sdk")

describe("InsultSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
