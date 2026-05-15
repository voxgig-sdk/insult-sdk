# Insult SDK utility: feature_add
module InsultUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
