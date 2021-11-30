<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelArtifactBuildTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelArtifactBuildTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateBuildRecordByRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateBuildRecordByRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceEndpointAclPolicyRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceEndpointAclPolicyResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceVpcEndpointLinkedVpcRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceVpcEndpointLinkedVpcResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSourceCodeRepoRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSourceCodeRepoResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskByRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskByRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagScanTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagScanTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartReleaseRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartReleaseResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteEventCenterRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteEventCenterRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceEndpointAclPolicyRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceEndpointAclPolicyResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceVpcEndpointLinkedVpcRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceVpcEndpointLinkedVpcResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetAuthorizationTokenRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetAuthorizationTokenResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceCountResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceUsageRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceUsageResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSourceCodeRepoRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSourceCodeRepoResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagLayersRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagLayersResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanSummaryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanSummaryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainInstanceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainInstanceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRuleNameRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRuleNameResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRegionRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRegionResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ResetLoginPasswordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ResetLoginPasswordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateEventCenterRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateEventCenterRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateEventCenterRuleShrinkRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateInstanceEndpointStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateInstanceEndpointStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoSourceCodeRepoRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoSourceCodeRepoResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoTriggerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelArtifactBuildTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CancelArtifactBuildTaskResponse
     */
    public function cancelArtifactBuildTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['BuildTaskId'] = $request->buildTaskId;
        $query['InstanceId']  = $request->instanceId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CancelArtifactBuildTask',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelArtifactBuildTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelArtifactBuildTaskRequest $request
     *
     * @return CancelArtifactBuildTaskResponse
     */
    public function cancelArtifactBuildTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelArtifactBuildTaskWithOptions($request, $runtime);
    }

    /**
     * @param CancelRepoBuildRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelRepoBuildRecordResponse
     */
    public function cancelRepoBuildRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['BuildRecordId'] = $request->buildRecordId;
        $query['InstanceId']    = $request->instanceId;
        $query['RepoId']        = $request->repoId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CancelRepoBuildRecord',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelRepoBuildRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelRepoBuildRecordRequest $request
     *
     * @return CancelRepoBuildRecordResponse
     */
    public function cancelRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * @param CreateBuildRecordByRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateBuildRecordByRuleResponse
     */
    public function createBuildRecordByRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['BuildRuleId'] = $request->buildRuleId;
        $query['InstanceId']  = $request->instanceId;
        $query['RepoId']      = $request->repoId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBuildRecordByRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBuildRecordByRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBuildRecordByRuleRequest $request
     *
     * @return CreateBuildRecordByRuleResponse
     */
    public function createBuildRecordByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBuildRecordByRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateChainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateChainResponse
     */
    public function createChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ChainConfig']       = $request->chainConfig;
        $query['Description']       = $request->description;
        $query['InstanceId']        = $request->instanceId;
        $query['Name']              = $request->name;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateChain',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateChainRequest $request
     *
     * @return CreateChainResponse
     */
    public function createChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChainWithOptions($request, $runtime);
    }

    /**
     * @param CreateChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateChartNamespaceResponse
     */
    public function createChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AutoCreateRepo']  = $request->autoCreateRepo;
        $query['DefaultRepoType'] = $request->defaultRepoType;
        $query['InstanceId']      = $request->instanceId;
        $query['NamespaceName']   = $request->namespaceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateChartNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateChartNamespaceRequest $request
     *
     * @return CreateChartNamespaceResponse
     */
    public function createChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateChartRepositoryResponse
     */
    public function createChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $query['RepoType']          = $request->repoType;
        $query['Summary']           = $request->summary;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateChartRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateChartRepositoryRequest $request
     *
     * @return CreateChartRepositoryResponse
     */
    public function createChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceEndpointAclPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateInstanceEndpointAclPolicyResponse
     */
    public function createInstanceEndpointAclPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Comment']      = $request->comment;
        $query['EndpointType'] = $request->endpointType;
        $query['Entry']        = $request->entry;
        $query['InstanceId']   = $request->instanceId;
        $query['ModuleName']   = $request->moduleName;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceEndpointAclPolicy',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceEndpointAclPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceEndpointAclPolicyRequest $request
     *
     * @return CreateInstanceEndpointAclPolicyResponse
     */
    public function createInstanceEndpointAclPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceEndpointAclPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceVpcEndpointLinkedVpcRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateInstanceVpcEndpointLinkedVpcResponse
     */
    public function createInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['ModuleName'] = $request->moduleName;
        $query['VpcId']      = $request->vpcId;
        $query['VswitchId']  = $request->vswitchId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceVpcEndpointLinkedVpc',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceVpcEndpointLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceVpcEndpointLinkedVpcRequest $request
     *
     * @return CreateInstanceVpcEndpointLinkedVpcResponse
     */
    public function createInstanceVpcEndpointLinkedVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime);
    }

    /**
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AutoCreateRepo']  = $request->autoCreateRepo;
        $query['DefaultRepoType'] = $request->defaultRepoType;
        $query['InstanceId']      = $request->instanceId;
        $query['NamespaceName']   = $request->namespaceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateRepoBuildRuleResponse
     */
    public function createRepoBuildRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['DockerfileLocation'] = $request->dockerfileLocation;
        $query['DockerfileName']     = $request->dockerfileName;
        $query['ImageTag']           = $request->imageTag;
        $query['InstanceId']         = $request->instanceId;
        $query['PushName']           = $request->pushName;
        $query['PushType']           = $request->pushType;
        $query['RepoId']             = $request->repoId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepoBuildRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepoBuildRuleRequest $request
     *
     * @return CreateRepoBuildRuleResponse
     */
    public function createRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoSourceCodeRepoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateRepoSourceCodeRepoResponse
     */
    public function createRepoSourceCodeRepoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['AutoBuild']             = $request->autoBuild;
        $query['CodeRepoName']          = $request->codeRepoName;
        $query['CodeRepoNamespaceName'] = $request->codeRepoNamespaceName;
        $query['CodeRepoType']          = $request->codeRepoType;
        $query['DisableCacheBuild']     = $request->disableCacheBuild;
        $query['InstanceId']            = $request->instanceId;
        $query['OverseaBuild']          = $request->overseaBuild;
        $query['RepoId']                = $request->repoId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepoSourceCodeRepo',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepoSourceCodeRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepoSourceCodeRepoRequest $request
     *
     * @return CreateRepoSourceCodeRepoResponse
     */
    public function createRepoSourceCodeRepo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSourceCodeRepoWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoSyncRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRepoSyncRuleResponse
     */
    public function createRepoSyncRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['InstanceId']          = $request->instanceId;
        $query['NamespaceName']       = $request->namespaceName;
        $query['RepoName']            = $request->repoName;
        $query['SyncRuleName']        = $request->syncRuleName;
        $query['SyncScope']           = $request->syncScope;
        $query['SyncTrigger']         = $request->syncTrigger;
        $query['TagFilter']           = $request->tagFilter;
        $query['TargetInstanceId']    = $request->targetInstanceId;
        $query['TargetNamespaceName'] = $request->targetNamespaceName;
        $query['TargetRegionId']      = $request->targetRegionId;
        $query['TargetRepoName']      = $request->targetRepoName;
        $query['TargetUserId']        = $request->targetUserId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepoSyncRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepoSyncRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepoSyncRuleRequest $request
     *
     * @return CreateRepoSyncRuleResponse
     */
    public function createRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoSyncTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRepoSyncTaskResponse
     */
    public function createRepoSyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['InstanceId']       = $request->instanceId;
        $query['Override']         = $request->override;
        $query['RepoId']           = $request->repoId;
        $query['Tag']              = $request->tag;
        $query['TargetInstanceId'] = $request->targetInstanceId;
        $query['TargetNamespace']  = $request->targetNamespace;
        $query['TargetRegionId']   = $request->targetRegionId;
        $query['TargetRepoName']   = $request->targetRepoName;
        $query['TargetTag']        = $request->targetTag;
        $query['TargetUserId']     = $request->targetUserId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepoSyncTask',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepoSyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepoSyncTaskRequest $request
     *
     * @return CreateRepoSyncTaskResponse
     */
    public function createRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoSyncTaskByRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateRepoSyncTaskByRuleResponse
     */
    public function createRepoSyncTaskByRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $query['SyncRuleId'] = $request->syncRuleId;
        $query['Tag']        = $request->tag;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepoSyncTaskByRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepoSyncTaskByRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepoSyncTaskByRuleRequest $request
     *
     * @return CreateRepoSyncTaskByRuleResponse
     */
    public function createRepoSyncTaskByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSyncTaskByRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateRepoTagResponse
     */
    public function createRepoTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['FromTag']       = $request->fromTag;
        $query['InstanceId']    = $request->instanceId;
        $query['NamespaceName'] = $request->namespaceName;
        $query['RepoName']      = $request->repoName;
        $query['ToTag']         = $request->toTag;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepoTag',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepoTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepoTagRequest $request
     *
     * @return CreateRepoTagResponse
     */
    public function createRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoTagWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoTagScanTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateRepoTagScanTaskResponse
     */
    public function createRepoTagScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['Digest']      = $request->digest;
        $query['InstanceId']  = $request->instanceId;
        $query['RepoId']      = $request->repoId;
        $query['ScanService'] = $request->scanService;
        $query['Tag']         = $request->tag;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepoTagScanTask',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepoTagScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepoTagScanTaskRequest $request
     *
     * @return CreateRepoTagScanTaskResponse
     */
    public function createRepoTagScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoTagScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRepoTriggerResponse
     */
    public function createRepoTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['InstanceId']  = $request->instanceId;
        $query['RepoId']      = $request->repoId;
        $query['TriggerName'] = $request->triggerName;
        $query['TriggerTag']  = $request->triggerTag;
        $query['TriggerType'] = $request->triggerType;
        $query['TriggerUrl']  = $request->triggerUrl;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepoTrigger',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepoTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepoTriggerRequest $request
     *
     * @return CreateRepoTriggerResponse
     */
    public function createRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * @param CreateRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRepositoryResponse
     */
    public function createRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['Detail']            = $request->detail;
        $query['InstanceId']        = $request->instanceId;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $query['RepoType']          = $request->repoType;
        $query['Summary']           = $request->summary;
        $query['TagImmutability']   = $request->tagImmutability;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRepositoryRequest $request
     *
     * @return CreateRepositoryResponse
     */
    public function createRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteChainResponse
     */
    public function deleteChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ChainId']    = $request->chainId;
        $query['InstanceId'] = $request->instanceId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteChain',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteChainRequest $request
     *
     * @return DeleteChainResponse
     */
    public function deleteChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteChartNamespaceResponse
     */
    public function deleteChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['InstanceId']    = $request->instanceId;
        $query['NamespaceName'] = $request->namespaceName;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteChartNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteChartNamespaceRequest $request
     *
     * @return DeleteChartNamespaceResponse
     */
    public function deleteChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChartReleaseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteChartReleaseResponse
     */
    public function deleteChartReleaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['Chart']             = $request->chart;
        $query['InstanceId']        = $request->instanceId;
        $query['Release']           = $request->release;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteChartRelease',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteChartReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteChartReleaseRequest $request
     *
     * @return DeleteChartReleaseResponse
     */
    public function deleteChartRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartReleaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteChartRepositoryResponse
     */
    public function deleteChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteChartRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteChartRepositoryRequest $request
     *
     * @return DeleteChartRepositoryResponse
     */
    public function deleteChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventCenterRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEventCenterRuleResponse
     */
    public function deleteEventCenterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['RuleId']     = $request->ruleId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventCenterRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEventCenterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEventCenterRuleRequest $request
     *
     * @return DeleteEventCenterRuleResponse
     */
    public function deleteEventCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventCenterRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceEndpointAclPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteInstanceEndpointAclPolicyResponse
     */
    public function deleteInstanceEndpointAclPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['EndpointType'] = $request->endpointType;
        $query['Entry']        = $request->entry;
        $query['InstanceId']   = $request->instanceId;
        $query['ModuleName']   = $request->moduleName;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceEndpointAclPolicy',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceEndpointAclPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstanceEndpointAclPolicyRequest $request
     *
     * @return DeleteInstanceEndpointAclPolicyResponse
     */
    public function deleteInstanceEndpointAclPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceEndpointAclPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceVpcEndpointLinkedVpcRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteInstanceVpcEndpointLinkedVpcResponse
     */
    public function deleteInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['ModuleName'] = $request->moduleName;
        $query['VpcId']      = $request->vpcId;
        $query['VswitchId']  = $request->vswitchId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceVpcEndpointLinkedVpc',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceVpcEndpointLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstanceVpcEndpointLinkedVpcRequest $request
     *
     * @return DeleteInstanceVpcEndpointLinkedVpcResponse
     */
    public function deleteInstanceVpcEndpointLinkedVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['InstanceId']    = $request->instanceId;
        $query['NamespaceName'] = $request->namespaceName;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRepoBuildRuleResponse
     */
    public function deleteRepoBuildRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['BuildRuleId'] = $request->buildRuleId;
        $query['InstanceId']  = $request->instanceId;
        $query['RepoId']      = $request->repoId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepoBuildRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRepoBuildRuleRequest $request
     *
     * @return DeleteRepoBuildRuleResponse
     */
    public function deleteRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepoSyncRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRepoSyncRuleResponse
     */
    public function deleteRepoSyncRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['SyncRuleId'] = $request->syncRuleId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepoSyncRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepoSyncRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRepoSyncRuleRequest $request
     *
     * @return DeleteRepoSyncRuleResponse
     */
    public function deleteRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepoTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRepoTagResponse
     */
    public function deleteRepoTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $query['Tag']        = $request->tag;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepoTag',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepoTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRepoTagRequest $request
     *
     * @return DeleteRepoTagResponse
     */
    public function deleteRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteRepoTriggerResponse
     */
    public function deleteRepoTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $query['TriggerId']  = $request->triggerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepoTrigger',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepoTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRepoTriggerRequest $request
     *
     * @return DeleteRepoTriggerResponse
     */
    public function deleteRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRepositoryRequest $request
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param GetArtifactBuildTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetArtifactBuildTaskResponse
     */
    public function getArtifactBuildTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetArtifactBuildTask',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetArtifactBuildTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetArtifactBuildTaskRequest $request
     *
     * @return GetArtifactBuildTaskResponse
     */
    public function getArtifactBuildTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactBuildTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthorizationTokenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetAuthorizationToken',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAuthorizationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAuthorizationTokenRequest $request
     *
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetChainRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetChainResponse
     */
    public function getChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ChainId']    = $request->chainId;
        $query['InstanceId'] = $request->instanceId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetChain',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetChainRequest $request
     *
     * @return GetChainResponse
     */
    public function getChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChainWithOptions($request, $runtime);
    }

    /**
     * @param GetChartNamespaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetChartNamespaceResponse
     */
    public function getChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['InstanceId']    = $request->instanceId;
        $query['NamespaceName'] = $request->namespaceName;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetChartNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetChartNamespaceRequest $request
     *
     * @return GetChartNamespaceResponse
     */
    public function getChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param GetChartRepositoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetChartRepositoryResponse
     */
    public function getChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetChartRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetChartRepositoryRequest $request
     *
     * @return GetChartRepositoryResponse
     */
    public function getChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceCountResponse
     */
    public function getInstanceCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetInstanceCount',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetInstanceCountResponse
     */
    public function getInstanceCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceCountWithOptions($runtime);
    }

    /**
     * @param GetInstanceEndpointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetInstanceEndpointResponse
     */
    public function getInstanceEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['EndpointType'] = $request->endpointType;
        $query['InstanceId']   = $request->instanceId;
        $query['ModuleName']   = $request->moduleName;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceEndpoint',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceEndpointRequest $request
     *
     * @return GetInstanceEndpointResponse
     */
    public function getInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceUsageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetInstanceUsageResponse
     */
    public function getInstanceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceUsage',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceUsageRequest $request
     *
     * @return GetInstanceUsageResponse
     */
    public function getInstanceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceUsageWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceVpcEndpointRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceVpcEndpointResponse
     */
    public function getInstanceVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['ModuleName'] = $request->moduleName;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceVpcEndpoint',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceVpcEndpointRequest $request
     *
     * @return GetInstanceVpcEndpointResponse
     */
    public function getInstanceVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * @param GetNamespaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetNamespaceResponse
     */
    public function getNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['InstanceId']    = $request->instanceId;
        $query['NamespaceId']   = $request->namespaceId;
        $query['NamespaceName'] = $request->namespaceName;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNamespaceRequest $request
     *
     * @return GetNamespaceResponse
     */
    public function getNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoBuildRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRepoBuildRecordResponse
     */
    public function getRepoBuildRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['BuildRecordId'] = $request->buildRecordId;
        $query['InstanceId']    = $request->instanceId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepoBuildRecord',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoBuildRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoBuildRecordRequest $request
     *
     * @return GetRepoBuildRecordResponse
     */
    public function getRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoBuildRecordStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRepoBuildRecordStatusResponse
     */
    public function getRepoBuildRecordStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['BuildRecordId'] = $request->buildRecordId;
        $query['InstanceId']    = $request->instanceId;
        $query['RepoId']        = $request->repoId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepoBuildRecordStatus',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoBuildRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoBuildRecordStatusRequest $request
     *
     * @return GetRepoBuildRecordStatusResponse
     */
    public function getRepoBuildRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoBuildRecordStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoSourceCodeRepoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRepoSourceCodeRepoResponse
     */
    public function getRepoSourceCodeRepoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepoSourceCodeRepo',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoSourceCodeRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoSourceCodeRepoRequest $request
     *
     * @return GetRepoSourceCodeRepoResponse
     */
    public function getRepoSourceCodeRepo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoSourceCodeRepoWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoSyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRepoSyncTaskResponse
     */
    public function getRepoSyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['SyncTaskId'] = $request->syncTaskId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepoSyncTask',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoSyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoSyncTaskRequest $request
     *
     * @return GetRepoSyncTaskResponse
     */
    public function getRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoTagLayersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetRepoTagLayersResponse
     */
    public function getRepoTagLayersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Digest']     = $request->digest;
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $query['Tag']        = $request->tag;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepoTagLayers',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoTagLayersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoTagLayersRequest $request
     *
     * @return GetRepoTagLayersResponse
     */
    public function getRepoTagLayers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagLayersWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoTagManifestRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRepoTagManifestResponse
     */
    public function getRepoTagManifestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['InstanceId']    = $request->instanceId;
        $query['RepoId']        = $request->repoId;
        $query['SchemaVersion'] = $request->schemaVersion;
        $query['Tag']           = $request->tag;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepoTagManifest',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoTagManifestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoTagManifestRequest $request
     *
     * @return GetRepoTagManifestResponse
     */
    public function getRepoTagManifest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagManifestWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoTagScanStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetRepoTagScanStatusResponse
     */
    public function getRepoTagScanStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Digest']     = $request->digest;
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $query['ScanTaskId'] = $request->scanTaskId;
        $query['Tag']        = $request->tag;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepoTagScanStatus',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoTagScanStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoTagScanStatusRequest $request
     *
     * @return GetRepoTagScanStatusResponse
     */
    public function getRepoTagScanStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagScanStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetRepoTagScanSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRepoTagScanSummaryResponse
     */
    public function getRepoTagScanSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Digest']     = $request->digest;
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $query['ScanTaskId'] = $request->scanTaskId;
        $query['Tag']        = $request->tag;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepoTagScanSummary',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepoTagScanSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepoTagScanSummaryRequest $request
     *
     * @return GetRepoTagScanSummaryResponse
     */
    public function getRepoTagScanSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagScanSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetRepositoryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRepositoryResponse
     */
    public function getRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['RepoId']            = $request->repoId;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRepositoryRequest $request
     *
     * @return GetRepositoryResponse
     */
    public function getRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param ListArtifactBuildTaskLogRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListArtifactBuildTaskLogResponse
     */
    public function listArtifactBuildTaskLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListArtifactBuildTaskLog',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListArtifactBuildTaskLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListArtifactBuildTaskLogRequest $request
     *
     * @return ListArtifactBuildTaskLogResponse
     */
    public function listArtifactBuildTaskLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactBuildTaskLogWithOptions($request, $runtime);
    }

    /**
     * @param ListChainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListChainResponse
     */
    public function listChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['PageNo']            = $request->pageNo;
        $query['PageSize']          = $request->pageSize;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListChain',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChainRequest $request
     *
     * @return ListChainResponse
     */
    public function listChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChainWithOptions($request, $runtime);
    }

    /**
     * @param ListChainInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListChainInstanceResponse
     */
    public function listChainInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['PageNo']            = $request->pageNo;
        $query['PageSize']          = $request->pageSize;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListChainInstance',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChainInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChainInstanceRequest $request
     *
     * @return ListChainInstanceResponse
     */
    public function listChainInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChainInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListChartNamespaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListChartNamespaceResponse
     */
    public function listChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['InstanceId']      = $request->instanceId;
        $query['NamespaceName']   = $request->namespaceName;
        $query['NamespaceStatus'] = $request->namespaceStatus;
        $query['PageNo']          = $request->pageNo;
        $query['PageSize']        = $request->pageSize;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListChartNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChartNamespaceRequest $request
     *
     * @return ListChartNamespaceResponse
     */
    public function listChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param ListChartReleaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListChartReleaseResponse
     */
    public function listChartReleaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['Chart']             = $request->chart;
        $query['InstanceId']        = $request->instanceId;
        $query['PageNo']            = $request->pageNo;
        $query['PageSize']          = $request->pageSize;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListChartRelease',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChartReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChartReleaseRequest $request
     *
     * @return ListChartReleaseResponse
     */
    public function listChartRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartReleaseWithOptions($request, $runtime);
    }

    /**
     * @param ListChartRepositoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListChartRepositoryResponse
     */
    public function listChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['PageNo']            = $request->pageNo;
        $query['PageSize']          = $request->pageSize;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $query['RepoStatus']        = $request->repoStatus;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListChartRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChartRepositoryRequest $request
     *
     * @return ListChartRepositoryResponse
     */
    public function listChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param ListEventCenterRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEventCenterRecordResponse
     */
    public function listEventCenterRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEventCenterRecord',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEventCenterRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEventCenterRecordRequest $request
     *
     * @return ListEventCenterRecordResponse
     */
    public function listEventCenterRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventCenterRecordWithOptions($request, $runtime);
    }

    /**
     * @param ListEventCenterRuleNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListEventCenterRuleNameResponse
     */
    public function listEventCenterRuleNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEventCenterRuleName',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEventCenterRuleNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEventCenterRuleNameRequest $request
     *
     * @return ListEventCenterRuleNameResponse
     */
    public function listEventCenterRuleName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventCenterRuleNameWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['InstanceName']   = $request->instanceName;
        $query['InstanceStatus'] = $request->instanceStatus;
        $query['PageNo']         = $request->pageNo;
        $query['PageSize']       = $request->pageSize;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListInstance',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceEndpointRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInstanceEndpointResponse
     */
    public function listInstanceEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['ModuleName'] = $request->moduleName;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceEndpoint',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceEndpointRequest $request
     *
     * @return ListInstanceEndpointResponse
     */
    public function listInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceRegionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceRegionResponse
     */
    public function listInstanceRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query         = [];
        $query['Lang'] = $request->lang;
        $req           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceRegion',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceRegionRequest $request
     *
     * @return ListInstanceRegionResponse
     */
    public function listInstanceRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceRegionWithOptions($request, $runtime);
    }

    /**
     * @param ListNamespaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListNamespaceResponse
     */
    public function listNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['InstanceId']      = $request->instanceId;
        $query['NamespaceName']   = $request->namespaceName;
        $query['NamespaceStatus'] = $request->namespaceStatus;
        $query['PageNo']          = $request->pageNo;
        $query['PageSize']        = $request->pageSize;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNamespaceRequest $request
     *
     * @return ListNamespaceResponse
     */
    public function listNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoBuildRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListRepoBuildRecordResponse
     */
    public function listRepoBuildRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['PageNo']     = $request->pageNo;
        $query['PageSize']   = $request->pageSize;
        $query['RepoId']     = $request->repoId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepoBuildRecord',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepoBuildRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepoBuildRecordRequest $request
     *
     * @return ListRepoBuildRecordResponse
     */
    public function listRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoBuildRecordLogRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListRepoBuildRecordLogResponse
     */
    public function listRepoBuildRecordLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['BuildRecordId'] = $request->buildRecordId;
        $query['InstanceId']    = $request->instanceId;
        $query['Offset']        = $request->offset;
        $query['RepoId']        = $request->repoId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepoBuildRecordLog',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepoBuildRecordLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepoBuildRecordLogRequest $request
     *
     * @return ListRepoBuildRecordLogResponse
     */
    public function listRepoBuildRecordLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRecordLogWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoBuildRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRepoBuildRuleResponse
     */
    public function listRepoBuildRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['PageNo']     = $request->pageNo;
        $query['PageSize']   = $request->pageSize;
        $query['RepoId']     = $request->repoId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepoBuildRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepoBuildRuleRequest $request
     *
     * @return ListRepoBuildRuleResponse
     */
    public function listRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoSyncRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepoSyncRuleResponse
     */
    public function listRepoSyncRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['InstanceId']       = $request->instanceId;
        $query['NamespaceName']    = $request->namespaceName;
        $query['PageNo']           = $request->pageNo;
        $query['PageSize']         = $request->pageSize;
        $query['RepoName']         = $request->repoName;
        $query['TargetInstanceId'] = $request->targetInstanceId;
        $query['TargetRegionId']   = $request->targetRegionId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepoSyncRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepoSyncRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepoSyncRuleRequest $request
     *
     * @return ListRepoSyncRuleResponse
     */
    public function listRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoSyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepoSyncTaskResponse
     */
    public function listRepoSyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['PageNo']            = $request->pageNo;
        $query['PageSize']          = $request->pageSize;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $query['SyncRecordId']      = $request->syncRecordId;
        $query['Tag']               = $request->tag;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepoSyncTask',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepoSyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepoSyncTaskRequest $request
     *
     * @return ListRepoSyncTaskResponse
     */
    public function listRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRepoTagResponse
     */
    public function listRepoTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['PageNo']     = $request->pageNo;
        $query['PageSize']   = $request->pageSize;
        $query['RepoId']     = $request->repoId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepoTag',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepoTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepoTagRequest $request
     *
     * @return ListRepoTagResponse
     */
    public function listRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTagWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoTagScanResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepoTagScanResultResponse
     */
    public function listRepoTagScanResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Digest']     = $request->digest;
        $query['InstanceId'] = $request->instanceId;
        $query['PageNo']     = $request->pageNo;
        $query['PageSize']   = $request->pageSize;
        $query['RepoId']     = $request->repoId;
        $query['ScanTaskId'] = $request->scanTaskId;
        $query['Severity']   = $request->severity;
        $query['Tag']        = $request->tag;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepoTagScanResult',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepoTagScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepoTagScanResultRequest $request
     *
     * @return ListRepoTagScanResultResponse
     */
    public function listRepoTagScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTagScanResultWithOptions($request, $runtime);
    }

    /**
     * @param ListRepoTriggerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRepoTriggerResponse
     */
    public function listRepoTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['RepoId']     = $request->repoId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepoTrigger',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepoTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepoTriggerRequest $request
     *
     * @return ListRepoTriggerResponse
     */
    public function listRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * @param ListRepositoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListRepositoryResponse
     */
    public function listRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['PageNo']            = $request->pageNo;
        $query['PageSize']          = $request->pageSize;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $query['RepoStatus']        = $request->repoStatus;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRepositoryRequest $request
     *
     * @return ListRepositoryResponse
     */
    public function listRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param ResetLoginPasswordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ResetLoginPasswordResponse
     */
    public function resetLoginPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['InstanceId'] = $request->instanceId;
        $query['Password']   = $request->password;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ResetLoginPassword',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetLoginPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetLoginPasswordRequest $request
     *
     * @return ResetLoginPasswordResponse
     */
    public function resetLoginPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetLoginPasswordWithOptions($request, $runtime);
    }

    /**
     * @param UpdateChainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateChainResponse
     */
    public function updateChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ChainConfig'] = $request->chainConfig;
        $query['ChainId']     = $request->chainId;
        $query['Description'] = $request->description;
        $query['InstanceId']  = $request->instanceId;
        $query['Name']        = $request->name;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateChain',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateChainRequest $request
     *
     * @return UpdateChainResponse
     */
    public function updateChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateChartNamespaceResponse
     */
    public function updateChartNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AutoCreateRepo']  = $request->autoCreateRepo;
        $query['DefaultRepoType'] = $request->defaultRepoType;
        $query['InstanceId']      = $request->instanceId;
        $query['NamespaceName']   = $request->namespaceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateChartNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateChartNamespaceRequest $request
     *
     * @return UpdateChartNamespaceResponse
     */
    public function updateChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateChartRepositoryResponse
     */
    public function updateChartRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['InstanceId']        = $request->instanceId;
        $query['RepoName']          = $request->repoName;
        $query['RepoNamespaceName'] = $request->repoNamespaceName;
        $query['RepoType']          = $request->repoType;
        $query['Summary']           = $request->summary;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateChartRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateChartRepositoryRequest $request
     *
     * @return UpdateChartRepositoryResponse
     */
    public function updateChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEventCenterRuleRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEventCenterRuleResponse
     */
    public function updateEventCenterRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEventCenterRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->namespaces)) {
            $request->namespacesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->namespaces, 'Namespaces', 'json');
        }
        if (!Utils::isUnset($tmpReq->repoNames)) {
            $request->repoNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->repoNames, 'RepoNames', 'json');
        }
        $query                         = [];
        $query['EventChannel']         = $request->eventChannel;
        $query['EventConfig']          = $request->eventConfig;
        $query['EventScope']           = $request->eventScope;
        $query['EventType']            = $request->eventType;
        $query['InstanceId']           = $request->instanceId;
        $query['Namespaces']           = $request->namespacesShrink;
        $query['RepoNames']            = $request->repoNamesShrink;
        $query['RepoTagFilterPattern'] = $request->repoTagFilterPattern;
        $query['RuleId']               = $request->ruleId;
        $query['RuleName']             = $request->ruleName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateEventCenterRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEventCenterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEventCenterRuleRequest $request
     *
     * @return UpdateEventCenterRuleResponse
     */
    public function updateEventCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventCenterRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceEndpointStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateInstanceEndpointStatusResponse
     */
    public function updateInstanceEndpointStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Enable']       = $request->enable;
        $query['EndpointType'] = $request->endpointType;
        $query['InstanceId']   = $request->instanceId;
        $query['ModuleName']   = $request->moduleName;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceEndpointStatus',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceEndpointStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceEndpointStatusRequest $request
     *
     * @return UpdateInstanceEndpointStatusResponse
     */
    public function updateInstanceEndpointStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceEndpointStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AutoCreateRepo']  = $request->autoCreateRepo;
        $query['DefaultRepoType'] = $request->defaultRepoType;
        $query['InstanceId']      = $request->instanceId;
        $query['NamespaceName']   = $request->namespaceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateNamespace',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNamespaceRequest $request
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateRepoBuildRuleResponse
     */
    public function updateRepoBuildRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['BuildRuleId']        = $request->buildRuleId;
        $query['DockerfileLocation'] = $request->dockerfileLocation;
        $query['DockerfileName']     = $request->dockerfileName;
        $query['ImageTag']           = $request->imageTag;
        $query['InstanceId']         = $request->instanceId;
        $query['Platforms']          = $request->platforms;
        $query['PushName']           = $request->pushName;
        $query['PushType']           = $request->pushType;
        $query['RepoId']             = $request->repoId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateRepoBuildRule',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRepoBuildRuleRequest $request
     *
     * @return UpdateRepoBuildRuleResponse
     */
    public function updateRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRepoSourceCodeRepoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateRepoSourceCodeRepoResponse
     */
    public function updateRepoSourceCodeRepoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['AutoBuild']             = $request->autoBuild;
        $query['CodeRepoId']            = $request->codeRepoId;
        $query['CodeRepoName']          = $request->codeRepoName;
        $query['CodeRepoNamespaceName'] = $request->codeRepoNamespaceName;
        $query['CodeRepoType']          = $request->codeRepoType;
        $query['DisableCacheBuild']     = $request->disableCacheBuild;
        $query['InstanceId']            = $request->instanceId;
        $query['OverseaBuild']          = $request->overseaBuild;
        $query['RepoId']                = $request->repoId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateRepoSourceCodeRepo',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRepoSourceCodeRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRepoSourceCodeRepoRequest $request
     *
     * @return UpdateRepoSourceCodeRepoResponse
     */
    public function updateRepoSourceCodeRepo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepoSourceCodeRepoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateRepoTriggerResponse
     */
    public function updateRepoTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['InstanceId']  = $request->instanceId;
        $query['RepoId']      = $request->repoId;
        $query['TriggerId']   = $request->triggerId;
        $query['TriggerName'] = $request->triggerName;
        $query['TriggerTag']  = $request->triggerTag;
        $query['TriggerType'] = $request->triggerType;
        $query['TriggerUrl']  = $request->triggerUrl;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateRepoTrigger',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRepoTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRepoTriggerRequest $request
     *
     * @return UpdateRepoTriggerResponse
     */
    public function updateRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepositoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Detail']          = $request->detail;
        $query['InstanceId']      = $request->instanceId;
        $query['RepoId']          = $request->repoId;
        $query['RepoType']        = $request->repoType;
        $query['Summary']         = $request->summary;
        $query['TagImmutability'] = $request->tagImmutability;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateRepository',
            'version'     => '2018-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRepositoryRequest $request
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepositoryWithOptions($request, $runtime);
    }
}
