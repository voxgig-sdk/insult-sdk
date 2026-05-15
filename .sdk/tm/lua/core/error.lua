-- Insult SDK error

local InsultError = {}
InsultError.__index = InsultError


function InsultError.new(code, msg, ctx)
  local self = setmetatable({}, InsultError)
  self.is_sdk_error = true
  self.sdk = "Insult"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function InsultError:error()
  return self.msg
end


function InsultError:__tostring()
  return self.msg
end


return InsultError
