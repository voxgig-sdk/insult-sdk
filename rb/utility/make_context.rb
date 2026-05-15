# Insult SDK utility: make_context
require_relative '../core/context'
module InsultUtilities
  MakeContext = ->(ctxmap, basectx) {
    InsultContext.new(ctxmap, basectx)
  }
end
