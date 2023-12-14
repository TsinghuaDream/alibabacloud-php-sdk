<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeleteStorageBundleRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example sb-0001b2otnkdxrigeq***
     *
     * @var string
     */
    public $storageBundleId;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'storageBundleId' => 'StorageBundleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->storageBundleId) {
            $res['StorageBundleId'] = $this->storageBundleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStorageBundleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StorageBundleId'])) {
            $model->storageBundleId = $map['StorageBundleId'];
        }

        return $model;
    }
}
