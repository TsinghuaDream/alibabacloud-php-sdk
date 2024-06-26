<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest\resourcesToImport;
use AlibabaCloud\Tea\Model;

class CreateChangeSetRequest extends Model
{
    /**
     * @description The name of the change set.\\
     * This parameter is required.
     * @example MyChangeSet
     *
     * @var string
     */
    public $changeSetName;

    /**
     * @description The type of the change set. Valid values:
     *
     *   CREATE: creates a change set for a new stack.
     *   UPDATE (default): creates a change set for an existing stack.
     *   IMPORT: creates a change set for a new stack or an existing stack to import resources that are not managed by ROS.
     *
     * >
     *
     *   You cannot set ChangeSetType to UPDATE when you create a change set for a new stack. You cannot set ChangeSetType to CREATE when you create a change set for an existing stack.
     *
     *   If you set ChangeSetType to Import, you cannot configure a stack policy. You can specify ChangeSetType only when you create or update a stack.
     *
     * @example UPDATE
     *
     * @var string
     */
    public $changeSetType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests.\\
     * For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/134212.html).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the change set. The description can be up to 1,024 bytes in length.
     *
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to disable rollback when the stack fails to be created.\\
     * Valid values:
     *
     *   true: disables rollback for the stack when the stack fails to be created.
     *   false (default): enables rollback for the stack when the stack fails to be created.
     *
     * > This parameter takes effect only if you set ChangeSetType to CREATE or IMPORT.
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description The callback URLs that are used to receive stack events.
     *
     * @example http://my-site.com/ros-notify
     *
     * @var string[]
     */
    public $notificationURLs;

    /**
     * @description The maximum number of concurrent operations that can be performed on resources. By default, this parameter is empty. You can set this parameter to an integer that is greater than or equal to 0. If you set this parameter to a specific value, ROS associates the value with the stack. The value can affect subsequent operations on the stack.
     *
     * This parameter takes effect only if you set ChangeSetType to CREATE or UPDATE.
     *
     *   Valid values for change sets of the CREATE type:
     *
     *   If you set this parameter to an integer that is greater than 0, the integer is used.
     *   If you set this parameter to 0 or leave this parameter empty, no limit is imposed on ROS stacks. However, the default value in Terraform is used for Terraform stacks. In most cases, the default value in Terraform is 10.
     *
     *   Valid values for change sets of the UPDATE type:
     *
     *   If you set this parameter to an integer that is greater than 0, the integer is used.
     *   If you set this parameter to 0, no limit is imposed on ROS stacks. However, the default value in Terraform is used for Terraform stacks. In most cases, the default value in Terraform is 10.
     *   If you leave this parameter empty, the value that you specified for this parameter in the previous request is used. If you left this parameter empty in the previous request, no limit is imposed on ROS stacks. However, the default value in Terraform is used for Terraform stacks. In most cases, the default value in Terraform is 10.
     *
     * @example 1
     *
     * @var int
     */
    public $parallelism;

    /**
     * @description The parameters that are defined in the template.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The name of the Resource Access Management (RAM) role. ROS assumes the RAM role to create the stack and uses the credentials of the role to call the APIs of Alibaba Cloud services.\\
     * For more information about RAM roles, see [Use a stack role](https://help.aliyun.com/document_detail/2568025.html).
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of the change set.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable replacement update if a resource property is changed and you cannot modify the new resource property. For a change, the physical ID of the resource remains unchanged. For a replacement update, the existing resource is deleted, a new resource is created, and the physical ID of the resource is changed. Valid values:
     *
     *   Enabled
     *   Disabled (default)
     *
     * > Operations that you perform to modify the resource properties for an update take precedence over operations you perform to replace the resource properties for an update. This parameter takes effect only if you set ChangeSetType to UPDATE.
     * @example Disabled
     *
     * @var string
     */
    public $replacementOption;

    /**
     * @description The resources that you want to import to the stack.
     *
     * @var resourcesToImport[]
     */
    public $resourcesToImport;

    /**
     * @description The ID of the stack for which you want to create the change set. ROS compares the stack information with the information that you submit, such as an updated template or parameter value, to generate the change set.\\
     * >  This parameter takes effect only when ChangeSetType is set to UPDATE or IMPORT.
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The name of the stack for which you want to create the change set.\\
     * > This parameter takes effect only if you set ChangeSetType to CREATE or IMPORT.
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The structure that contains the stack policy body. The policy body must be 1 to 16,384 bytes in length.
     *
     * If you set ChangeSetType to **CREATE**, you can specify StackPolicyBody or StackPolicyURL.
     *
     * If you set ChangeSetType to **UPDATE**, you can specify only one of the following parameters:
     *
     *   StackPolicyBody
     *   StackPolicyURL
     *   StackPolicyDuringUpdateBody
     *   StackPolicyDuringUpdateURL
     *
     * @example {"Statement":[{"Effect":"Allow","Action":"Update:*","Principal":"*","Resource":"*"}]}
     *
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @description The structure of the temporary overriding stack policy. The policy body must be 1 to 16,384 bytes in length.\\
     * This parameter takes effect only if you set ChangeSetType to UPDATE. You can specify only one of the following parameters:
     *
     *   StackPolicyBody
     *   StackPolicyURL
     *   StackPolicyDuringUpdateBody
     *   StackPolicyDuringUpdateURL
     *
     * @example {"Statement":[{"Effect":"Allow","Action":"Update:*","Principal":"*","Resource":"*"}]}
     *
     * @var string
     */
    public $stackPolicyDuringUpdateBody;

    /**
     * @description The URL of the stack policy based on which the stack is updated. The URL must point to a policy that is located on an HTTP or HTTPS web server or in an OSS bucket, such as oss://ros/stack-policy/demo and oss://ros/stack-policy/demo?RegionId=cn-hangzhou. The policy file can be up to 16,384 bytes in length.
     *
     * If you need to update protected resources, specify a temporary overriding stack policy for the resources during the update. If you do not specify a stack policy, the existing policy that is associated with the stack is used. This parameter takes effect only if you set ChangeSetType to UPDATE. You can specify only one of the following parameters:
     *
     *   StackPolicyBody
     *   StackPolicyURL
     *   StackPolicyDuringUpdateBody
     *   StackPolicyDuringUpdateURL
     *
     * @example oss://ros/stack-policy/demo
     *
     * @var string
     */
    public $stackPolicyDuringUpdateURL;

    /**
     * @description The URL of the file that contains the stack policy. The URL must point to a policy that is located on an HTTP or HTTPS web server or in an Object Storage Service (OSS) bucket, such as oss://ros/stack-policy/demo or oss://ros/stack-policy/demo?RegionId=cn-hangzhou. The policy file can be up to 16,384 bytes in length.
     *
     * >  If you do not specify the region ID of the OSS bucket, the value of RegionId is used.
     *
     * If you set ChangeSetType to **CREATE**, you can specify StackPolicyBody or StackPolicyURL.
     *
     * If you set ChangeSetType to **UPDATE**, you can specify only one of the following parameters:
     *
     *   StackPolicyBody
     *   StackPolicyURL
     *   StackPolicyDuringUpdateBody
     *   StackPolicyDuringUpdateURL
     *
     * @example oss://ros/stack-policy/demo
     *
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @description The template ID. This parameter applies to shared templates and private templates.
     *
     * >  You can specify only one of the following parameters: TemplateBody, TemplateURL, and TemplateId.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The ID of the resource scenario. In this example, this parameter specifies the ID of a resource management scenario.
     *
     * You can call the [ListTemplateScratches](https://help.aliyun.com/document_detail/610832.html) operation to query the ID of the resource management scenario.
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an OSS bucket, such as oss://ros/template/demo and oss://ros/template/demo?RegionId=cn-hangzhou. The template body can be up to 524,288 bytes in length.
     *
     * The URL can be up to 1,024 bytes in length.
     * @example oss://ros/template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The version of the template.
     *
     * > This parameter takes effect only if you specify TemplateId.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @description The amount of time that can elapse before the stack enters the CREATE_FAILED or UPDATE_FAILED state.\\
     * If you set ChangeSetType to CREATE, this parameter is required. If you set ChangeSetType to UPDATE, this parameter is optional.
     *
     *   Unit: minutes.
     *   Valid values: 10 to 1440.
     *   Default value: 60.
     *
     * @example 12
     *
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @description Specifies whether to use the values that were passed last time for the parameters that you do not specify in the current request. Valid values:
     *
     *   true
     *   false (default)
     *
     * > This parameter takes effect only if you set ChangeSetType to UPDATE or IMPORT.
     * @example true
     *
     * @var bool
     */
    public $usePreviousParameters;
    protected $_name = [
        'changeSetName'               => 'ChangeSetName',
        'changeSetType'               => 'ChangeSetType',
        'clientToken'                 => 'ClientToken',
        'description'                 => 'Description',
        'disableRollback'             => 'DisableRollback',
        'notificationURLs'            => 'NotificationURLs',
        'parallelism'                 => 'Parallelism',
        'parameters'                  => 'Parameters',
        'ramRoleName'                 => 'RamRoleName',
        'regionId'                    => 'RegionId',
        'replacementOption'           => 'ReplacementOption',
        'resourcesToImport'           => 'ResourcesToImport',
        'stackId'                     => 'StackId',
        'stackName'                   => 'StackName',
        'stackPolicyBody'             => 'StackPolicyBody',
        'stackPolicyDuringUpdateBody' => 'StackPolicyDuringUpdateBody',
        'stackPolicyDuringUpdateURL'  => 'StackPolicyDuringUpdateURL',
        'stackPolicyURL'              => 'StackPolicyURL',
        'templateBody'                => 'TemplateBody',
        'templateId'                  => 'TemplateId',
        'templateScratchId'           => 'TemplateScratchId',
        'templateURL'                 => 'TemplateURL',
        'templateVersion'             => 'TemplateVersion',
        'timeoutInMinutes'            => 'TimeoutInMinutes',
        'usePreviousParameters'       => 'UsePreviousParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSetName) {
            $res['ChangeSetName'] = $this->changeSetName;
        }
        if (null !== $this->changeSetType) {
            $res['ChangeSetType'] = $this->changeSetType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = $this->notificationURLs;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replacementOption) {
            $res['ReplacementOption'] = $this->replacementOption;
        }
        if (null !== $this->resourcesToImport) {
            $res['ResourcesToImport'] = [];
            if (null !== $this->resourcesToImport && \is_array($this->resourcesToImport)) {
                $n = 0;
                foreach ($this->resourcesToImport as $item) {
                    $res['ResourcesToImport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->stackPolicyDuringUpdateBody) {
            $res['StackPolicyDuringUpdateBody'] = $this->stackPolicyDuringUpdateBody;
        }
        if (null !== $this->stackPolicyDuringUpdateURL) {
            $res['StackPolicyDuringUpdateURL'] = $this->stackPolicyDuringUpdateURL;
        }
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->usePreviousParameters) {
            $res['UsePreviousParameters'] = $this->usePreviousParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChangeSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSetName'])) {
            $model->changeSetName = $map['ChangeSetName'];
        }
        if (isset($map['ChangeSetType'])) {
            $model->changeSetType = $map['ChangeSetType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = $map['NotificationURLs'];
            }
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplacementOption'])) {
            $model->replacementOption = $map['ReplacementOption'];
        }
        if (isset($map['ResourcesToImport'])) {
            if (!empty($map['ResourcesToImport'])) {
                $model->resourcesToImport = [];
                $n                        = 0;
                foreach ($map['ResourcesToImport'] as $item) {
                    $model->resourcesToImport[$n++] = null !== $item ? resourcesToImport::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackPolicyDuringUpdateBody'])) {
            $model->stackPolicyDuringUpdateBody = $map['StackPolicyDuringUpdateBody'];
        }
        if (isset($map['StackPolicyDuringUpdateURL'])) {
            $model->stackPolicyDuringUpdateURL = $map['StackPolicyDuringUpdateURL'];
        }
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['UsePreviousParameters'])) {
            $model->usePreviousParameters = $map['UsePreviousParameters'];
        }

        return $model;
    }
}
