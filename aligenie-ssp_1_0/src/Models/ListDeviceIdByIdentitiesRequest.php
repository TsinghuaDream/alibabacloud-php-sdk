<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceIdByIdentitiesRequest extends Model
{
    /**
     * @example 125****0946
     *
     * @var string
     */
    public $encodeKey;

    /**
     * @example PROJECT_ID
     *
     * @var string
     */
    public $encodeType;

    /**
     * @var string[]
     */
    public $identityIds;

    /**
     * @example MAC
     *
     * @var string
     */
    public $identityType;

    /**
     * @example Mm*****XnZ8
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'encodeKey'    => 'EncodeKey',
        'encodeType'   => 'EncodeType',
        'identityIds'  => 'IdentityIds',
        'identityType' => 'IdentityType',
        'productKey'   => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->identityIds) {
            $res['IdentityIds'] = $this->identityIds;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceIdByIdentitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['IdentityIds'])) {
            if (!empty($map['IdentityIds'])) {
                $model->identityIds = $map['IdentityIds'];
            }
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
