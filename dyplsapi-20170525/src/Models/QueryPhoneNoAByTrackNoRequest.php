<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryPhoneNoAByTrackNoRequest extends Model
{
    /**
     * @description The cabinet number.
     *
     * @example 25689****
     *
     * @var string
     */
    public $cabinetNo;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Phone number X returned by the API operation for creating a binding.
     *
     * @example 1710000****
     *
     * @var string
     */
    public $phoneNoX;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tracking number.
     *
     * This parameter is required.
     * @example 22573****
     *
     * @var string
     */
    public $trackNo;
    protected $_name = [
        'cabinetNo'            => 'CabinetNo',
        'ownerId'              => 'OwnerId',
        'phoneNoX'             => 'PhoneNoX',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'trackNo'              => 'trackNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabinetNo) {
            $res['CabinetNo'] = $this->cabinetNo;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->trackNo) {
            $res['trackNo'] = $this->trackNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPhoneNoAByTrackNoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CabinetNo'])) {
            $model->cabinetNo = $map['CabinetNo'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['trackNo'])) {
            $model->trackNo = $map['trackNo'];
        }

        return $model;
    }
}
