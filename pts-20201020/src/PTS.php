<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PTS\V20201020\Models\CreatePtsSceneBaseLineFromReportRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\CreatePtsSceneBaseLineFromReportResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\CreatePtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\CreatePtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsSceneBaseLineRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsSceneBaseLineResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsScenesRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsScenesResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsScenesShrinkRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterLogsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterLogsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSampleMetricsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSampleMetricsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSamplingLogsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSamplingLogsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSceneRunningDataRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSceneRunningDataResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportsBySceneIdRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportsBySceneIdResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningStatusRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningStatusResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListJMeterReportsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListJMeterReportsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListOpenJMeterScenesRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListOpenJMeterScenesResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ModifyPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ModifyPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\RemoveEnvRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\RemoveEnvResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\RemoveOpenJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\RemoveOpenJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvShrinkRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneShrinkRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartDebuggingJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartDebuggingJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartDebugPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartDebugPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartTestingJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartTestingJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopDebuggingJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopDebuggingJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopDebugPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopDebugPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopTestingJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopTestingJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\UpdatePtsSceneBaseLineRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\UpdatePtsSceneBaseLineResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\UpdatePtsSceneBaseLineShrinkRequest;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class PTS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreatePtsSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePtsSceneResponse
     */
    public function createPtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePtsSceneResponse::fromMap($this->doRPCRequest('CreatePtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePtsSceneRequest $request
     *
     * @return CreatePtsSceneResponse
     */
    public function createPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param CreatePtsSceneBaseLineFromReportRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreatePtsSceneBaseLineFromReportResponse
     */
    public function createPtsSceneBaseLineFromReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePtsSceneBaseLineFromReportResponse::fromMap($this->doRPCRequest('CreatePtsSceneBaseLineFromReport', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePtsSceneBaseLineFromReportRequest $request
     *
     * @return CreatePtsSceneBaseLineFromReportResponse
     */
    public function createPtsSceneBaseLineFromReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPtsSceneBaseLineFromReportWithOptions($request, $runtime);
    }

    /**
     * @param DeletePtsSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePtsSceneResponse
     */
    public function deletePtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePtsSceneResponse::fromMap($this->doRPCRequest('DeletePtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePtsSceneRequest $request
     *
     * @return DeletePtsSceneResponse
     */
    public function deletePtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param DeletePtsSceneBaseLineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeletePtsSceneBaseLineResponse
     */
    public function deletePtsSceneBaseLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePtsSceneBaseLineResponse::fromMap($this->doRPCRequest('DeletePtsSceneBaseLine', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePtsSceneBaseLineRequest $request
     *
     * @return DeletePtsSceneBaseLineResponse
     */
    public function deletePtsSceneBaseLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePtsSceneBaseLineWithOptions($request, $runtime);
    }

    /**
     * @param DeletePtsScenesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePtsScenesResponse
     */
    public function deletePtsScenesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeletePtsScenesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sceneIds)) {
            $request->sceneIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sceneIds, 'SceneIds', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePtsScenesResponse::fromMap($this->doRPCRequest('DeletePtsScenes', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePtsScenesRequest $request
     *
     * @return DeletePtsScenesResponse
     */
    public function deletePtsScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePtsScenesWithOptions($request, $runtime);
    }

    /**
     * @param GetJMeterLogsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetJMeterLogsResponse
     */
    public function getJMeterLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJMeterLogsResponse::fromMap($this->doRPCRequest('GetJMeterLogs', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJMeterLogsRequest $request
     *
     * @return GetJMeterLogsResponse
     */
    public function getJMeterLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterLogsWithOptions($request, $runtime);
    }

    /**
     * @param GetJMeterSampleMetricsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetJMeterSampleMetricsResponse
     */
    public function getJMeterSampleMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJMeterSampleMetricsResponse::fromMap($this->doRPCRequest('GetJMeterSampleMetrics', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJMeterSampleMetricsRequest $request
     *
     * @return GetJMeterSampleMetricsResponse
     */
    public function getJMeterSampleMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterSampleMetricsWithOptions($request, $runtime);
    }

    /**
     * @param GetJMeterSamplingLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetJMeterSamplingLogsResponse
     */
    public function getJMeterSamplingLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJMeterSamplingLogsResponse::fromMap($this->doRPCRequest('GetJMeterSamplingLogs', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJMeterSamplingLogsRequest $request
     *
     * @return GetJMeterSamplingLogsResponse
     */
    public function getJMeterSamplingLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterSamplingLogsWithOptions($request, $runtime);
    }

    /**
     * @param GetJMeterSceneRunningDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetJMeterSceneRunningDataResponse
     */
    public function getJMeterSceneRunningDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJMeterSceneRunningDataResponse::fromMap($this->doRPCRequest('GetJMeterSceneRunningData', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJMeterSceneRunningDataRequest $request
     *
     * @return GetJMeterSceneRunningDataResponse
     */
    public function getJMeterSceneRunningData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterSceneRunningDataWithOptions($request, $runtime);
    }

    /**
     * @param GetOpenJMeterSceneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOpenJMeterSceneResponse
     */
    public function getOpenJMeterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOpenJMeterSceneResponse::fromMap($this->doRPCRequest('GetOpenJMeterScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOpenJMeterSceneRequest $request
     *
     * @return GetOpenJMeterSceneResponse
     */
    public function getOpenJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpenJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @param GetPtsReportDetailsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPtsReportDetailsResponse
     */
    public function getPtsReportDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPtsReportDetailsResponse::fromMap($this->doRPCRequest('GetPtsReportDetails', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPtsReportDetailsRequest $request
     *
     * @return GetPtsReportDetailsResponse
     */
    public function getPtsReportDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsReportDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetPtsReportsBySceneIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPtsReportsBySceneIdResponse
     */
    public function getPtsReportsBySceneIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPtsReportsBySceneIdResponse::fromMap($this->doRPCRequest('GetPtsReportsBySceneId', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPtsReportsBySceneIdRequest $request
     *
     * @return GetPtsReportsBySceneIdResponse
     */
    public function getPtsReportsBySceneId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsReportsBySceneIdWithOptions($request, $runtime);
    }

    /**
     * @param GetPtsSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPtsSceneResponse
     */
    public function getPtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPtsSceneResponse::fromMap($this->doRPCRequest('GetPtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPtsSceneRequest $request
     *
     * @return GetPtsSceneResponse
     */
    public function getPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param GetPtsSceneBaseLineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPtsSceneBaseLineResponse
     */
    public function getPtsSceneBaseLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPtsSceneBaseLineResponse::fromMap($this->doRPCRequest('GetPtsSceneBaseLine', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPtsSceneBaseLineRequest $request
     *
     * @return GetPtsSceneBaseLineResponse
     */
    public function getPtsSceneBaseLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsSceneBaseLineWithOptions($request, $runtime);
    }

    /**
     * @param GetPtsSceneRunningDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPtsSceneRunningDataResponse
     */
    public function getPtsSceneRunningDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPtsSceneRunningDataResponse::fromMap($this->doRPCRequest('GetPtsSceneRunningData', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPtsSceneRunningDataRequest $request
     *
     * @return GetPtsSceneRunningDataResponse
     */
    public function getPtsSceneRunningData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsSceneRunningDataWithOptions($request, $runtime);
    }

    /**
     * @param GetPtsSceneRunningStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetPtsSceneRunningStatusResponse
     */
    public function getPtsSceneRunningStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPtsSceneRunningStatusResponse::fromMap($this->doRPCRequest('GetPtsSceneRunningStatus', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPtsSceneRunningStatusRequest $request
     *
     * @return GetPtsSceneRunningStatusResponse
     */
    public function getPtsSceneRunningStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsSceneRunningStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListEnvsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListEnvsResponse
     */
    public function listEnvsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEnvsResponse::fromMap($this->doRPCRequest('ListEnvs', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEnvsRequest $request
     *
     * @return ListEnvsResponse
     */
    public function listEnvs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvsWithOptions($request, $runtime);
    }

    /**
     * @param ListJMeterReportsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListJMeterReportsResponse
     */
    public function listJMeterReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJMeterReportsResponse::fromMap($this->doRPCRequest('ListJMeterReports', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListJMeterReportsRequest $request
     *
     * @return ListJMeterReportsResponse
     */
    public function listJMeterReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJMeterReportsWithOptions($request, $runtime);
    }

    /**
     * @param ListOpenJMeterScenesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListOpenJMeterScenesResponse
     */
    public function listOpenJMeterScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOpenJMeterScenesResponse::fromMap($this->doRPCRequest('ListOpenJMeterScenes', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOpenJMeterScenesRequest $request
     *
     * @return ListOpenJMeterScenesResponse
     */
    public function listOpenJMeterScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenJMeterScenesWithOptions($request, $runtime);
    }

    /**
     * @param ListPtsSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPtsSceneResponse
     */
    public function listPtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPtsSceneResponse::fromMap($this->doRPCRequest('ListPtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPtsSceneRequest $request
     *
     * @return ListPtsSceneResponse
     */
    public function listPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPtsSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyPtsSceneResponse
     */
    public function modifyPtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPtsSceneResponse::fromMap($this->doRPCRequest('ModifyPtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPtsSceneRequest $request
     *
     * @return ModifyPtsSceneResponse
     */
    public function modifyPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param RemoveEnvRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RemoveEnvResponse
     */
    public function removeEnvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveEnvResponse::fromMap($this->doRPCRequest('RemoveEnv', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveEnvRequest $request
     *
     * @return RemoveEnvResponse
     */
    public function removeEnv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEnvWithOptions($request, $runtime);
    }

    /**
     * @param RemoveOpenJMeterSceneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveOpenJMeterSceneResponse
     */
    public function removeOpenJMeterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveOpenJMeterSceneResponse::fromMap($this->doRPCRequest('RemoveOpenJMeterScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveOpenJMeterSceneRequest $request
     *
     * @return RemoveOpenJMeterSceneResponse
     */
    public function removeOpenJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeOpenJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @param SaveEnvRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return SaveEnvResponse
     */
    public function saveEnvWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveEnvShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->env)) {
            $request->envShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->env), 'Env', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveEnvResponse::fromMap($this->doRPCRequest('SaveEnv', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveEnvRequest $request
     *
     * @return SaveEnvResponse
     */
    public function saveEnv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveEnvWithOptions($request, $runtime);
    }

    /**
     * @param SaveOpenJMeterSceneRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SaveOpenJMeterSceneResponse
     */
    public function saveOpenJMeterSceneWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveOpenJMeterSceneShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->openJMeterScene)) {
            $request->openJMeterSceneShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->openJMeterScene), 'OpenJMeterScene', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveOpenJMeterSceneResponse::fromMap($this->doRPCRequest('SaveOpenJMeterScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveOpenJMeterSceneRequest $request
     *
     * @return SaveOpenJMeterSceneResponse
     */
    public function saveOpenJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveOpenJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @param StartDebugPtsSceneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartDebugPtsSceneResponse
     */
    public function startDebugPtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartDebugPtsSceneResponse::fromMap($this->doRPCRequest('StartDebugPtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartDebugPtsSceneRequest $request
     *
     * @return StartDebugPtsSceneResponse
     */
    public function startDebugPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDebugPtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param StartDebuggingJMeterSceneRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartDebuggingJMeterSceneResponse
     */
    public function startDebuggingJMeterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartDebuggingJMeterSceneResponse::fromMap($this->doRPCRequest('StartDebuggingJMeterScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartDebuggingJMeterSceneRequest $request
     *
     * @return StartDebuggingJMeterSceneResponse
     */
    public function startDebuggingJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDebuggingJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @param StartPtsSceneRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartPtsSceneResponse
     */
    public function startPtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartPtsSceneResponse::fromMap($this->doRPCRequest('StartPtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartPtsSceneRequest $request
     *
     * @return StartPtsSceneResponse
     */
    public function startPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param StartTestingJMeterSceneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StartTestingJMeterSceneResponse
     */
    public function startTestingJMeterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartTestingJMeterSceneResponse::fromMap($this->doRPCRequest('StartTestingJMeterScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartTestingJMeterSceneRequest $request
     *
     * @return StartTestingJMeterSceneResponse
     */
    public function startTestingJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTestingJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @param StopDebugPtsSceneRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopDebugPtsSceneResponse
     */
    public function stopDebugPtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopDebugPtsSceneResponse::fromMap($this->doRPCRequest('StopDebugPtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopDebugPtsSceneRequest $request
     *
     * @return StopDebugPtsSceneResponse
     */
    public function stopDebugPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDebugPtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param StopDebuggingJMeterSceneRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StopDebuggingJMeterSceneResponse
     */
    public function stopDebuggingJMeterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopDebuggingJMeterSceneResponse::fromMap($this->doRPCRequest('StopDebuggingJMeterScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopDebuggingJMeterSceneRequest $request
     *
     * @return StopDebuggingJMeterSceneResponse
     */
    public function stopDebuggingJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDebuggingJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @param StopPtsSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopPtsSceneResponse
     */
    public function stopPtsSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopPtsSceneResponse::fromMap($this->doRPCRequest('StopPtsScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopPtsSceneRequest $request
     *
     * @return StopPtsSceneResponse
     */
    public function stopPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopPtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param StopTestingJMeterSceneRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StopTestingJMeterSceneResponse
     */
    public function stopTestingJMeterSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopTestingJMeterSceneResponse::fromMap($this->doRPCRequest('StopTestingJMeterScene', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopTestingJMeterSceneRequest $request
     *
     * @return StopTestingJMeterSceneResponse
     */
    public function stopTestingJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTestingJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePtsSceneBaseLineRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePtsSceneBaseLineResponse
     */
    public function updatePtsSceneBaseLineWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdatePtsSceneBaseLineShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->apiBaselines)) {
            $request->apiBaselinesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->apiBaselines, 'ApiBaselines', 'json');
        }
        if (!Utils::isUnset($tmpReq->sceneBaseline)) {
            $request->sceneBaselineShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sceneBaseline, 'SceneBaseline', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePtsSceneBaseLineResponse::fromMap($this->doRPCRequest('UpdatePtsSceneBaseLine', '2020-10-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdatePtsSceneBaseLineRequest $request
     *
     * @return UpdatePtsSceneBaseLineResponse
     */
    public function updatePtsSceneBaseLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePtsSceneBaseLineWithOptions($request, $runtime);
    }
}
