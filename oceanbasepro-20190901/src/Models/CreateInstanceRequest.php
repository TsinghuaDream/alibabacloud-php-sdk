<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic renewal.
     * - false: disables automatic renewal for the instance. This is the default value.
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The automatic renewal period of the instance. This parameter is required when the AutoRenew parameter is set to true. Valid values:
     * - If the PeriodUnit parameter is set to Month: "1", "2", "3", "6", and "12".
     * @example 2
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The billing method of the instance. Valid values:
     * This parameter is required.
     * @example PrePay
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example x86
     *
     * @var string
     */
    public $cpuArch;

    /**
     * @description The size of the storage space,in GB.
     * The preceding minimum storage space sizes are the default storage space sizes of the corresponding cluster specification plans.
     * @example 200
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The type of the storage disk where the cluster is deployed. This parameter takes effect only for Standard Cluster Edition (Cloud Disk).
     * - cloud_essd_pl0: ESSD PL0. Default value: cloud_essd_pl1.
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Specifies whether to perform only a dry run for the request. Default value: false. Valid values:
     * - false: The actual request is sent and no dry run is performed. The instance is created if the requirements are met. By default, the DryRunResult parameter returns false if you set DryRun to false.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The specifications of the cluster.
     * This parameter is required.
     * @example 14C70GB
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The name of the OceanBase cluster.
     * If this parameter is not specified, the value is the instance ID of the cluster by default.
     * @example amap_aos_tx_ob
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Specifies whether to enable the control group feature.
     * - false
     * @example true
     *
     * @var string
     */
    public $isolationOptimization;

    /**
     * @description OceanBase Server version number.
     *
     * @example 2.2.77
     *
     * @var string
     */
    public $obVersion;

    /**
     * @description The valid duration of the purchased resources. The unit is specified by the PeriodUnit parameter.
     * - When the PeriodUnit parameter is set to Year: "1", "2", "3".
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the valid duration of the purchased resources.
     * Default value: Month for subscription, and Hour for pay-as-you-go.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Primary instance ID.
     *
     * @example ob3h8ytroxxxxx
     *
     * @var string
     */
    public $primaryInstance;

    /**
     * @description Primary instance region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $primaryRegion;

    /**
     * @description The number of full-featured replicas.
     * - An ApsaraDB for OceanBase instance deployed in a single zone supports 3F, 2F1A, or 2F1L, depending on the version.
     * @example 3F
     *
     * @var string
     */
    public $replicaMode;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The series of the OceanBase cluster. Valid values:
     * This parameter is required.
     * @example Normal
     *
     * @var string
     */
    public $series;

    /**
     * @description The ID of the zone to which the instance belongs.
     * This parameter is required.
     * @example cn-hangzhou-h,cn-hangzhou-i,cn-hangzhou-j
     *
     * @var string
     */
    public $zones;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'autoRenewPeriod'       => 'AutoRenewPeriod',
        'chargeType'            => 'ChargeType',
        'cpuArch'               => 'CpuArch',
        'diskSize'              => 'DiskSize',
        'diskType'              => 'DiskType',
        'dryRun'                => 'DryRun',
        'instanceClass'         => 'InstanceClass',
        'instanceName'          => 'InstanceName',
        'isolationOptimization' => 'IsolationOptimization',
        'obVersion'             => 'ObVersion',
        'period'                => 'Period',
        'periodUnit'            => 'PeriodUnit',
        'primaryInstance'       => 'PrimaryInstance',
        'primaryRegion'         => 'PrimaryRegion',
        'replicaMode'           => 'ReplicaMode',
        'resourceGroupId'       => 'ResourceGroupId',
        'series'                => 'Series',
        'zones'                 => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isolationOptimization) {
            $res['IsolationOptimization'] = $this->isolationOptimization;
        }
        if (null !== $this->obVersion) {
            $res['ObVersion'] = $this->obVersion;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->primaryInstance) {
            $res['PrimaryInstance'] = $this->primaryInstance;
        }
        if (null !== $this->primaryRegion) {
            $res['PrimaryRegion'] = $this->primaryRegion;
        }
        if (null !== $this->replicaMode) {
            $res['ReplicaMode'] = $this->replicaMode;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsolationOptimization'])) {
            $model->isolationOptimization = $map['IsolationOptimization'];
        }
        if (isset($map['ObVersion'])) {
            $model->obVersion = $map['ObVersion'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PrimaryInstance'])) {
            $model->primaryInstance = $map['PrimaryInstance'];
        }
        if (isset($map['PrimaryRegion'])) {
            $model->primaryRegion = $map['PrimaryRegion'];
        }
        if (isset($map['ReplicaMode'])) {
            $model->replicaMode = $map['ReplicaMode'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['Zones'])) {
            $model->zones = $map['Zones'];
        }

        return $model;
    }
}
