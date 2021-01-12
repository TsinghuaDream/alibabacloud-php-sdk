<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceKernelVersionRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $upgradeTime;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $targetMinorVersion;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'DBInstanceId'         => 'DBInstanceId',
        'upgradeTime'          => 'UpgradeTime',
        'switchTime'           => 'SwitchTime',
        'targetMinorVersion'   => 'TargetMinorVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->upgradeTime) {
            $res['UpgradeTime'] = $this->upgradeTime;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceKernelVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['UpgradeTime'])) {
            $model->upgradeTime = $map['UpgradeTime'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }

        return $model;
    }
}
