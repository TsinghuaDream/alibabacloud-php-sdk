<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CreateRDSToClickhouseDbRequest extends Model
{
    /**
     * @description The password of the account that is used to log on to the database in the ApsaraDB for ClickHouse cluster.
     *
     * This parameter is required.
     * @example 123456Aa
     *
     * @var string
     */
    public $ckPassword;

    /**
     * @description The account that is used to log on to the database in the ApsaraDB for ClickHouse cluster.
     *
     * This parameter is required.
     * @example user1
     *
     * @var string
     */
    public $ckUserName;

    /**
     * @description The port number of the ApsaraDB for ClickHouse cluster.
     *
     * @example 8123
     *
     * @var int
     */
    public $clickhousePort;

    /**
     * @description The ID of the ApsaraDB for ClickHouse cluster.
     *
     * This parameter is required.
     * @example cc-2ze5zeyl72188****
     *
     * @var string
     */
    public $dbClusterId;

    /**
     * @description The maximum number of rows that can be synchronized per second.
     *
     * @example 50000
     *
     * @var int
     */
    public $limitUpper;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required.
     * @example rm-8vb989qj9roh0****
     *
     * @var string
     */
    public $rdsId;

    /**
     * @description The password of the account that is used to log on to the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required.
     * @example 123456Rr
     *
     * @var string
     */
    public $rdsPassword;

    /**
     * @description The port number of the ApsaraDB RDS for MySQL instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $rdsPort;

    /**
     * @description The account that is used to log on to the database in the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required.
     * @example user2
     *
     * @var string
     */
    public $rdsUserName;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the ApsaraDB RDS for MySQL instance belongs.
     *
     * @example vpc-2zen93xryil99jsfy****
     *
     * @var string
     */
    public $rdsVpcId;

    /**
     * @description The private endpoint of the ApsaraDB RDS for MySQL instance.
     *
     * @example rm-bp16t9h3999xb0a7****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $rdsVpcUrl;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to ignore the table schemas that do not support synchronization. Valid values:
     *
     *   **true**
     *   **false**
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $skipUnsupported;

    /**
     * @description The tables whose data you want to synchronize.
     *
     * This parameter is required.
     * @example [{"Schema":"recommend","Tables":["mr_platform_cpm","mr_platform_ecpm","p_monitor_record"]}]
     *
     * @var string
     */
    public $synDbTables;
    protected $_name = [
        'ckPassword'           => 'CkPassword',
        'ckUserName'           => 'CkUserName',
        'clickhousePort'       => 'ClickhousePort',
        'dbClusterId'          => 'DbClusterId',
        'limitUpper'           => 'LimitUpper',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'rdsId'                => 'RdsId',
        'rdsPassword'          => 'RdsPassword',
        'rdsPort'              => 'RdsPort',
        'rdsUserName'          => 'RdsUserName',
        'rdsVpcId'             => 'RdsVpcId',
        'rdsVpcUrl'            => 'RdsVpcUrl',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'skipUnsupported'      => 'SkipUnsupported',
        'synDbTables'          => 'SynDbTables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ckPassword) {
            $res['CkPassword'] = $this->ckPassword;
        }
        if (null !== $this->ckUserName) {
            $res['CkUserName'] = $this->ckUserName;
        }
        if (null !== $this->clickhousePort) {
            $res['ClickhousePort'] = $this->clickhousePort;
        }
        if (null !== $this->dbClusterId) {
            $res['DbClusterId'] = $this->dbClusterId;
        }
        if (null !== $this->limitUpper) {
            $res['LimitUpper'] = $this->limitUpper;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->rdsId) {
            $res['RdsId'] = $this->rdsId;
        }
        if (null !== $this->rdsPassword) {
            $res['RdsPassword'] = $this->rdsPassword;
        }
        if (null !== $this->rdsPort) {
            $res['RdsPort'] = $this->rdsPort;
        }
        if (null !== $this->rdsUserName) {
            $res['RdsUserName'] = $this->rdsUserName;
        }
        if (null !== $this->rdsVpcId) {
            $res['RdsVpcId'] = $this->rdsVpcId;
        }
        if (null !== $this->rdsVpcUrl) {
            $res['RdsVpcUrl'] = $this->rdsVpcUrl;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->skipUnsupported) {
            $res['SkipUnsupported'] = $this->skipUnsupported;
        }
        if (null !== $this->synDbTables) {
            $res['SynDbTables'] = $this->synDbTables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRDSToClickhouseDbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CkPassword'])) {
            $model->ckPassword = $map['CkPassword'];
        }
        if (isset($map['CkUserName'])) {
            $model->ckUserName = $map['CkUserName'];
        }
        if (isset($map['ClickhousePort'])) {
            $model->clickhousePort = $map['ClickhousePort'];
        }
        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
        }
        if (isset($map['LimitUpper'])) {
            $model->limitUpper = $map['LimitUpper'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RdsId'])) {
            $model->rdsId = $map['RdsId'];
        }
        if (isset($map['RdsPassword'])) {
            $model->rdsPassword = $map['RdsPassword'];
        }
        if (isset($map['RdsPort'])) {
            $model->rdsPort = $map['RdsPort'];
        }
        if (isset($map['RdsUserName'])) {
            $model->rdsUserName = $map['RdsUserName'];
        }
        if (isset($map['RdsVpcId'])) {
            $model->rdsVpcId = $map['RdsVpcId'];
        }
        if (isset($map['RdsVpcUrl'])) {
            $model->rdsVpcUrl = $map['RdsVpcUrl'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SkipUnsupported'])) {
            $model->skipUnsupported = $map['SkipUnsupported'];
        }
        if (isset($map['SynDbTables'])) {
            $model->synDbTables = $map['SynDbTables'];
        }

        return $model;
    }
}
