<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\dataDeliveryChannelInfo;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\retryState;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subscriptionDataType;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subscriptionHost;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob;
use AlibabaCloud\Tea\Model;

class DescribeDtsJobDetailResponseBody extends Model
{
    /**
     * @description The number of ApsaraDB RDS for MySQL instances that are attached to the source PolarDB-X 1.0 instance.
     *
     * @example new
     *
     * @var string
     */
    public $appName;

    /**
     * @description The consumption checkpoint of the change tracking instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-03-15T08:25:34Z
     *
     * @var string
     */
    public $beginTimestamp;

    /**
     * @var string
     */
    public $binlog;

    /**
     * @var string
     */
    public $binlogSite;

    /**
     * @var string
     */
    public $binlogTime;

    /**
     * @var string
     */
    public $bootTime;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance.
     *
     * @example 1616405159
     *
     * @var int
     */
    public $checkpoint;

    /**
     * @description The topic of the change tracking instance.
     *
     * >  This parameter is returned only if your change tracking instances are of the new version and you have called the [CreateConsumerGroup](https://help.aliyun.com/document_detail/122863.html) operation to create a consumer group.
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The downstream client information in the following format: \\<IP address of the downstream client>:\\<Random ID generated by DTS>.
     *
     * @example 2021-03-23T07:30:31Z
     *
     * @var string
     */
    public $consumptionCheckpoint;

    /**
     * @description The error code returned if the request failed.
     *
     * @example 114.***.***.**:dts********
     *
     * @var string
     */
    public $consumptionClient;

    /**
     * @description The end time of the task. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-03-16T08:01:19Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var dataDeliveryChannelInfo
     */
    public $dataDeliveryChannelInfo;

    /**
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;

    /**
     * @description The point in time when the task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2
     *
     * @var int
     */
    public $databaseCount;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example {\\"dtstestdata\\":{\\"all\\":true,\\"name\\":\\"dtstestdata\\",\\"state\\":\\"normal\\"}}
     *
     * @var string
     */
    public $dbObject;

    /**
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The ID of the request.
     *
     * @example 0
     *
     * @var int
     */
    public $delay;

    /**
     * @var bool
     */
    public $demoJob;

    /**
     * @description The instance class.
     *
     * >  For more information about the test performance of each instance class, see [Specifications of data migration instances](https://help.aliyun.com/document_detail/26606.html) and [Specifications of data synchronization instances](https://help.aliyun.com/document_detail/26605.html).
     * @example CLASSIC
     *
     * @var string
     */
    public $destNetType;

    /**
     * @description The name of the database that contains the objects to be migrated from the source instance.
     *
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @var string
     */
    public $dtsBisLabel;

    /**
     * @description Indicates whether the new change tracking feature is used.
     *
     * >  This parameter is returned only for change tracking instances of the new version.
     * @example dtsi03e3zty16i****
     *
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example xlarge
     *
     * @var string
     */
    public $dtsJobClass;

    /**
     * @description The beginning of the time range for change tracking. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example Forward
     *
     * @var string
     */
    public $dtsJobDirection;

    /**
     * @description API test
     *
     * @example i03e3zty16i****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**: Data is synchronized from the source database to the destination database.
     *   **Reverse**: Data is synchronized from the destination database to the source database.
     *
     * >
     *   Default value: **Forward**.
     *   The value **Reverse** takes effect only if the topology of the data synchronization instance is two-way synchronization.
     *
     * @example The ID of the region in which the Data Transmission Service (DTS) instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @var string
     */
    public $dtsJobName;

    /**
     * @description The error message returned if the request failed.
     *
     * @example DtsJobId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The reserved parameter of DTS. The value is a JSON string. You can specify this parameter to meet specific requirements, for example, whether to automatically start a precheck. For more information, see [MigrationReserved](https://help.aliyun.com/document_detail/176470.html).
     *
     * @example 2021-03-26T14:03:21Z
     *
     * @var string
     */
    public $endTimestamp;

    /**
     * @description The start offset of incremental data migration or synchronization. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The point in time when the instance expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * >  This parameter is returned only if the return value of the **PayType** parameter is **PrePaid**.
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The name of the data migration, data synchronization, or change tracking task.
     *
     * @example DTS-070211: Connect Source DB failed. cause by [com.mysql.jdbc.exceptions.jdbc4.MySQLNonTransientConnectionException:Could not create connection to database server. Attempted reconnect 3 times. Giving up.][com.mysql.jdbc.exceptions.jdbc4.CommunicationsException:Communications link failure\\n\\nThe last packet sent successfully to the server was 0 milliseconds ago. The driver has not received any packets from the server.][java.net.ConnectException:Connection timed out (Connection timed out)] About more information in [https://yq.aliyun.com/articles/499178].
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The objects of the data migration, data synchronization, or change tracking task. For more information, see [Objects of DTS tasks](https://help.aliyun.com/document_detail/209545.html).
     *
     * @example { 	"cells ": [{\\"shape\\":\\"edge\\",\\"attrs\\":{\\"line\\":{\\"stroke\\":\\"#b1b1b1\\",\\"strokeWidth\\":1,\\"targetMarker\\":{\\"name\\":\\"block\\",\\"args\\":{\\"size\\":\\"8\\"}},\\"strokeDasharray\\":\\"\\"}},\\"id\\":\\"cd1ec473-f9b9-4e9b-a742-ac23f44299e1\\",\\"source\\":{\\"cell\\":\\"8b261182-bfab-4803-ad8e-6bb08e3e0a99\\",\\"port\\":\\"out1\\"},\\"target\\":{\\"cell\\":\\"b36770df-f48c-4d6b-9644-54c5e9242987\\",\\"port\\":\\"in1\\"},\\"zIndex\\":7 	}] }
     *
     * @var string
     */
    public $etlCalculator;

    /**
     * @description The error code. This parameter will be removed in the future.
     *
     * @example 2021-06-16T08:01:19Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The state of the data migration or data synchronization task.
     *
     * Valid values for a data migration task:
     *
     *   **NotStarted**: The migration is not started.
     *   **Migrating**: The migration is in progress.
     *   **Failed**: The migration failed.
     *   **Finished**: The migration is complete.
     *
     * Valid values for a data synchronization task:
     *
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is in precheck.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **Initializing**: The task is performing initial synchronization.
     *   **InitializeFailed**: Initial synchronization failed.
     *   **Synchronizing**: The task is in progress.
     *   **Failed**: The task failed to synchronize data.
     *   **Suspending**: The task is paused.
     *   **Modifying**: The objects in the task are being modified.
     *   **Finished**: The task is complete.
     *
     * @example 2021-03-16T10:34:17Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The operator information of the extract, transform, and load (ETL) task.
     *
     * >  This parameter is returned only if you query the details of an ETL task.
     * @example i03e3zty16i****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the \\*\\*%s\\*\\* variable in the **ErrMessage** parameter.
     *
     * >  If the return value of the **ErrMessage** parameter is **The Value of Input Parameter %s is not valid** and the return value of the **DynamicMessage** parameter is **DtsJobId**, the specified **DtsJobId** parameter is invalid.
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var float
     */
    public $maxDu;

    /**
     * @description The type of the destination instance.
     *
     * @var migrationMode
     */
    public $migrationMode;

    /**
     * @var float
     */
    public $minDu;

    /**
     * @description The error message returned if the task failed.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The network type of the consumer client. Valid values:
     *
     *   **CLASSIC**: classic network
     *   **VPC**: Virtual Private Cloud (VPC)
     *
     * @example 29207299-7C41-493A-BA4F-2FAC5DE4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example {\\"srcHostPorts\\":\\"\\",\\"whitelist.dms.online.ddl.enable\\":false,\\"filterDDL\\":false,\\"sqlparser.dms.original.ddl\\":true,\\"srcOracleType\\":\\"sid\\",\\"maxRetryTime\\":43200,\\"destSSL\\":\\"0\\",\\"destOracleType\\":\\"sid\\",\\"srcSSL\\":\\"0\\",\\"dbListCaseChangeMode\\":\\"default\\",\\"SourceEngineVersion\\":\\"8.0.18\\",\\"srcNetType\\":\\"VPC\\",\\"destNetType\\":\\"VPC\\",\\"srcVpcNetMappingInst\\":\\"172.16.1**.**:10803\\",\\"destVpcNetMappingInst\\":\\"172.16.1**.**:11077\\",\\"useJobTask\\":\\"1\\"}
     *
     * @var string
     */
    public $reserved;

    /**
     * @var string
     */
    public $resourceGroupDisplayName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var retryState
     */
    public $retryState;

    /**
     * @description The ID of the DTS task.
     *
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance.
     *
     * @example Migrating
     *
     * @var string
     */
    public $status;

    /**
     * @var subDistributedJob[]
     */
    public $subDistributedJob;

    /**
     * @var subSyncJob[]
     */
    public $subSyncJob;

    /**
     * @description The end of the time range for change tracking. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example cn_hangzhou_rm_bp1162kryivb8****_dtstest_version2
     *
     * @var string
     */
    public $subscribeTopic;

    /**
     * @description The VPC endpoint of the change tracking instance in the `<Address>:<Port number>` format.
     *
     * @var subscriptionDataType
     */
    public $subscriptionDataType;

    /**
     * @description Indicates whether full data migration or synchronization is performed. Valid values:
     *
     *   **true**: Full data migration or synchronization is performed.
     *   **false**: Full data migration or synchronization is not performed.
     *
     * @var subscriptionHost
     */
    public $subscriptionHost;

    /**
     * @description The latency of incremental data migration or synchronization.
     *
     * >  If you query data migration tasks, the unit of this parameter is milliseconds. If you query data synchronization tasks, the unit of this parameter is seconds.
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The status code returned.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'appName'                   => 'AppName',
        'beginTimestamp'            => 'BeginTimestamp',
        'binlog'                    => 'Binlog',
        'binlogSite'                => 'BinlogSite',
        'binlogTime'                => 'BinlogTime',
        'bootTime'                  => 'BootTime',
        'checkpoint'                => 'Checkpoint',
        'code'                      => 'Code',
        'consumptionCheckpoint'     => 'ConsumptionCheckpoint',
        'consumptionClient'         => 'ConsumptionClient',
        'createTime'                => 'CreateTime',
        'dataDeliveryChannelInfo'   => 'DataDeliveryChannelInfo',
        'dataSynchronizationStatus' => 'DataSynchronizationStatus',
        'databaseCount'             => 'DatabaseCount',
        'dbObject'                  => 'DbObject',
        'dedicatedClusterId'        => 'DedicatedClusterId',
        'delay'                     => 'Delay',
        'demoJob'                   => 'DemoJob',
        'destNetType'               => 'DestNetType',
        'destinationEndpoint'       => 'DestinationEndpoint',
        'dtsBisLabel'               => 'DtsBisLabel',
        'dtsInstanceID'             => 'DtsInstanceID',
        'dtsJobClass'               => 'DtsJobClass',
        'dtsJobDirection'           => 'DtsJobDirection',
        'dtsJobId'                  => 'DtsJobId',
        'dtsJobName'                => 'DtsJobName',
        'dynamicMessage'            => 'DynamicMessage',
        'endTimestamp'              => 'EndTimestamp',
        'errCode'                   => 'ErrCode',
        'errMessage'                => 'ErrMessage',
        'errorMessage'              => 'ErrorMessage',
        'etlCalculator'             => 'EtlCalculator',
        'expireTime'                => 'ExpireTime',
        'finishTime'                => 'FinishTime',
        'groupId'                   => 'GroupId',
        'httpStatusCode'            => 'HttpStatusCode',
        'jobType'                   => 'JobType',
        'lastUpdateTime'            => 'LastUpdateTime',
        'maxDu'                     => 'MaxDu',
        'migrationMode'             => 'MigrationMode',
        'minDu'                     => 'MinDu',
        'payType'                   => 'PayType',
        'requestId'                 => 'RequestId',
        'reserved'                  => 'Reserved',
        'resourceGroupDisplayName'  => 'ResourceGroupDisplayName',
        'resourceGroupId'           => 'ResourceGroupId',
        'retryState'                => 'RetryState',
        'sourceEndpoint'            => 'SourceEndpoint',
        'status'                    => 'Status',
        'subDistributedJob'         => 'SubDistributedJob',
        'subSyncJob'                => 'SubSyncJob',
        'subscribeTopic'            => 'SubscribeTopic',
        'subscriptionDataType'      => 'SubscriptionDataType',
        'subscriptionHost'          => 'SubscriptionHost',
        'success'                   => 'Success',
        'synchronizationDirection'  => 'SynchronizationDirection',
        'taskType'                  => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->beginTimestamp) {
            $res['BeginTimestamp'] = $this->beginTimestamp;
        }
        if (null !== $this->binlog) {
            $res['Binlog'] = $this->binlog;
        }
        if (null !== $this->binlogSite) {
            $res['BinlogSite'] = $this->binlogSite;
        }
        if (null !== $this->binlogTime) {
            $res['BinlogTime'] = $this->binlogTime;
        }
        if (null !== $this->bootTime) {
            $res['BootTime'] = $this->bootTime;
        }
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consumptionCheckpoint) {
            $res['ConsumptionCheckpoint'] = $this->consumptionCheckpoint;
        }
        if (null !== $this->consumptionClient) {
            $res['ConsumptionClient'] = $this->consumptionClient;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataDeliveryChannelInfo) {
            $res['DataDeliveryChannelInfo'] = null !== $this->dataDeliveryChannelInfo ? $this->dataDeliveryChannelInfo->toMap() : null;
        }
        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toMap() : null;
        }
        if (null !== $this->databaseCount) {
            $res['DatabaseCount'] = $this->databaseCount;
        }
        if (null !== $this->dbObject) {
            $res['DbObject'] = $this->dbObject;
        }
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->demoJob) {
            $res['DemoJob'] = $this->demoJob;
        }
        if (null !== $this->destNetType) {
            $res['DestNetType'] = $this->destNetType;
        }
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->dtsBisLabel) {
            $res['DtsBisLabel'] = $this->dtsBisLabel;
        }
        if (null !== $this->dtsInstanceID) {
            $res['DtsInstanceID'] = $this->dtsInstanceID;
        }
        if (null !== $this->dtsJobClass) {
            $res['DtsJobClass'] = $this->dtsJobClass;
        }
        if (null !== $this->dtsJobDirection) {
            $res['DtsJobDirection'] = $this->dtsJobDirection;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->etlCalculator) {
            $res['EtlCalculator'] = $this->etlCalculator;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->maxDu) {
            $res['MaxDu'] = $this->maxDu;
        }
        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toMap() : null;
        }
        if (null !== $this->minDu) {
            $res['MinDu'] = $this->minDu;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->resourceGroupDisplayName) {
            $res['ResourceGroupDisplayName'] = $this->resourceGroupDisplayName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retryState) {
            $res['RetryState'] = null !== $this->retryState ? $this->retryState->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subDistributedJob) {
            $res['SubDistributedJob'] = [];
            if (null !== $this->subDistributedJob && \is_array($this->subDistributedJob)) {
                $n = 0;
                foreach ($this->subDistributedJob as $item) {
                    $res['SubDistributedJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subSyncJob) {
            $res['SubSyncJob'] = [];
            if (null !== $this->subSyncJob && \is_array($this->subSyncJob)) {
                $n = 0;
                foreach ($this->subSyncJob as $item) {
                    $res['SubSyncJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subscribeTopic) {
            $res['SubscribeTopic'] = $this->subscribeTopic;
        }
        if (null !== $this->subscriptionDataType) {
            $res['SubscriptionDataType'] = null !== $this->subscriptionDataType ? $this->subscriptionDataType->toMap() : null;
        }
        if (null !== $this->subscriptionHost) {
            $res['SubscriptionHost'] = null !== $this->subscriptionHost ? $this->subscriptionHost->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDtsJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BeginTimestamp'])) {
            $model->beginTimestamp = $map['BeginTimestamp'];
        }
        if (isset($map['Binlog'])) {
            $model->binlog = $map['Binlog'];
        }
        if (isset($map['BinlogSite'])) {
            $model->binlogSite = $map['BinlogSite'];
        }
        if (isset($map['BinlogTime'])) {
            $model->binlogTime = $map['BinlogTime'];
        }
        if (isset($map['BootTime'])) {
            $model->bootTime = $map['BootTime'];
        }
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsumptionCheckpoint'])) {
            $model->consumptionCheckpoint = $map['ConsumptionCheckpoint'];
        }
        if (isset($map['ConsumptionClient'])) {
            $model->consumptionClient = $map['ConsumptionClient'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataDeliveryChannelInfo'])) {
            $model->dataDeliveryChannelInfo = dataDeliveryChannelInfo::fromMap($map['DataDeliveryChannelInfo']);
        }
        if (isset($map['DataSynchronizationStatus'])) {
            $model->dataSynchronizationStatus = dataSynchronizationStatus::fromMap($map['DataSynchronizationStatus']);
        }
        if (isset($map['DatabaseCount'])) {
            $model->databaseCount = $map['DatabaseCount'];
        }
        if (isset($map['DbObject'])) {
            $model->dbObject = $map['DbObject'];
        }
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['DemoJob'])) {
            $model->demoJob = $map['DemoJob'];
        }
        if (isset($map['DestNetType'])) {
            $model->destNetType = $map['DestNetType'];
        }
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['DtsBisLabel'])) {
            $model->dtsBisLabel = $map['DtsBisLabel'];
        }
        if (isset($map['DtsInstanceID'])) {
            $model->dtsInstanceID = $map['DtsInstanceID'];
        }
        if (isset($map['DtsJobClass'])) {
            $model->dtsJobClass = $map['DtsJobClass'];
        }
        if (isset($map['DtsJobDirection'])) {
            $model->dtsJobDirection = $map['DtsJobDirection'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['EtlCalculator'])) {
            $model->etlCalculator = $map['EtlCalculator'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['MaxDu'])) {
            $model->maxDu = $map['MaxDu'];
        }
        if (isset($map['MigrationMode'])) {
            $model->migrationMode = migrationMode::fromMap($map['MigrationMode']);
        }
        if (isset($map['MinDu'])) {
            $model->minDu = $map['MinDu'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['ResourceGroupDisplayName'])) {
            $model->resourceGroupDisplayName = $map['ResourceGroupDisplayName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetryState'])) {
            $model->retryState = retryState::fromMap($map['RetryState']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubDistributedJob'])) {
            if (!empty($map['SubDistributedJob'])) {
                $model->subDistributedJob = [];
                $n                        = 0;
                foreach ($map['SubDistributedJob'] as $item) {
                    $model->subDistributedJob[$n++] = null !== $item ? subDistributedJob::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubSyncJob'])) {
            if (!empty($map['SubSyncJob'])) {
                $model->subSyncJob = [];
                $n                 = 0;
                foreach ($map['SubSyncJob'] as $item) {
                    $model->subSyncJob[$n++] = null !== $item ? subSyncJob::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubscribeTopic'])) {
            $model->subscribeTopic = $map['SubscribeTopic'];
        }
        if (isset($map['SubscriptionDataType'])) {
            $model->subscriptionDataType = subscriptionDataType::fromMap($map['SubscriptionDataType']);
        }
        if (isset($map['SubscriptionHost'])) {
            $model->subscriptionHost = subscriptionHost::fromMap($map['SubscriptionHost']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
