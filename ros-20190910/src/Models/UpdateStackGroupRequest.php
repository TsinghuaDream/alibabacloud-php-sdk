<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\deploymentTargets;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\parameters;
use AlibabaCloud\Tea\Model;

class UpdateStackGroupRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var mixed[]
     */
    public $operationPreferences;

    /**
     * @var string
     */
    public $administrationRoleName;

    /**
     * @var string
     */
    public $executionRoleName;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $permissionModel;

    /**
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @var deploymentTargets
     */
    public $deploymentTargets;
    protected $_name = [
        'regionId'               => 'RegionId',
        'stackGroupName'         => 'StackGroupName',
        'description'            => 'Description',
        'accountIds'             => 'AccountIds',
        'regionIds'              => 'RegionIds',
        'templateBody'           => 'TemplateBody',
        'templateURL'            => 'TemplateURL',
        'clientToken'            => 'ClientToken',
        'operationDescription'   => 'OperationDescription',
        'operationPreferences'   => 'OperationPreferences',
        'administrationRoleName' => 'AdministrationRoleName',
        'executionRoleName'      => 'ExecutionRoleName',
        'templateId'             => 'TemplateId',
        'templateVersion'        => 'TemplateVersion',
        'parameters'             => 'Parameters',
        'permissionModel'        => 'PermissionModel',
        'autoDeployment'         => 'AutoDeployment',
        'deploymentTargets'      => 'DeploymentTargets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationPreferences) {
            $res['OperationPreferences'] = $this->operationPreferences;
        }
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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
        if (null !== $this->permissionModel) {
            $res['PermissionModel'] = $this->permissionModel;
        }
        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toMap() : null;
        }
        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = null !== $this->deploymentTargets ? $this->deploymentTargets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = $map['RegionIds'];
            }
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = $map['OperationPreferences'];
        }
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
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
        if (isset($map['PermissionModel'])) {
            $model->permissionModel = $map['PermissionModel'];
        }
        if (isset($map['AutoDeployment'])) {
            $model->autoDeployment = autoDeployment::fromMap($map['AutoDeployment']);
        }
        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargets = deploymentTargets::fromMap($map['DeploymentTargets']);
        }

        return $model;
    }
}
