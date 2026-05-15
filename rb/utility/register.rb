# Insult SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

InsultUtility.registrar = ->(u) {
  u.clean = InsultUtilities::Clean
  u.done = InsultUtilities::Done
  u.make_error = InsultUtilities::MakeError
  u.feature_add = InsultUtilities::FeatureAdd
  u.feature_hook = InsultUtilities::FeatureHook
  u.feature_init = InsultUtilities::FeatureInit
  u.fetcher = InsultUtilities::Fetcher
  u.make_fetch_def = InsultUtilities::MakeFetchDef
  u.make_context = InsultUtilities::MakeContext
  u.make_options = InsultUtilities::MakeOptions
  u.make_request = InsultUtilities::MakeRequest
  u.make_response = InsultUtilities::MakeResponse
  u.make_result = InsultUtilities::MakeResult
  u.make_point = InsultUtilities::MakePoint
  u.make_spec = InsultUtilities::MakeSpec
  u.make_url = InsultUtilities::MakeUrl
  u.param = InsultUtilities::Param
  u.prepare_auth = InsultUtilities::PrepareAuth
  u.prepare_body = InsultUtilities::PrepareBody
  u.prepare_headers = InsultUtilities::PrepareHeaders
  u.prepare_method = InsultUtilities::PrepareMethod
  u.prepare_params = InsultUtilities::PrepareParams
  u.prepare_path = InsultUtilities::PreparePath
  u.prepare_query = InsultUtilities::PrepareQuery
  u.result_basic = InsultUtilities::ResultBasic
  u.result_body = InsultUtilities::ResultBody
  u.result_headers = InsultUtilities::ResultHeaders
  u.transform_request = InsultUtilities::TransformRequest
  u.transform_response = InsultUtilities::TransformResponse
}
