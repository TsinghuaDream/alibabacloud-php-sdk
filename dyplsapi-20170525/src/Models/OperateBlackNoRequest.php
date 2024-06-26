<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class OperateBlackNoRequest extends Model
{
    /**
     * @description The phone number to be added to or deleted from the blacklist.
     *
     * This parameter is required.
     * @example 150****0000
     *
     * @var string
     */
    public $blackNo;

    /**
     * @description The type of the operation on the phone number. Valid values:
     *
     *   **AddBlack**: adds the phone number to the blacklist.
     *   **DeleteBlack**: deletes the phone number from the blacklist.
     *
     * This parameter is required.
     * @example AddBlack
     *
     * @var string
     */
    public $operateType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The key of the phone number pool. Log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) and view the key of the phone number pool on the **Number Pool Management** page.
     *
     * This parameter is required.
     * @example FC123456****
     *
     * @var string
     */
    public $poolKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The description.
     *
     * @example abcdef
     *
     * @var string
     */
    public $tips;
    protected $_name = [
        'blackNo'              => 'BlackNo',
        'operateType'          => 'OperateType',
        'ownerId'              => 'OwnerId',
        'poolKey'              => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tips'                 => 'Tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackNo) {
            $res['BlackNo'] = $this->blackNo;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateBlackNoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackNo'])) {
            $model->blackNo = $map['BlackNo'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
