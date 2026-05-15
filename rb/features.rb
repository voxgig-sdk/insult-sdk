# Insult SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module InsultFeatures
  def self.make_feature(name)
    case name
    when "base"
      InsultBaseFeature.new
    when "test"
      InsultTestFeature.new
    else
      InsultBaseFeature.new
    end
  end
end
