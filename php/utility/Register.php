<?php
declare(strict_types=1);

// Insult SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

InsultUtility::setRegistrar(function (InsultUtility $u): void {
    $u->clean = [InsultClean::class, 'call'];
    $u->done = [InsultDone::class, 'call'];
    $u->make_error = [InsultMakeError::class, 'call'];
    $u->feature_add = [InsultFeatureAdd::class, 'call'];
    $u->feature_hook = [InsultFeatureHook::class, 'call'];
    $u->feature_init = [InsultFeatureInit::class, 'call'];
    $u->fetcher = [InsultFetcher::class, 'call'];
    $u->make_fetch_def = [InsultMakeFetchDef::class, 'call'];
    $u->make_context = [InsultMakeContext::class, 'call'];
    $u->make_options = [InsultMakeOptions::class, 'call'];
    $u->make_request = [InsultMakeRequest::class, 'call'];
    $u->make_response = [InsultMakeResponse::class, 'call'];
    $u->make_result = [InsultMakeResult::class, 'call'];
    $u->make_point = [InsultMakePoint::class, 'call'];
    $u->make_spec = [InsultMakeSpec::class, 'call'];
    $u->make_url = [InsultMakeUrl::class, 'call'];
    $u->param = [InsultParam::class, 'call'];
    $u->prepare_auth = [InsultPrepareAuth::class, 'call'];
    $u->prepare_body = [InsultPrepareBody::class, 'call'];
    $u->prepare_headers = [InsultPrepareHeaders::class, 'call'];
    $u->prepare_method = [InsultPrepareMethod::class, 'call'];
    $u->prepare_params = [InsultPrepareParams::class, 'call'];
    $u->prepare_path = [InsultPreparePath::class, 'call'];
    $u->prepare_query = [InsultPrepareQuery::class, 'call'];
    $u->result_basic = [InsultResultBasic::class, 'call'];
    $u->result_body = [InsultResultBody::class, 'call'];
    $u->result_headers = [InsultResultHeaders::class, 'call'];
    $u->transform_request = [InsultTransformRequest::class, 'call'];
    $u->transform_response = [InsultTransformResponse::class, 'call'];
});
