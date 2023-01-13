<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetInvalidDomainCountResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $invalidDomainCount;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invalidDomainCount' => 'InvalidDomainCount',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDomainCount) {
            $res['InvalidDomainCount'] = $this->invalidDomainCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInvalidDomainCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidDomainCount'])) {
            $model->invalidDomainCount = $map['InvalidDomainCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}