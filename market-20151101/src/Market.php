<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Market\V20151101\Models\ActivateLicenseRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\ActivateLicenseResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\BindImagePackageRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\BindImagePackageResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\CreateCommodityRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\CreateCommodityResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\CreateRateRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\CreateRateResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DeleteCommodityRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DeleteCommodityResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommoditiesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommoditiesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommodityRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommodityResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCurrentNodeInfoRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCurrentNodeInfoResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductsRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductsResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectAttachmentsRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectAttachmentsResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectInfoRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectInfoResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectMessagesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectMessagesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectNodesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectNodesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectOperateLogsRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectOperateLogsResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeRateRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeRateResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\FinishCurrentProjectNodeRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\FinishCurrentProjectNodeResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\NotifyContractEventRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\NotifyContractEventResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\PauseProjectRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\PauseProjectResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\PushMeteringDataResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketCategoriesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\ResumeProjectRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\ResumeProjectResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\RollbackCurrentProjectNodeRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\RollbackCurrentProjectNodeResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\UpdateCommodityRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\UpdateCommodityResponse;
use AlibabaCloud\SDK\Market\V20151101\Models\UploadCommodityFileRequest;
use AlibabaCloud\SDK\Market\V20151101\Models\UploadCommodityFileResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Market extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'           => 'market.aliyuncs.com',
            'ap-northeast-1'        => 'market.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'market.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'market.ap-southeast-1.aliyuncs.com',
            'cn-beijing'            => 'market.aliyuncs.com',
            'cn-chengdu'            => 'market.aliyuncs.com',
            'cn-hongkong'           => 'market.aliyuncs.com',
            'cn-huhehaote'          => 'market.aliyuncs.com',
            'cn-qingdao'            => 'market.aliyuncs.com',
            'cn-shanghai'           => 'market.aliyuncs.com',
            'cn-shenzhen'           => 'market.aliyuncs.com',
            'cn-zhangjiakou'        => 'market.aliyuncs.com',
            'eu-central-1'          => 'market.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'market.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'market.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'market.ap-southeast-1.aliyuncs.com',
            'us-west-1'             => 'market.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'market.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'market.aliyuncs.com',
            'cn-shanghai-finance-1' => 'market.aliyuncs.com',
            'cn-north-2-gov-1'      => 'market.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('market', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateLicenseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identification)) {
            $query['Identification'] = $request->identification;
        }
        if (!Utils::isUnset($request->licenseCode)) {
            $query['LicenseCode'] = $request->licenseCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateLicense',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActivateLicenseRequest $request
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateLicenseWithOptions($request, $runtime);
    }

    /**
     * @param BindImagePackageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindImagePackageResponse
     */
    public function bindImagePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ecsInstanceId)) {
            $query['EcsInstanceId'] = $request->ecsInstanceId;
        }
        if (!Utils::isUnset($request->imagePackageInstanceId)) {
            $query['ImagePackageInstanceId'] = $request->imagePackageInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindImagePackage',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindImagePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindImagePackageRequest $request
     *
     * @return BindImagePackageResponse
     */
    public function bindImagePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindImagePackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommodityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCommodityResponse
     */
    public function createCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCommodity',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCommodityRequest $request
     *
     * @return CreateCommodityResponse
     */
    public function createCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommodityWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodity)) {
            $query['Commodity'] = $request->commodity;
        }
        if (!Utils::isUnset($request->orderSouce)) {
            $query['OrderSouce'] = $request->orderSouce;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateRateRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRateResponse
     */
    public function createRateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->score)) {
            $query['Score'] = $request->score;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRate',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRateRequest $request
     *
     * @return CreateRateResponse
     */
    public function createRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCommodityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCommodityResponse
     */
    public function deleteCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityId)) {
            $query['CommodityId'] = $request->commodityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCommodity',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCommodityRequest $request
     *
     * @return DeleteCommodityResponse
     */
    public function deleteCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommodityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommoditiesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCommoditiesResponse
     */
    public function describeCommoditiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCommodities',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommoditiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommoditiesRequest $request
     *
     * @return DescribeCommoditiesResponse
     */
    public function describeCommodities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommoditiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommodityRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeCommodityResponse
     */
    public function describeCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCommodity',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommodityRequest $request
     *
     * @return DescribeCommodityResponse
     */
    public function describeCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommodityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCurrentNodeInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCurrentNodeInfoResponse
     */
    public function describeCurrentNodeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCurrentNodeInfo',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCurrentNodeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCurrentNodeInfoRequest $request
     *
     * @return DescribeCurrentNodeInfoResponse
     */
    public function describeCurrentNodeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCurrentNodeInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->codes)) {
            $query['Codes'] = $request->codes;
        }
        if (!Utils::isUnset($request->exceptCodes)) {
            $query['ExceptCodes'] = $request->exceptCodes;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLicenseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeLicenseResponse
     */
    public function describeLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->licenseCode)) {
            $query['LicenseCode'] = $request->licenseCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLicense',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLicenseRequest $request
     *
     * @return DescribeLicenseResponse
     */
    public function describeLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLicenseWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrderRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeOrderResponse
     */
    public function describeOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrder',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrderRequest $request
     *
     * @return DescribeOrderResponse
     */
    public function describeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrderWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodity)) {
            $query['Commodity'] = $request->commodity;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProductRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeProductResponse
     */
    public function describeProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->queryDraft)) {
            $query['QueryDraft'] = $request->queryDraft;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProduct',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProductRequest $request
     *
     * @return DescribeProductResponse
     */
    public function describeProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProductsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeProductsResponse
     */
    public function describeProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchTerm)) {
            $query['SearchTerm'] = $request->searchTerm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProducts',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProductsRequest $request
     *
     * @return DescribeProductsResponse
     */
    public function describeProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectAttachmentsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeProjectAttachmentsResponse
     */
    public function describeProjectAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectAttachments',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProjectAttachmentsRequest $request
     *
     * @return DescribeProjectAttachmentsResponse
     */
    public function describeProjectAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectAttachmentsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeProjectInfoResponse
     */
    public function describeProjectInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectInfo',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProjectInfoRequest $request
     *
     * @return DescribeProjectInfoResponse
     */
    public function describeProjectInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectMessagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeProjectMessagesResponse
     */
    public function describeProjectMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectMessages',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProjectMessagesRequest $request
     *
     * @return DescribeProjectMessagesResponse
     */
    public function describeProjectMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectMessagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectNodesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeProjectNodesResponse
     */
    public function describeProjectNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectNodes',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProjectNodesRequest $request
     *
     * @return DescribeProjectNodesResponse
     */
    public function describeProjectNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectNodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectOperateLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeProjectOperateLogsResponse
     */
    public function describeProjectOperateLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjectOperateLogs',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProjectOperateLogsRequest $request
     *
     * @return DescribeProjectOperateLogsResponse
     */
    public function describeProjectOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectOperateLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeRateResponse
     */
    public function describeRateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRate',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRateRequest $request
     *
     * @return DescribeRateResponse
     */
    public function describeRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRateWithOptions($request, $runtime);
    }

    /**
     * @param FinishCurrentProjectNodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FinishCurrentProjectNodeResponse
     */
    public function finishCurrentProjectNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->templateForm)) {
            $query['TemplateForm'] = $request->templateForm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FinishCurrentProjectNode',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FinishCurrentProjectNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FinishCurrentProjectNodeRequest $request
     *
     * @return FinishCurrentProjectNodeResponse
     */
    public function finishCurrentProjectNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishCurrentProjectNodeWithOptions($request, $runtime);
    }

    /**
     * @param NotifyContractEventRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return NotifyContractEventResponse
     */
    public function notifyContractEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventMessage)) {
            $query['EventMessage'] = $request->eventMessage;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NotifyContractEvent',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NotifyContractEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param NotifyContractEventRequest $request
     *
     * @return NotifyContractEventResponse
     */
    public function notifyContractEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyContractEventWithOptions($request, $runtime);
    }

    /**
     * @param PauseProjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PauseProjectResponse
     */
    public function pauseProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PauseProject',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PauseProjectRequest $request
     *
     * @return PauseProjectResponse
     */
    public function pauseProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseProjectWithOptions($request, $runtime);
    }

    /**
     * @param PushMeteringDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PushMeteringDataResponse
     */
    public function pushMeteringDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->metering)) {
            $query['Metering'] = $request->metering;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushMeteringData',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushMeteringDataRequest $request
     *
     * @return PushMeteringDataResponse
     */
    public function pushMeteringData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMeteringDataWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryMarketCategoriesResponse
     */
    public function queryMarketCategoriesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryMarketCategories',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMarketCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QueryMarketCategoriesResponse
     */
    public function queryMarketCategories()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMarketCategoriesWithOptions($runtime);
    }

    /**
     * @param QueryMarketImagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMarketImagesResponse
     */
    public function queryMarketImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMarketImages',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMarketImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMarketImagesRequest $request
     *
     * @return QueryMarketImagesResponse
     */
    public function queryMarketImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMarketImagesWithOptions($request, $runtime);
    }

    /**
     * @param ResumeProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResumeProjectResponse
     */
    public function resumeProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeProject',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeProjectRequest $request
     *
     * @return ResumeProjectResponse
     */
    public function resumeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeProjectWithOptions($request, $runtime);
    }

    /**
     * @param RollbackCurrentProjectNodeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RollbackCurrentProjectNodeResponse
     */
    public function rollbackCurrentProjectNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackCurrentProjectNode',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackCurrentProjectNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackCurrentProjectNodeRequest $request
     *
     * @return RollbackCurrentProjectNodeResponse
     */
    public function rollbackCurrentProjectNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackCurrentProjectNodeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCommodityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateCommodityResponse
     */
    public function updateCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityId)) {
            $query['CommodityId'] = $request->commodityId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCommodity',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCommodityRequest $request
     *
     * @return UpdateCommodityResponse
     */
    public function updateCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCommodityWithOptions($request, $runtime);
    }

    /**
     * @param UploadCommodityFileRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UploadCommodityFileResponse
     */
    public function uploadCommodityFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileContentType)) {
            $query['FileContentType'] = $request->fileContentType;
        }
        if (!Utils::isUnset($request->fileResource)) {
            $query['FileResource'] = $request->fileResource;
        }
        if (!Utils::isUnset($request->fileResourceType)) {
            $query['FileResourceType'] = $request->fileResourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadCommodityFile',
            'version'     => '2015-11-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadCommodityFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadCommodityFileRequest $request
     *
     * @return UploadCommodityFileResponse
     */
    public function uploadCommodityFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCommodityFileWithOptions($request, $runtime);
    }
}
