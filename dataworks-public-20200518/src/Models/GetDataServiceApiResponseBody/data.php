<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\registrationDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\scriptDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiResponseBody\data\wizardDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the DataService Studio API.
     *
     * @example 10000
     *
     * @var int
     */
    public $apiId;

    /**
     * @description The type of the API. Valid values: 0, 1, and 2. The value 0 indicates that the API is generated in wizard mode. The value 1 indicates that the API is generated in script mode. The value 2 indicates that the API is generated by registration.
     *
     * @example 0
     *
     * @var int
     */
    public $apiMode;

    /**
     * @description The name of the API.
     *
     * @example Name of the test API
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The path of the API.
     *
     * @example /test/1
     *
     * @var string
     */
    public $apiPath;

    /**
     * @description The creation time.
     *
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the creator of the API.
     *
     * @example 1234567
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The description.
     *
     * @example Description of the test API
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the folder.
     *
     * @example 0
     *
     * @var int
     */
    public $folderId;

    /**
     * @description The ID of the group.
     *
     * @example ab123****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The time when the API was last modified.
     *
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who last modified the API.
     *
     * @example 2345678
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description The ID of the workspace.
     *
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The list of fields.
     *
     * @var int[]
     */
    public $protocols;

    /**
     * @description The details of the API generated by registration. This parameter is returned only if the API is generated by registration.
     *
     * @var registrationDetails
     */
    public $registrationDetails;

    /**
     * @description The request method of the API. Valid values: 0, 1, 2, and 3. The value 0 indicates the GET method, the value 1 indicates the POST method, the value 2 indicates the PUT method, and the value 3 indicates the DELETE method. APIs generated in wizard or script mode support the GET and POST methods. APIs generated by registration support the GET, POST, PUT, and DELETE methods.
     *
     * @example 0
     *
     * @var int
     */
    public $requestMethod;

    /**
     * @description The format in which the response of the API request is returned. Valid values: 0 and 1. The value 0 indicates the JSON format. The value 1 indicates the XML format. APIs generated in wizard or script mode support the JSON format. APIs generated by registration support the JSON and XML formats.
     *
     * @example 0
     *
     * @var int
     */
    public $responseContentType;

    /**
     * @description The details of the API generated in script mode. This parameter is returned only if the API is generated in script mode.
     *
     * @var scriptDetails
     */
    public $scriptDetails;

    /**
     * @description The status of the API. Valid values: 0 and 1. The value 0 indicates that the API is not published. The value 1 indicates that the API is published.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example 10002
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The timeout period of the API request. Unit: milliseconds.
     *
     * @example 10000
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The scope in which the API is visible. Valid values: 0 and 1. The value 0 indicates that the API is visible to the members in a specific workspace. The value 1 indicates that the API is visible only to the API creator.
     *
     * @example 0
     *
     * @var int
     */
    public $visibleRange;

    /**
     * @description The details of the API generated in wizard mode. This parameter is returned only if the API is generated in wizard mode.
     *
     * @var wizardDetails
     */
    public $wizardDetails;
    protected $_name = [
        'apiId'               => 'ApiId',
        'apiMode'             => 'ApiMode',
        'apiName'             => 'ApiName',
        'apiPath'             => 'ApiPath',
        'createdTime'         => 'CreatedTime',
        'creatorId'           => 'CreatorId',
        'description'         => 'Description',
        'folderId'            => 'FolderId',
        'groupId'             => 'GroupId',
        'modifiedTime'        => 'ModifiedTime',
        'operatorId'          => 'OperatorId',
        'projectId'           => 'ProjectId',
        'protocols'           => 'Protocols',
        'registrationDetails' => 'RegistrationDetails',
        'requestMethod'       => 'RequestMethod',
        'responseContentType' => 'ResponseContentType',
        'scriptDetails'       => 'ScriptDetails',
        'status'              => 'Status',
        'tenantId'            => 'TenantId',
        'timeout'             => 'Timeout',
        'visibleRange'        => 'VisibleRange',
        'wizardDetails'       => 'WizardDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiMode) {
            $res['ApiMode'] = $this->apiMode;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->registrationDetails) {
            $res['RegistrationDetails'] = null !== $this->registrationDetails ? $this->registrationDetails->toMap() : null;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }
        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = null !== $this->scriptDetails ? $this->scriptDetails->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->visibleRange) {
            $res['VisibleRange'] = $this->visibleRange;
        }
        if (null !== $this->wizardDetails) {
            $res['WizardDetails'] = null !== $this->wizardDetails ? $this->wizardDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiMode'])) {
            $model->apiMode = $map['ApiMode'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['RegistrationDetails'])) {
            $model->registrationDetails = registrationDetails::fromMap($map['RegistrationDetails']);
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }
        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = scriptDetails::fromMap($map['ScriptDetails']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['VisibleRange'])) {
            $model->visibleRange = $map['VisibleRange'];
        }
        if (isset($map['WizardDetails'])) {
            $model->wizardDetails = wizardDetails::fromMap($map['WizardDetails']);
        }

        return $model;
    }
}
