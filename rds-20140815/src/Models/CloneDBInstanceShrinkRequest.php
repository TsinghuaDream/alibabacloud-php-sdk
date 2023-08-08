<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CloneDBInstanceShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Default value: true. Valid values:
     *
     *   **true**: enables automatic payment. Make sure that you have sufficient balance within your account.
     *   **false**: disables automatic payment. In this case, you must manually pay for the instance. You can perform the following operations to pay for the instance: Log on to the ApsaraDB for MongoDB console. In the upper-right corner of the page, click **Expenses**. On the page that appears, select **Orders** from the left-side navigation pane. On the Orders page, find the order and complete the payment.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the backup set.
     *
     * You can call the [DescribeBackups](~~26273~~) operation to query the backup sets.
     *
     * > You must specify at least one of the **BackupId** and **RestoreTime** parameters.
     * @example 902****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The type of backup that is used to restore the data of the original instance. Valid values:
     *
     *   **FullBackup**
     *   **IncrementalBackup**
     *
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @description This parameter is not publicly available.
     *
     * @example false
     *
     * @var string
     */
    public $bpeEnabled;

    /**
     * @description This parameter is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition.
     *   **HighAvailability**: RDS High-availability Edition.
     *   **AlwaysOn**: RDS Cluster Edition for SQL Server.
     *   **cluster**: RDS Cluster Edition for MySQL.
     *   **Finance**: RDS Enterprise Edition. This edition is available only on the China site (aliyun.com).
     *   **serverless_basic**: RDS Serverless Basic Edition.
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description The instance type of the new instance. For information, see [Primary ApsaraDB RDS instance types](~~26312~~).
     *
     * > By default, the new instance uses the same instance type as the original primary instance.
     * @example mysql.n1.micro.1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage capacity of the new instance. Unit: GB. You can increase the storage capacity in increments of 5 GB. For more information, see [Primary ApsaraDB RDS instance types](~~26312~~).
     *
     * > By default, the new instance has the same storage capacity as the original primary instance.
     * @example 1000
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the new instance. Valid values:
     *
     *   **local_ssd**: local SSD
     *   **cloud_ssd**: standard SSD
     *   **cloud_essd**: enhanced SSD (ESSD) of performance level 1 (PL1)
     *   **cloud_essd2**: ESSD of PL2
     *   **cloud_essd3**: ESSD of PL3
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The name of the database. If you specify more than one database, the value is in the following format: `Original database name 1,Original database name 2`.
     *
     * @example test1,test2
     *
     * @var string
     */
    public $dbNames;

    /**
     * @description The ID of the dedicated cluster.
     *
     * @example dhg-7a9xxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description Specifies whether to enable the release protection feature for the new instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **false**.
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The network type of the new instance. Valid values:
     *
     *   **VPC**
     *   **Classic**
     *
     * > By default, the new instance has the same network type as the original primary instance.
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The billing method of the read-only instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *   **Serverless**: serverless. This value is supported only for instances that run MySQL. For more information, see [Overview](~~411291~~).
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit that is used to calculate the billing cycle of the new instance. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * > If you set the PayType parameter to **Prepaid**, you must also specify this parameter.
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @description The internal IP address of the new instance, which must be within the CIDR block supported by the specified vSwitch. The system automatically assigns an internal IP address based on the values of the **VPCId** and **VSwitchId** parameters.
     *
     * @example 172.XX.XXX.69
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The region ID of the new instance. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to restore only the databases and tables that you specify. The value **1** specifies to restore only the specified databases and tables. If you do not want to restore only the specified databases or tables, you do not need to specify this parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $restoreTable;

    /**
     * @description The point in time to which you want to restore data. The point in time must fall within the specified backup retention period. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > You must specify at least one of the **BackupId** and **RestoreTime** parameters.
     * @example 2011-06-11T16:00:00Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The configuration of the serverless instance. You must specify this parameter only when you restore data to a new serverless instance.
     *
     * @var string
     */
    public $serverlessConfigShrink;

    /**
     * @description The information about the database and table that you want to restore. The value is in the following format: `[{"type":"db","name":"Name of Database 1","newname":"New name of Database 1","tables":[{"type":"table","name":"Name of Table 1 in Database 1","newname":"New name of Table 1"},{"type":"table","name":"Name of Table 2 in Database 1","newname":"New name of Table 2"}]},{"type":"db","name":"Name of Database 2","newname":"New name of Database 2","tables":[{"type":"table","name":"Name of Table 1 in Database 2","newname":"New name of Table 1"},{"type":"table","name":"Name of Table 2 in Database 2","newname":"New name of Table 2"}]}]`
     *
     * @example [{"type":"db","name":"testdb1","newname":"testdb1_new","tables":[{"type":"table","name":"testdb1table1","newname":"testdb1table1_new"}]}]
     *
     * @var string
     */
    public $tableMeta;

    /**
     * @description The subscription duration of the new instance. Valid values:
     *
     *   If you set the **Period** parameter to **Year**, the value of the UsedTime parameter ranges from **1 to 3**.
     *   If you set the **Period** parameter to **Month**, the value of the UsedTime parameter ranges from **1 to 9**.
     *
     * > If you set the PayType parameter to **Prepaid**, you must also specify this parameter.
     * @example 1
     *
     * @var int
     */
    public $usedTime;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * > Make sure that the VPC belongs to the required region.
     * @example vpc-uf6f7l4fg90xxxxxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch. The vSwitch must belong to the zone that is specified by the **ZoneId** parameter.
     *
     * >
     *
     *   If you set the **InstanceNetworkType** parameter to **VPC**, you must also specify this parameter.
     *
     *   If you specify the **ZoneSlaveId1** parameter, you must specify the IDs of two vSwitches for this parameter and separate the IDs with a comma (,).
     *
     * @example vsw-uf6adz52c2pxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the primary instance. You can call the [DescribeRegions](~~26243~~) operation to query the most recent zone list.
     *
     * > By default, the new instance resides in the same region as the original instance.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The zone ID of the secondary instance. If you set the ZoneIdSlave1 parameter and the **ZoneId** parameter to the same value, the single-zone deployment method is used. If you set the ZoneIdSlave1 parameter and the **ZoneId** parameter to different values, the multi-zone deployment method is used.
     *
     * @example cn-hangzhou-c
     *
     * @var string
     */
    public $zoneIdSlave1;

    /**
     * @description The zone ID of the logger instance. If you set the ZoneIdSlave2 parameter to the same value as the **ZoneId** parameter, the single-zone deployment method is used. If you set the ZoneIdSlave2 parameter to a different value from the **ZoneId** parameter, the multi-zone deployment method is used.
     *
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $zoneIdSlave2;
    protected $_name = [
        'autoPay'                => 'AutoPay',
        'backupId'               => 'BackupId',
        'backupType'             => 'BackupType',
        'bpeEnabled'             => 'BpeEnabled',
        'burstingEnabled'        => 'BurstingEnabled',
        'category'               => 'Category',
        'DBInstanceClass'        => 'DBInstanceClass',
        'DBInstanceId'           => 'DBInstanceId',
        'DBInstanceStorage'      => 'DBInstanceStorage',
        'DBInstanceStorageType'  => 'DBInstanceStorageType',
        'dbNames'                => 'DbNames',
        'dedicatedHostGroupId'   => 'DedicatedHostGroupId',
        'deletionProtection'     => 'DeletionProtection',
        'instanceNetworkType'    => 'InstanceNetworkType',
        'payType'                => 'PayType',
        'period'                 => 'Period',
        'privateIpAddress'       => 'PrivateIpAddress',
        'regionId'               => 'RegionId',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'restoreTable'           => 'RestoreTable',
        'restoreTime'            => 'RestoreTime',
        'serverlessConfigShrink' => 'ServerlessConfig',
        'tableMeta'              => 'TableMeta',
        'usedTime'               => 'UsedTime',
        'VPCId'                  => 'VPCId',
        'vSwitchId'              => 'VSwitchId',
        'zoneId'                 => 'ZoneId',
        'zoneIdSlave1'           => 'ZoneIdSlave1',
        'zoneIdSlave2'           => 'ZoneIdSlave2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->bpeEnabled) {
            $res['BpeEnabled'] = $this->bpeEnabled;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->restoreTable) {
            $res['RestoreTable'] = $this->restoreTable;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->serverlessConfigShrink) {
            $res['ServerlessConfig'] = $this->serverlessConfigShrink;
        }
        if (null !== $this->tableMeta) {
            $res['TableMeta'] = $this->tableMeta;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneIdSlave1) {
            $res['ZoneIdSlave1'] = $this->zoneIdSlave1;
        }
        if (null !== $this->zoneIdSlave2) {
            $res['ZoneIdSlave2'] = $this->zoneIdSlave2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneDBInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BpeEnabled'])) {
            $model->bpeEnabled = $map['BpeEnabled'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RestoreTable'])) {
            $model->restoreTable = $map['RestoreTable'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfigShrink = $map['ServerlessConfig'];
        }
        if (isset($map['TableMeta'])) {
            $model->tableMeta = $map['TableMeta'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneIdSlave1'])) {
            $model->zoneIdSlave1 = $map['ZoneIdSlave1'];
        }
        if (isset($map['ZoneIdSlave2'])) {
            $model->zoneIdSlave2 = $map['ZoneIdSlave2'];
        }

        return $model;
    }
}
