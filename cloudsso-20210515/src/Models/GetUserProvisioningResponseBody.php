<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningResponseBody\userProvisioning;
use AlibabaCloud\Tea\Model;

class GetUserProvisioningResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F6F90F3D-4502-5877-B80B-97476F6AE2CC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the RAM user provisioning.
     *
     * @var userProvisioning
     */
    public $userProvisioning;
    protected $_name = [
        'requestId'        => 'RequestId',
        'userProvisioning' => 'UserProvisioning',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userProvisioning) {
            $res['UserProvisioning'] = null !== $this->userProvisioning ? $this->userProvisioning->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserProvisioningResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserProvisioning'])) {
            $model->userProvisioning = userProvisioning::fromMap($map['UserProvisioning']);
        }

        return $model;
    }
}
