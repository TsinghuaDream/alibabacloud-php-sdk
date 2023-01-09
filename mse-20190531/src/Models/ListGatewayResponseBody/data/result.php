<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\initConfig;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\internetSlb;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\slb;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether Application High Availability Service (AHAS) is activated.
     *
     * @example false
     *
     * @var bool
     */
    public $ahasOn;

    /**
     * @description The version of the application.
     *
     * @example 1.0.1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description Indicates whether Application Real-Time Monitoring Service (ARMS) is activated.
     *
     * @example false
     *
     * @var bool
     */
    public $armsOn;

    /**
     * @description The billing method.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The current version of the gateway.
     *
     * @example 0.1.0-mse-gw
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The time when the subscription gateway expires.
     *
     * @example 4792060800000
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The type of the gateway.
     *
     * @example Ingress
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-5017305290e14cebb8ce5cb6a4****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The version of the gateway.
     *
     * @example 1.2.9
     *
     * @var string
     */
    public $gatewayVersion;

    /**
     * @description The creation time.
     *
     * @example 2021-09-13 19:24:23
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2021-09-13 19:24:23
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the gateway.
     *
     * @example 153
     *
     * @var int
     */
    public $id;

    /**
     * @description The configurations.
     *
     * @var initConfig
     */
    public $initConfig;

    /**
     * @description The ID of the instance.
     *
     * @example mse_ingresspost-cn-0jbvrcex****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The details of the Internet-facing SLB instances.
     *
     * @var internetSlb[]
     */
    public $internetSlb;

    /**
     * @description The latest version of the gateway.
     *
     * @example 0.1.0-mse-gw
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @description The tag of the instance.
     *
     * @example {"tagKey":"tagValue"}
     *
     * @var string
     */
    public $mseTag;

    /**
     * @description Indicates whether the gateway can be forcefully updated.
     *
     * @example false
     *
     * @var bool
     */
    public $mustUpgrade;

    /**
     * @description The name of the gateway.
     *
     * @example tesa-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the user.
     *
     * @example 18278117654342
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of replicas.
     *
     * @example 2
     *
     * @var int
     */
    public $replica;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-97hg87vi****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether rollbacks are allowed.
     *
     * @example false
     *
     * @var bool
     */
    public $rollBack;

    /**
     * @description The details of the Server Load Balancer (SLB) instances.
     *
     * @var slb[]
     */
    public $slb;

    /**
     * @description The specifications of the gateway.
     *
     * @example MSE_GTW_1_2_200_c
     *
     * @var string
     */
    public $spec;

    /**
     * @description The gateway status.
     *
     *   0: The gateway is being created.
     *   1: The gateway fails to be created.
     *   2: The gateway is running.
     *   3: The gateway is changing.
     *   4: The gateway is scaling down.
     *   6: The gateway is scaling up.
     *   8: The gateway is being deleted.
     *   9: The gateway is suspended and to be released.
     *   10: The gateway is restarting.
     *   11: The gateway is being rebuilt.
     *   12: The gateway is updating.
     *   13: The gateway fails to be updated.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The description of the status.
     *
     * @example Restarting
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description Indicates whether WebAssembly (Wasm) is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportWasm;

    /**
     * @description The tag.
     *
     * @example test
     *
     * @var string
     */
    public $tag;

    /**
     * @description Indicates whether the gateway can be updated.
     *
     * @example false
     *
     * @var bool
     */
    public $upgrade;

    /**
     * @description The ID of the secondary vSwitch.
     *
     * @example vsw-bpbrveck45nf****
     *
     * @var string
     */
    public $vswitch2;
    protected $_name = [
        'ahasOn'          => 'AhasOn',
        'appVersion'      => 'AppVersion',
        'armsOn'          => 'ArmsOn',
        'chargeType'      => 'ChargeType',
        'currentVersion'  => 'CurrentVersion',
        'endDate'         => 'EndDate',
        'gatewayType'     => 'GatewayType',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gatewayVersion'  => 'GatewayVersion',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'initConfig'      => 'InitConfig',
        'instanceId'      => 'InstanceId',
        'internetSlb'     => 'InternetSlb',
        'latestVersion'   => 'LatestVersion',
        'mseTag'          => 'MseTag',
        'mustUpgrade'     => 'MustUpgrade',
        'name'            => 'Name',
        'primaryUser'     => 'PrimaryUser',
        'region'          => 'Region',
        'replica'         => 'Replica',
        'resourceGroupId' => 'ResourceGroupId',
        'rollBack'        => 'RollBack',
        'slb'             => 'Slb',
        'spec'            => 'Spec',
        'status'          => 'Status',
        'statusDesc'      => 'StatusDesc',
        'supportWasm'     => 'SupportWasm',
        'tag'             => 'Tag',
        'upgrade'         => 'Upgrade',
        'vswitch2'        => 'Vswitch2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ahasOn) {
            $res['AhasOn'] = $this->ahasOn;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->armsOn) {
            $res['ArmsOn'] = $this->armsOn;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gatewayVersion) {
            $res['GatewayVersion'] = $this->gatewayVersion;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->initConfig) {
            $res['InitConfig'] = null !== $this->initConfig ? $this->initConfig->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetSlb) {
            $res['InternetSlb'] = [];
            if (null !== $this->internetSlb && \is_array($this->internetSlb)) {
                $n = 0;
                foreach ($this->internetSlb as $item) {
                    $res['InternetSlb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->mseTag) {
            $res['MseTag'] = $this->mseTag;
        }
        if (null !== $this->mustUpgrade) {
            $res['MustUpgrade'] = $this->mustUpgrade;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rollBack) {
            $res['RollBack'] = $this->rollBack;
        }
        if (null !== $this->slb) {
            $res['Slb'] = [];
            if (null !== $this->slb && \is_array($this->slb)) {
                $n = 0;
                foreach ($this->slb as $item) {
                    $res['Slb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->supportWasm) {
            $res['SupportWasm'] = $this->supportWasm;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
        }
        if (null !== $this->vswitch2) {
            $res['Vswitch2'] = $this->vswitch2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AhasOn'])) {
            $model->ahasOn = $map['AhasOn'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ArmsOn'])) {
            $model->armsOn = $map['ArmsOn'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GatewayVersion'])) {
            $model->gatewayVersion = $map['GatewayVersion'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InitConfig'])) {
            $model->initConfig = initConfig::fromMap($map['InitConfig']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetSlb'])) {
            if (!empty($map['InternetSlb'])) {
                $model->internetSlb = [];
                $n                  = 0;
                foreach ($map['InternetSlb'] as $item) {
                    $model->internetSlb[$n++] = null !== $item ? internetSlb::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['MseTag'])) {
            $model->mseTag = $map['MseTag'];
        }
        if (isset($map['MustUpgrade'])) {
            $model->mustUpgrade = $map['MustUpgrade'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RollBack'])) {
            $model->rollBack = $map['RollBack'];
        }
        if (isset($map['Slb'])) {
            if (!empty($map['Slb'])) {
                $model->slb = [];
                $n          = 0;
                foreach ($map['Slb'] as $item) {
                    $model->slb[$n++] = null !== $item ? slb::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['SupportWasm'])) {
            $model->supportWasm = $map['SupportWasm'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }
        if (isset($map['Vswitch2'])) {
            $model->vswitch2 = $map['Vswitch2'];
        }

        return $model;
    }
}
