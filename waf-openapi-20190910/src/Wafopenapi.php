<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateByCertificateIdRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateByCertificateIdResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertMatchStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertMatchStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainBasicConfigsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainBasicConfigsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainListRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainListResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainNamesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainNamesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRuleGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRuleGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceSpecInfoRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceSpecInfoResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeLogServiceStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeLogServiceStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleCodeConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleCodeConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleModeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleModeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRuleGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRuleGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeWafSourceIpSegmentRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeWafSourceIpSegmentResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainIpv6StatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainIpv6StatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogRetrievalStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogRetrievalStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogServiceStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogServiceStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleModeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleModeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleCacheStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleCacheStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\SetDomainRuleGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\SetDomainRuleGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Wafopenapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-beijing'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-chengdu'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou'        => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote'          => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-heyuan'             => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-wulanchabu'         => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-west-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-central-1'          => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'cn-shanghai-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-north-2-gov-1'      => 'wafopenapi.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('waf-openapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateCertificateRequest $request CreateCertificateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCertificateResponse CreateCertificateResponse
     */
    public function createCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificate)) {
            $query['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->certificateName)) {
            $query['CertificateName'] = $request->certificateName;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCertificate',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCertificateRequest $request CreateCertificateRequest
     *
     * @return CreateCertificateResponse CreateCertificateResponse
     */
    public function createCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithOptions($request, $runtime);
    }

    /**
     * @param CreateCertificateByCertificateIdRequest $request CreateCertificateByCertificateIdRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCertificateByCertificateIdResponse CreateCertificateByCertificateIdResponse
     */
    public function createCertificateByCertificateIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCertificateByCertificateId',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCertificateByCertificateIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCertificateByCertificateIdRequest $request CreateCertificateByCertificateIdRequest
     *
     * @return CreateCertificateByCertificateIdResponse CreateCertificateByCertificateIdResponse
     */
    public function createCertificateByCertificateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateByCertificateIdWithOptions($request, $runtime);
    }

    /**
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessHeaderMode)) {
            $query['AccessHeaderMode'] = $request->accessHeaderMode;
        }
        if (!Utils::isUnset($request->accessHeaders)) {
            $query['AccessHeaders'] = $request->accessHeaders;
        }
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->cloudNativeInstances)) {
            $query['CloudNativeInstances'] = $request->cloudNativeInstances;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->connectionTime)) {
            $query['ConnectionTime'] = $request->connectionTime;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->http2Port)) {
            $query['Http2Port'] = $request->http2Port;
        }
        if (!Utils::isUnset($request->httpPort)) {
            $query['HttpPort'] = $request->httpPort;
        }
        if (!Utils::isUnset($request->httpToUserIp)) {
            $query['HttpToUserIp'] = $request->httpToUserIp;
        }
        if (!Utils::isUnset($request->httpsPort)) {
            $query['HttpsPort'] = $request->httpsPort;
        }
        if (!Utils::isUnset($request->httpsRedirect)) {
            $query['HttpsRedirect'] = $request->httpsRedirect;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipFollowStatus)) {
            $query['IpFollowStatus'] = $request->ipFollowStatus;
        }
        if (!Utils::isUnset($request->isAccessProduct)) {
            $query['IsAccessProduct'] = $request->isAccessProduct;
        }
        if (!Utils::isUnset($request->keepalive)) {
            $query['Keepalive'] = $request->keepalive;
        }
        if (!Utils::isUnset($request->keepaliveRequests)) {
            $query['KeepaliveRequests'] = $request->keepaliveRequests;
        }
        if (!Utils::isUnset($request->keepaliveTimeout)) {
            $query['KeepaliveTimeout'] = $request->keepaliveTimeout;
        }
        if (!Utils::isUnset($request->loadBalancing)) {
            $query['LoadBalancing'] = $request->loadBalancing;
        }
        if (!Utils::isUnset($request->logHeaders)) {
            $query['LogHeaders'] = $request->logHeaders;
        }
        if (!Utils::isUnset($request->readTime)) {
            $query['ReadTime'] = $request->readTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->retry)) {
            $query['Retry'] = $request->retry;
        }
        if (!Utils::isUnset($request->sniHost)) {
            $query['SniHost'] = $request->sniHost;
        }
        if (!Utils::isUnset($request->sniStatus)) {
            $query['SniStatus'] = $request->sniStatus;
        }
        if (!Utils::isUnset($request->sourceIps)) {
            $query['SourceIps'] = $request->sourceIps;
        }
        if (!Utils::isUnset($request->writeTime)) {
            $query['WriteTime'] = $request->writeTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * @param CreateProtectionModuleRuleRequest $request CreateProtectionModuleRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProtectionModuleRuleResponse CreateProtectionModuleRuleResponse
     */
    public function createProtectionModuleRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProtectionModuleRule',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProtectionModuleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProtectionModuleRuleRequest $request CreateProtectionModuleRuleRequest
     *
     * @return CreateProtectionModuleRuleResponse CreateProtectionModuleRuleResponse
     */
    public function createProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainRequest $request DeleteDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDomainRequest $request DeleteDomainRequest
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProtectionModuleRuleRequest $request DeleteProtectionModuleRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProtectionModuleRuleResponse DeleteProtectionModuleRuleResponse
     */
    public function deleteProtectionModuleRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProtectionModuleRule',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProtectionModuleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProtectionModuleRuleRequest $request DeleteProtectionModuleRuleRequest
     *
     * @return DeleteProtectionModuleRuleResponse DeleteProtectionModuleRuleResponse
     */
    public function deleteProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertMatchStatusRequest $request DescribeCertMatchStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCertMatchStatusResponse DescribeCertMatchStatusResponse
     */
    public function describeCertMatchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificate)) {
            $query['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCertMatchStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCertMatchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCertMatchStatusRequest $request DescribeCertMatchStatusRequest
     *
     * @return DescribeCertMatchStatusResponse DescribeCertMatchStatusResponse
     */
    public function describeCertMatchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertMatchStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertificatesRequest $request DescribeCertificatesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCertificatesResponse DescribeCertificatesResponse
     */
    public function describeCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCertificates',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCertificatesRequest $request DescribeCertificatesRequest
     *
     * @return DescribeCertificatesResponse DescribeCertificatesResponse
     */
    public function describeCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRequest $request DescribeDomainRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainResponse DescribeDomainResponse
     */
    public function describeDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomain',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRequest $request DescribeDomainRequest
     *
     * @return DescribeDomainResponse DescribeDomainResponse
     */
    public function describeDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAdvanceConfigsRequest $request DescribeDomainAdvanceConfigsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainAdvanceConfigsResponse DescribeDomainAdvanceConfigsResponse
     */
    public function describeDomainAdvanceConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainList)) {
            $query['DomainList'] = $request->domainList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainAdvanceConfigs',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainAdvanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainAdvanceConfigsRequest $request DescribeDomainAdvanceConfigsRequest
     *
     * @return DescribeDomainAdvanceConfigsResponse DescribeDomainAdvanceConfigsResponse
     */
    public function describeDomainAdvanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAdvanceConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainBasicConfigsRequest $request DescribeDomainBasicConfigsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainBasicConfigsResponse DescribeDomainBasicConfigsResponse
     */
    public function describeDomainBasicConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->cloudNativeProductId)) {
            $query['CloudNativeProductId'] = $request->cloudNativeProductId;
        }
        if (!Utils::isUnset($request->domainKey)) {
            $query['DomainKey'] = $request->domainKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainBasicConfigs',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainBasicConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainBasicConfigsRequest $request DescribeDomainBasicConfigsRequest
     *
     * @return DescribeDomainBasicConfigsResponse DescribeDomainBasicConfigsResponse
     */
    public function describeDomainBasicConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBasicConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainListRequest $request DescribeDomainListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainListResponse DescribeDomainListResponse
     */
    public function describeDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isSub)) {
            $query['IsSub'] = $request->isSub;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainList',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainListRequest $request DescribeDomainListRequest
     *
     * @return DescribeDomainListResponse DescribeDomainListResponse
     */
    public function describeDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainNamesRequest $request DescribeDomainNamesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainNamesResponse DescribeDomainNamesResponse
     */
    public function describeDomainNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainNames',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainNamesRequest $request DescribeDomainNamesRequest
     *
     * @return DescribeDomainNamesResponse DescribeDomainNamesResponse
     */
    public function describeDomainNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainNamesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRuleGroupRequest $request DescribeDomainRuleGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRuleGroupResponse DescribeDomainRuleGroupResponse
     */
    public function describeDomainRuleGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRuleGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRuleGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRuleGroupRequest $request DescribeDomainRuleGroupRequest
     *
     * @return DescribeDomainRuleGroupResponse DescribeDomainRuleGroupResponse
     */
    public function describeDomainRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRuleGroupWithOptions($request, $runtime);
    }

    /**
     * @description ## Usage notes
     * You can call the DescribeInstanceInfo operation to query the information about the WAF instance within your Alibaba Cloud account. The information includes the ID, version, status, and expiration time of the instance.
     *  *
     * @param DescribeInstanceInfoRequest $request DescribeInstanceInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceInfoResponse DescribeInstanceInfoResponse
     */
    public function describeInstanceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceInfo',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description ## Usage notes
     * You can call the DescribeInstanceInfo operation to query the information about the WAF instance within your Alibaba Cloud account. The information includes the ID, version, status, and expiration time of the instance.
     *  *
     * @param DescribeInstanceInfoRequest $request DescribeInstanceInfoRequest
     *
     * @return DescribeInstanceInfoResponse DescribeInstanceInfoResponse
     */
    public function describeInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSpecInfoRequest $request DescribeInstanceSpecInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSpecInfoResponse DescribeInstanceSpecInfoResponse
     */
    public function describeInstanceSpecInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSpecInfo',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSpecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSpecInfoRequest $request DescribeInstanceSpecInfoRequest
     *
     * @return DescribeInstanceSpecInfoResponse DescribeInstanceSpecInfoResponse
     */
    public function describeInstanceSpecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogServiceStatusRequest $request DescribeLogServiceStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogServiceStatusResponse DescribeLogServiceStatusResponse
     */
    public function describeLogServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogServiceStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogServiceStatusRequest $request DescribeLogServiceStatusRequest
     *
     * @return DescribeLogServiceStatusResponse DescribeLogServiceStatusResponse
     */
    public function describeLogServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProtectionModuleCodeConfigRequest $request DescribeProtectionModuleCodeConfigRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProtectionModuleCodeConfigResponse DescribeProtectionModuleCodeConfigResponse
     */
    public function describeProtectionModuleCodeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->codeType)) {
            $query['CodeType'] = $request->codeType;
        }
        if (!Utils::isUnset($request->codeValue)) {
            $query['CodeValue'] = $request->codeValue;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProtectionModuleCodeConfig',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProtectionModuleCodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProtectionModuleCodeConfigRequest $request DescribeProtectionModuleCodeConfigRequest
     *
     * @return DescribeProtectionModuleCodeConfigResponse DescribeProtectionModuleCodeConfigResponse
     */
    public function describeProtectionModuleCodeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleCodeConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProtectionModuleModeRequest $request DescribeProtectionModuleModeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProtectionModuleModeResponse DescribeProtectionModuleModeResponse
     */
    public function describeProtectionModuleModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProtectionModuleMode',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProtectionModuleModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProtectionModuleModeRequest $request DescribeProtectionModuleModeRequest
     *
     * @return DescribeProtectionModuleModeResponse DescribeProtectionModuleModeResponse
     */
    public function describeProtectionModuleMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleModeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProtectionModuleRulesRequest $request DescribeProtectionModuleRulesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProtectionModuleRulesResponse DescribeProtectionModuleRulesResponse
     */
    public function describeProtectionModuleRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProtectionModuleRules',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProtectionModuleRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProtectionModuleRulesRequest $request DescribeProtectionModuleRulesRequest
     *
     * @return DescribeProtectionModuleRulesResponse DescribeProtectionModuleRulesResponse
     */
    public function describeProtectionModuleRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProtectionModuleStatusRequest $request DescribeProtectionModuleStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProtectionModuleStatusResponse DescribeProtectionModuleStatusResponse
     */
    public function describeProtectionModuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProtectionModuleStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProtectionModuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProtectionModuleStatusRequest $request DescribeProtectionModuleStatusRequest
     *
     * @return DescribeProtectionModuleStatusResponse DescribeProtectionModuleStatusResponse
     */
    public function describeProtectionModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRuleGroupsRequest $request DescribeRuleGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRuleGroupsResponse DescribeRuleGroupsResponse
     */
    public function describeRuleGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->wafLang)) {
            $query['WafLang'] = $request->wafLang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleGroups',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRuleGroupsRequest $request DescribeRuleGroupsRequest
     *
     * @return DescribeRuleGroupsResponse DescribeRuleGroupsResponse
     */
    public function describeRuleGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRulesRequest $request DescribeRulesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRulesResponse DescribeRulesResponse
     */
    public function describeRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationType)) {
            $query['ApplicationType'] = $request->applicationType;
        }
        if (!Utils::isUnset($request->cveIdKey)) {
            $query['CveIdKey'] = $request->cveIdKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->protectionType)) {
            $query['ProtectionType'] = $request->protectionType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->ruleGroupId)) {
            $query['RuleGroupId'] = $request->ruleGroupId;
        }
        if (!Utils::isUnset($request->ruleIdKey)) {
            $query['RuleIdKey'] = $request->ruleIdKey;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRules',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRulesRequest $request DescribeRulesRequest
     *
     * @return DescribeRulesResponse DescribeRulesResponse
     */
    public function describeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWafSourceIpSegmentRequest $request DescribeWafSourceIpSegmentRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWafSourceIpSegmentResponse DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWafSourceIpSegment',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWafSourceIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWafSourceIpSegmentRequest $request DescribeWafSourceIpSegmentRequest
     *
     * @return DescribeWafSourceIpSegmentResponse DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWafSourceIpSegmentWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a domain name.
     *  *
     * @param ModifyDomainRequest $request ModifyDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDomainResponse ModifyDomainResponse
     */
    public function modifyDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessHeaderMode)) {
            $query['AccessHeaderMode'] = $request->accessHeaderMode;
        }
        if (!Utils::isUnset($request->accessHeaders)) {
            $query['AccessHeaders'] = $request->accessHeaders;
        }
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->cloudNativeInstances)) {
            $query['CloudNativeInstances'] = $request->cloudNativeInstances;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->connectionTime)) {
            $query['ConnectionTime'] = $request->connectionTime;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->http2Port)) {
            $query['Http2Port'] = $request->http2Port;
        }
        if (!Utils::isUnset($request->httpPort)) {
            $query['HttpPort'] = $request->httpPort;
        }
        if (!Utils::isUnset($request->httpToUserIp)) {
            $query['HttpToUserIp'] = $request->httpToUserIp;
        }
        if (!Utils::isUnset($request->httpsPort)) {
            $query['HttpsPort'] = $request->httpsPort;
        }
        if (!Utils::isUnset($request->httpsRedirect)) {
            $query['HttpsRedirect'] = $request->httpsRedirect;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipFollowStatus)) {
            $query['IpFollowStatus'] = $request->ipFollowStatus;
        }
        if (!Utils::isUnset($request->isAccessProduct)) {
            $query['IsAccessProduct'] = $request->isAccessProduct;
        }
        if (!Utils::isUnset($request->keepalive)) {
            $query['Keepalive'] = $request->keepalive;
        }
        if (!Utils::isUnset($request->keepaliveRequests)) {
            $query['KeepaliveRequests'] = $request->keepaliveRequests;
        }
        if (!Utils::isUnset($request->keepaliveTimeout)) {
            $query['KeepaliveTimeout'] = $request->keepaliveTimeout;
        }
        if (!Utils::isUnset($request->loadBalancing)) {
            $query['LoadBalancing'] = $request->loadBalancing;
        }
        if (!Utils::isUnset($request->logHeaders)) {
            $query['LogHeaders'] = $request->logHeaders;
        }
        if (!Utils::isUnset($request->readTime)) {
            $query['ReadTime'] = $request->readTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->retry)) {
            $query['Retry'] = $request->retry;
        }
        if (!Utils::isUnset($request->sniHost)) {
            $query['SniHost'] = $request->sniHost;
        }
        if (!Utils::isUnset($request->sniStatus)) {
            $query['SniStatus'] = $request->sniStatus;
        }
        if (!Utils::isUnset($request->sourceIps)) {
            $query['SourceIps'] = $request->sourceIps;
        }
        if (!Utils::isUnset($request->writeTime)) {
            $query['WriteTime'] = $request->writeTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDomain',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a domain name.
     *  *
     * @param ModifyDomainRequest $request ModifyDomainRequest
     *
     * @return ModifyDomainResponse ModifyDomainResponse
     */
    public function modifyDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDomainIpv6StatusRequest $request ModifyDomainIpv6StatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDomainIpv6StatusResponse ModifyDomainIpv6StatusResponse
     */
    public function modifyDomainIpv6StatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDomainIpv6Status',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDomainIpv6StatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDomainIpv6StatusRequest $request ModifyDomainIpv6StatusRequest
     *
     * @return ModifyDomainIpv6StatusResponse ModifyDomainIpv6StatusResponse
     */
    public function modifyDomainIpv6Status($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainIpv6StatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogRetrievalStatusRequest $request ModifyLogRetrievalStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLogRetrievalStatusResponse ModifyLogRetrievalStatusResponse
     */
    public function modifyLogRetrievalStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLogRetrievalStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLogRetrievalStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLogRetrievalStatusRequest $request ModifyLogRetrievalStatusRequest
     *
     * @return ModifyLogRetrievalStatusResponse ModifyLogRetrievalStatusResponse
     */
    public function modifyLogRetrievalStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogRetrievalStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogServiceStatusRequest $request ModifyLogServiceStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLogServiceStatusResponse ModifyLogServiceStatusResponse
     */
    public function modifyLogServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLogServiceStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLogServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLogServiceStatusRequest $request ModifyLogServiceStatusRequest
     *
     * @return ModifyLogServiceStatusResponse ModifyLogServiceStatusResponse
     */
    public function modifyLogServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionModuleModeRequest $request ModifyProtectionModuleModeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProtectionModuleModeResponse ModifyProtectionModuleModeResponse
     */
    public function modifyProtectionModuleModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyProtectionModuleMode',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProtectionModuleModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyProtectionModuleModeRequest $request ModifyProtectionModuleModeRequest
     *
     * @return ModifyProtectionModuleModeResponse ModifyProtectionModuleModeResponse
     */
    public function modifyProtectionModuleMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleModeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionModuleRuleRequest $request ModifyProtectionModuleRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProtectionModuleRuleResponse ModifyProtectionModuleRuleResponse
     */
    public function modifyProtectionModuleRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lockVersion)) {
            $query['LockVersion'] = $request->lockVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyProtectionModuleRule',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProtectionModuleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyProtectionModuleRuleRequest $request ModifyProtectionModuleRuleRequest
     *
     * @return ModifyProtectionModuleRuleResponse ModifyProtectionModuleRuleResponse
     */
    public function modifyProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionModuleStatusRequest $request ModifyProtectionModuleStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProtectionModuleStatusResponse ModifyProtectionModuleStatusResponse
     */
    public function modifyProtectionModuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->moduleStatus)) {
            $query['ModuleStatus'] = $request->moduleStatus;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyProtectionModuleStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProtectionModuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyProtectionModuleStatusRequest $request ModifyProtectionModuleStatusRequest
     *
     * @return ModifyProtectionModuleStatusResponse ModifyProtectionModuleStatusResponse
     */
    public function modifyProtectionModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionRuleCacheStatusRequest $request ModifyProtectionRuleCacheStatusRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProtectionRuleCacheStatusResponse ModifyProtectionRuleCacheStatusResponse
     */
    public function modifyProtectionRuleCacheStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyProtectionRuleCacheStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProtectionRuleCacheStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyProtectionRuleCacheStatusRequest $request ModifyProtectionRuleCacheStatusRequest
     *
     * @return ModifyProtectionRuleCacheStatusResponse ModifyProtectionRuleCacheStatusResponse
     */
    public function modifyProtectionRuleCacheStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionRuleCacheStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionRuleStatusRequest $request ModifyProtectionRuleStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProtectionRuleStatusResponse ModifyProtectionRuleStatusResponse
     */
    public function modifyProtectionRuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseType)) {
            $query['DefenseType'] = $request->defenseType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lockVersion)) {
            $query['LockVersion'] = $request->lockVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['RuleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyProtectionRuleStatus',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProtectionRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyProtectionRuleStatusRequest $request ModifyProtectionRuleStatusRequest
     *
     * @return ModifyProtectionRuleStatusResponse ModifyProtectionRuleStatusResponse
     */
    public function modifyProtectionRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionRuleStatusWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainRuleGroupRequest $request SetDomainRuleGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDomainRuleGroupResponse SetDomainRuleGroupResponse
     */
    public function setDomainRuleGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ruleGroupId)) {
            $query['RuleGroupId'] = $request->ruleGroupId;
        }
        if (!Utils::isUnset($request->wafAiStatus)) {
            $query['WafAiStatus'] = $request->wafAiStatus;
        }
        if (!Utils::isUnset($request->wafVersion)) {
            $query['WafVersion'] = $request->wafVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainRuleGroup',
            'version'     => '2019-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainRuleGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainRuleGroupRequest $request SetDomainRuleGroupRequest
     *
     * @return SetDomainRuleGroupResponse SetDomainRuleGroupResponse
     */
    public function setDomainRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainRuleGroupWithOptions($request, $runtime);
    }
}
